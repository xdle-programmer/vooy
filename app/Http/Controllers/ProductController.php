<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Characteristic;
use App\Models\SearchQuery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

use App\Models\Product;
use App\Models\ProductPrice;
use App\Models\ProductAttachment;
use App\Models\ProductCharacteristic;
use App\Models\ProductCharcteristicSelect;
use function Couchbase\defaultDecoder;

class ProductController extends Controller
{
    public function productList(Request $request)
    {
        $filter = $request->filter;
        $products;
        $categories = Category::with('products')->get();
        $characteristics = null;
        if ($filter != null) {
            $products = Product::with('prices');

            if (isset($filter['title'])) {
                if ($filter['title']) {
                    $products = $products->where('title', 'like', '%' . $filter['title'] . '%');
                }
            }
            if (isset($filter['category'])) {
                if ($filter['category'] != 0) {
                    $products = $products->whereHas('categories', function ($q) use ($filter) {
                        $q->where('category_id', $filter['category']);
                    });

                    $characteristics = Category::with('characteristics', 'characteristics.selects')->where('id', $filter['category'])->first();
                }
            }

            if (isset($filter['price'])) {
                if ($filter['price']['min'] != null && $filter['price']['max'] != null) {
                    $products = $products->whereHas('prices', function ($q) use ($filter) {
                        $q->where('price', '>=', $filter['price']['min'])
                            ->where('price', '<=', $filter['price']['max']);
                    });
                }
            }
            if (isset($filter['order'])) {
                if ($filter['order']['min'] != null && $filter['order']['max'] != null) {
                    $products = $products->whereHas('prices', function ($q) use ($filter) {
                        $q->where('min', '>=', $filter['order']['min'])
                            ->where('min', '<=', $filter['order']['max']);
                    });
                }
            }
            if (array_key_exists('characteristic', $filter)) {
                foreach ($filter['characteristic'] as $key => $filterChar) {
                    if ($filterChar != null) {
                        if (is_array($filterChar)) {
                            foreach ($filterChar as $sKey => $sFilterChar) {

                                if ($sFilterChar == "on")
                                    $sFilterChar = 'true';
                                else
                                    $sFilterChar = 'false';

                                $products = $products->whereHas('selects', function ($q) use ($sFilterChar, $sKey) {
                                    $q->where('select_id', $sKey)->where('value', $sFilterChar);
                                });
                            }
                        } else {
                            $products = $products->whereHas('characteristics', function ($q) use ($filterChar, $key) {
                                $q->where('characteristic_id', $key)->where('value', $filterChar);
                            });
                        }
                    }
                }
            }

            $products = $products->orderBy('id', 'desc')->paginate(24);
            return view('product-list', ['saveFilter' => $filter, 'products' => $products, 'categories' => $categories, 'characteristics' => $characteristics]);
        }

        $products = Product::with('prices')->orderBy('id', 'desc')->paginate(24);
        return view('product-list', ['saveFilter' => null, 'products' => $products, 'categories' => $categories, 'characteristics' => $characteristics]);
    }

    public function favoriteList(Request $request)
    {
        $user = auth()->user();
        if ($user == null) {
            return back();
        }

        $products = Product::with('prices')->whereHas('product_favorites', function ($q) use ($user) {
            $q->where('user_id', $user->id);
        })->get();

        return view('product-fav-list', ['products' => $products, 'user' => $user]);
    }

    public function productMyList(Request $request)
    {

        $user = auth()->user();
        if ($user == null) {
            return back();
        }

        $products = Product::with('prices')->where('owner_id', $user->id)->orderBy('id', 'desc')->paginate(24);

        return view('account-manufacturer-product-list', ['products' => $products, 'user' => $user]);
    }

    public function productCart(Request $request, int $id)
    {
        $product = Product::find($id);
        $product = Product::with('prices', 'categories',
            'characteristics', 'characteristics.characteristic',
            'characteristics.characteristic.selects',
            'characteristics.characteristic.selects.productselects',
            'selects', 'selects.info', 'attachments')->where('id', $id)->first();
        return view('product-cart', ['product' => $product]);
    }

