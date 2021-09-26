<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Characteristic;
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
        //dd($request->all());
        $filter = $request->filter;
        $products;
        $categories = Category::where('parrent_id', null)->get();
        $characteristics = null;
        if ($filter != null) {
            $products = Product::with('prices');
            if ($filter['category']) {
                $products = $products->whereHas('categories', function ($q) use ($filter) {
                    $q->where('category_id', $filter['category']);
                });

                $characteristics = Category::with('characteristics', 'characteristics.selects')->where('id', $filter['category'])->first();
            }

            if ($filter['price']['min'] != null && $filter['price']['max'] != null) {
                $products = $products->whereHas('prices', function ($q) use ($filter) {
                    $q->where('price', '>=', $filter['price']['min'])
                        ->where('price', '<=', $filter['price']['max']);
                });
            }
            if ($filter['order']['min'] != null && $filter['order']['max'] != null) {
                $products = $products->whereHas('prices', function ($q) use ($filter) {
                    $q->where('min', '>=', $filter['order']['min'])
                        ->where('min', '<=', $filter['order']['max']);
                });
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

            $products = $products->get();
            return view('product-list', ['saveFilter' => $filter, 'products' => $products, 'categories' => $categories, 'characteristics' => $characteristics]);
        }

        $products = Product::with('prices')->get();
        return view('product-list', ['saveFilter' => null, 'products' => $products, 'categories' => $categories, 'characteristics' => $characteristics]);
    }

    public function productCart(Request $request, int $id)
    {
        $product = Product::find($id);
        $product = Product::with('prices','categories',
            'characteristics','characteristics.characteristic',
            'characteristics.characteristic.selects',
            'characteristics.characteristic.selects.productselects',
            'selects', 'selects.info','attachments')->where('id', $id)->first();
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

        $product = Product::with('prices','categories','characteristics','selects', 'selects.info','attachments')->where('id', $id)->first();
        if ($product == null || $product->owner_id != $user->id) {
            return back();
        }

        $categories = Category::with('characteristics', 'characteristics.selects')->get();
        return view('new-product', ['user' => $user, 'product'=> $product, 'categories' => $categories]);
    }

    public function createProduct(Request $request)
    {

        $user = auth()->user();
        if ($user == null) {
            return response()->json('user not found');
        }

        $product = $request->input('product');
        //dd($product);

        $product_db = new Product();
        $product_db->title = $product['title'];
        $product_db->description = $product['description'];
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

        if ($product['category'] != null) {
            foreach ($product['category'] as $category) {
                $product_db->categories()->attach($category);
            }
        }

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

        return response()->json('Продукт создан', 200);
    }
}