    public function productNew(Request $request)
    {
        $user = auth()->user();
        if ($user == null)
            return back();
        if ($user->roles() == null)
            return back();
        if ($user->roles()->first()->slug != 'provider')
            return back();

        $categories = Category::with('characteristics', 'characteristics.selects')->get();
        return view('new-product', ['user' => $user, 'categories' => $categories]);
    }

    public function editProduct(int $id)
    {
        $user = auth()->user();
        if ($user == null)
            return back();

        $product = Product::with('prices', 'categories', 'characteristics', 'selects', 'selects.info', 'attachments')->where('id', $id)->first();
        if ($product == null || $product->owner_id != $user->id) {
            return back();
        }

        $categories = Category::with('characteristics', 'characteristics.selects')->get();
        return view('new-product', ['user' => $user, 'product' => $product, 'categories' => $categories]);
    }

    public function createProduct(Request $request)
    {
        $user = auth()->user();
        if ($user == null) {
            return response()->json('user not found');
        }

        $product = $request->input('product');
        //dd($product);
        //dd($request->file('product.attachments'));

        $product_db = new Product();
        $product_db->title = $product['title'];
        $product_db->description = $product['description'];
        $product_db->release_time = $product['date'];
        $product_db->owner_id = $user->id;
        $product_db->save();

        if (isset($product['prices'])) {
            foreach ($product['prices'] as $productPrice) {
                $price_db = new ProductPrice();
                $price_db->min = $productPrice['min'];
                $price_db->max = $productPrice['max'];
                $price_db->price = $productPrice['price'] ?? 0;
                $price_db->currency_id = 1;
                $price_db->product_id = $product_db->id;
                $price_db->save();
            }
        }

        if (isset($product['category'])) {
            if ($product['category'][0] != 0) {
                foreach ($product['category'] as $category) {
                    $product_db->categories()->attach($category);
                }
            }
        }

        if (isset($product['characteristic'])) {
            foreach ($product['characteristic'] as $key => $characteristic) {
                if ($characteristic != null) {
                    if (is_array($characteristic)) {
                        $product_characteristic_db = new ProductCharacteristic();
                        $product_characteristic_db->value = 'select';
                        $product_characteristic_db->product_id = $product_db->id;
                        $product_characteristic_db->characteristic_id = $key;
                        $product_characteristic_db->save();
                        foreach ($characteristic['cb'] as $sKey => $select) {
                            $product_characteristic_select_db = new ProductCharcteristicSelect();
                            $product_characteristic_select_db->value = $select;
                            $product_characteristic_select_db->product_id = $product_db->id;
                            $product_characteristic_select_db->select_id = $sKey;
                            $product_characteristic_select_db->save();
                        }
                    } else {
                        $product_characteristic_db = new ProductCharacteristic();
                        $product_characteristic_db->value = $characteristic;
                        $product_characteristic_db->product_id = $product_db->id;
                        $product_characteristic_db->characteristic_id = $key;
                        $product_characteristic_db->save();
                    }
                }
            }
        }

        if ($request->file('product.attachments') != null) {
            $path = Product::getStoragePath() . $product_db->id . '/';
            foreach ($request->file('product.attachments') as $i => $attachments) {
                $file = $attachments['file'];
                $ext = $file->guessExtension();
                $fileName = $i . time() . '.' . $ext;
                $file->move($path, $fileName);

                $product_attachment_db = new ProductAttachment;
                $product_attachment_db->type = $ext;
                $product_attachment_db->name = $fileName;
                $product_attachment_db->path = $product_db->id . '/' . $fileName;
                $product_attachment_db->product_id = $product_db->id;
                $product_attachment_db->save();
            }

        }

        return response()->json($product_db, 200);
    }

    public function updateProduct(Request $request)
    {
        $user = auth()->user();
        if ($user == null) {
            return response()->json('user not found');
        }
        $product = $request->input('product');

        $product_db = Product::findOrFail($product['id']);
        $product_db->title = $product['title'];
        $product_db->description = $product['description'];
        $product_db->release_time = $product['date'];
        $product_db->save();

        if (isset($product['prices'])) {
            $product_db->prices()->delete();
            foreach ($product['prices'] as $productPrice) {
                $price_db = new ProductPrice();
                $price_db->min = $productPrice['min'];
                $price_db->max = $productPrice['max'];
                $price_db->price = $productPrice['price'];
                $price_db->currency_id = 1;
                $price_db->product_id = $product_db->id;
                $price_db->save();
            }
        }
        $product_db->categories()->detach();
        if (isset($product['category'])) {

            foreach ($product['category'] as $category) {
                $product_db->categories()->attach($category);
            }
        }
        $product_db->characteristics()->delete();
        $product_db->selects()->delete();
        if (isset($product['characteristic'])) {

            foreach ($product['characteristic'] as $key => $characteristic) {
                if (is_array($characteristic)) {
                    $product_characteristic_db = new ProductCharacteristic();
                    $product_characteristic_db->value = 'select';
                    $product_characteristic_db->product_id = $product_db->id;
                    $product_characteristic_db->characteristic_id = $key;
                    $product_characteristic_db->save();
                    foreach ($characteristic['cb'] as $sKey => $select) {
                        $product_characteristic_select_db = new ProductCharcteristicSelect();
                        $product_characteristic_select_db->value = $select;
                        $product_characteristic_select_db->product_id = $product_db->id;
                        $product_characteristic_select_db->select_id = $sKey;
                        $product_characteristic_select_db->save();
                    }
                } else {
                    $product_characteristic_db = new ProductCharacteristic();
                    $product_characteristic_db->value = $characteristic;
                    $product_characteristic_db->product_id = $product_db->id;
                    $product_characteristic_db->characteristic_id = $key;
                    $product_characteristic_db->save();
                }
            }
        }

        if ($request->file('product.attachments') != null) {
            $product_db->attachments()->delete();
            $path = Product::getStoragePath() . $product_db->id . '/';
            foreach ($request->file('product.attachments') as $i => $attachments) {
                $file = $attachments['file'];
                $ext = $file->guessExtension();
                $fileName = $i . time() . '.' . $ext;
                $file->move($path, $fileName);

                $product_attachment_db = new ProductAttachment;
                $product_attachment_db->type = $ext;
                $product_attachment_db->name = $fileName;
                $product_attachment_db->path = $product_db->id . '/' . $fileName;
                $product_attachment_db->product_id = $product_db->id;
                $product_attachment_db->save();
            }

        }

        return response()->json($product_db, 200);
    }

    public function createProducts(Request $request)
    {
        $products = $request->input('products');
        //dd($request->all());
        $user = auth()->user();
        if ($user == null) {
            return response()->json('user not found');
        }

        foreach ($products as $key => $product) {
            $product_attachments = $request->file('products.' . $key . '.attachments');
            // dd($product_attachments);
            $this->productCreation($product, $user, $product_attachments);


        }

        return response()->json('Продукты созданы', 200);
    }

    public function productCreation($product, $user, $product_attachments = null)
    {

        $product_db = new Product();
        $product_db->title = $product['title'];
        $product_db->description = $product['description'];
        if (isset($product['date']))
            $product_db->release_time = $product['date'];
        $product_db->owner_id = $user->id;
        $product_db->save();

        if ($product['prices'] != null) {
            foreach ($product['prices'] as $productPrice) {
                $price_db = new ProductPrice();
                $price_db->min = $productPrice['min'];
                $price_db->max = $productPrice['max'];
                $price_db->price = $productPrice['price'];
                $price_db->currency_id = 1;
                $price_db->product_id = $product_db->id;
                $price_db->save();
            }
        }
        if (isset($product['category'])) {
            if ($product['category'] != null) {
                foreach ($product['category'] as $category) {
                    $product_db->categories()->attach($category);
                }
            }
        }

        if (isset($product['characteristic'])) {
            if ($product['characteristic'] != null) {
                foreach ($product['characteristic'] as $key => $characteristic) {
                    if (is_array($characteristic)) {
                        $product_characteristic_db = new ProductCharacteristic();
                        $product_characteristic_db->value = 'select';
                        $product_characteristic_db->product_id = $product_db->id;
                        $product_characteristic_db->characteristic_id = $key;
                        $product_characteristic_db->save();
                        foreach ($characteristic['cb'] as $sKey => $select) {
                            $product_characteristic_select_db = new ProductCharcteristicSelect();
                            $product_characteristic_select_db->value = $select;
                            $product_characteristic_select_db->product_id = $product_db->id;
                            $product_characteristic_select_db->select_id = $sKey;
                            $product_characteristic_select_db->save();
                        }
                    } else {
                        $product_characteristic_db = new ProductCharacteristic();
                        $product_characteristic_db->value = $characteristic;
                        $product_characteristic_db->product_id = $product_db->id;
                        $product_characteristic_db->characteristic_id = $key;
                        $product_characteristic_db->save();
                    }
                }
            }
        }

        if ($product_attachments != null) {
            $path = Product::getStoragePath() . $product_db->id . '/';
            foreach ($product_attachments as $i => $attachments) {
                $file = $attachments['file'];
                $ext = $file->guessExtension();
                $fileName = $i . time() . '.' . $ext;
                $file->move($path, $fileName);

                $product_attachment_db = new ProductAttachment;
                $product_attachment_db->type = $ext;
                $product_attachment_db->name = $fileName;
                $product_attachment_db->path = $product_db->id . '/' . $fileName;
                $product_attachment_db->product_id = $product_db->id;
                $product_attachment_db->save();
            }

        }

        return $product_db;
    }

    public function getProduct(Product $product)
    {
        $product->load(['prices', 'categories', 'characteristics', 'attachments']);
        return $product;
    }

    public function searchProducts(Request $request, string $product)
    {
        $request->validate([
            'category' => 'nullable|exists:App\Models\Category,id'
        ]);


        $products = Product::with('categories', 'prices', 'attachments')->where('title', 'like', '%' . $product . '%');
        if ($request->input('category')) {
            $category_id = $request->input('category');

            $products = $products->whereHas('categories', function ($q) use ($category_id) {
                return $q->where('categories.id', $category_id);
            });
        }
        $products = $products->get();
        return response()->json($products, 200);
    }

    public function addProductToFavorite(Request $request, Product $product)
    {
        $user = auth()->user();
        if ($user == null) {
            return response()->json('user not found');
        }

        $user->product_favorites()->attach($product->id);

        return response()->json($product, 200);
    }

    public function removeProductfromFavorite(Request $request, Product $product)
    {
        $user = auth()->user();
        if ($user == null) {
            return response()->json('user not found');
        }

        $user->product_favorites()->detach($product->id);

        return response()->json($product, 200);
    }

    public function searchProductHint(Request $request)
    {
        $request->validate([
            'request' => 'required|string'
        ]);
        $text = $request->input('request');
        $user = auth()->user();

        $products = Product::select('products.id as id', 'products.title as name', 'product_prices.price as price', 'product_attachments.path as img')
            ->leftJoin('product_attachments', 'product_attachments.product_id', 'products.id')
            ->leftJoin('product_prices', 'product_prices.product_id', 'products.id')
            ->where('products.title', 'like', '%' . $text . '%')
            ->groupBy('products.id')->take(10)->get();
        $categories = Category::select('categories.name','categories.id')->whereHas('products', function ($q) use ($text) {
            $q->where('products.title', 'like', '%' . $text . '%');
        })->take(10)->get();

        $popular = SearchQuery::select('search_queries.text as name', 'search_queries.count as count')->orderBy('count','desc')->take(5)->get();
        $history = null;
        if ($user != null) {
            $history = SearchQuery::select('search_queries.text as name', 'search_queries.count as count')->whereHas('users', function ($q) use ($user) {
                $q->where('users.id', $user->id);
            })->orderBy('updated_at','desc')->take(5)->get();
        }
        return response()->json([
            'products' => $products,
            'history' => $history,
            'popular' => $popular,
            'category' => $categories,
        ]);
    }

    public function searchProductSave(Request $request)
    {
        $request->validate([
            'request' => 'required|string'
        ]);
        $text = $request->input('request');
        $user = auth()->user();

        $searchQuery = SearchQuery::where('text', $text)->first();
        if ($searchQuery != null) {
            $searchQuery->count = $searchQuery->count + 1;
            $searchQuery->save();
        } else {
            $searchQuery = new SearchQuery();
            $searchQuery->text = $text;
            $searchQuery->count = 1;
            $searchQuery->save();
        }
        if ($user != null) {
            $searchQuery->users()->attach($user);
        }
        return response()->json([
            'status' => "Ok",
            'search_query' => $searchQuery,
        ]);

    }
}
