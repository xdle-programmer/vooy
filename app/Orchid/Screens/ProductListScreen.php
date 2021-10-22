<?php

namespace App\Orchid\Screens;

use App\Models\ProductDisplay;
use Orchid\Screen\Screen;
use App\Models\Product;

use Orchid\Screen\TD;
use Orchid\Support\Facades\Layout;

use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\Link;
use Orchid\Support\Facades\Alert;

class ProductListScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Продукты';

    /**
     * Display header description.
     *
     * @var string|null
     */
    public $description = '';

    /**
     * Query data.
     *
     * @return array
     */
    public function query(): array
    {
        $products = Product::with("prices", "categories", "displays", "attachments")->filters()->paginate(20);

        return [
            'products' => $products
        ];
    }

    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): array
    {
        return [];
    }

    /**
     * Views.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): array
    {
        return [
            Layout::table('products', [
                TD::make('id')
                    ->sort(),

                TD::make('image', "Фото")
                    ->width('400px')
                    ->render(function (Product $product) {
                        $storage = asset('storage/products');
                        $outputHtml = "";
                        if (count($product->attachments) > 0) {
                            $outputHtml .= "<div style='display: grid;
                grid-template-columns: auto auto auto;
                grid-template-rows: auto auto auto;
                gap: 5px 5px;' class='photo-container'>";
                            $tenderCount = count($product->attachments);
                            foreach ($product->attachments as $key => $value) {

                                $outputHtml .= "<img src='{$storage}/{$product->attachments[$key]->path}'
                    alt='sample' style='width: auto; max-height: 200px;'
                    class='d-block img-fluid'>";
                            }
                            $outputHtml .= "</div>";
                        }

                        return $outputHtml;
                    }),

                TD::make('title', 'Название')
                    ->sort(),

                TD::make('categories', 'Категории')
                    ->render(function (Product $product) {
                        $displayList = "";
                        foreach ($product->categories as $category) {
                            $displayList .= $category->name . " ";

                        }

                        return $displayList;
                    }),

                TD::make('displays', 'Вывод')
                    ->width('160px')
                    ->render(function (Product $product) {
                        $displayList = "";
                        foreach ($product->displays as $display) {
                            if ($display->type == 0) {
                                $displayList .=  "[Новинка] ";
                            }
                            else if ($display->type == 1) {
                                $displayList .=  "[Лучшее] ";
                            }
                            else if ($display->type == 2) {
                                $displayList .=  "[Предложение недели] ";
                            }
                            else if ($display->type == 3) {
                                $displayList .=  "[Выгодное предложение] ";
                            }

                        }

                        return $displayList;
                    }),

                TD::make('Действия')->align(TD::ALIGN_CENTER)
                    ->width('100px')
                    ->render(function (Product $product) {
                        $actionList = [];
                        $productDisplays = $product->displays;

                        $display_new = false;
                        $display_best = false;
                        $display_recent = false;
                        $display_profit = false;
                        foreach ($product->displays as $display) {
                            if ($display->type == 0) {
                                $display_new = true;
                                $actionList[] = Button::make("Убрать из новинок")
                                    ->method('displayAction')
                                    ->confirm('Убрать товар из раздела "Новинки"?')
                                    ->parameters([
                                        'id' => $product->id,
                                        'action' => "remove",
                                        'type' => $display->type
                                    ])
                                    ->icon('magnifier');
                            }

                            if ($display->type == 1) {
                                $display_best = true;
                                $actionList[] = Button::make("Убрать из лучшего")
                                    ->method('displayAction')
                                    ->confirm('Убрать товар из раздела "Лучшее"?')
                                    ->parameters([
                                        'id' => $product->id,
                                        'action' => "remove",
                                        'type' => $display->type
                                    ])
                                    ->icon('magnifier');
                            }
                            if ($display->type == 2) {
                                $display_recent = true;
                                $actionList[] = Button::make("Убрать из предложений недели")
                                    ->method('displayAction')
                                    ->confirm('Убрать товар из раздела "Предложения недели"?')
                                    ->parameters([
                                        'id' => $product->id,
                                        'action' => "remove",
                                        'type' => $display->type
                                    ])
                                    ->icon('magnifier');
                            }
                            if ($display->type == 3) {
                                $display_profit = true;
                                $actionList[] = Button::make("Убрать из выгодных предложений")
                                    ->method('displayAction')
                                    ->confirm('Убрать товар из раздела "Выгодные предложения"?')
                                    ->parameters([
                                        'id' => $product->id,
                                        'action' => "remove",
                                        'type' => $display->type
                                    ])
                                    ->icon('magnifier');
                            }
                        }

                        if (!$display_new) {
                            $actionList[] = Button::make("Добавить в новинки")
                                ->method('displayAction')
                                ->confirm('Отображать товар в разделе "Новинки"?')
                                ->parameters([
                                    'id' => $product->id,
                                    'action' => "add",
                                    'type' => 0
                                ])
                                ->icon('magnifier');
                        }
                        if (!$display_best) {
                            $actionList[] = Button::make("Добавить в лучшее")
                                ->method('displayAction')
                                ->confirm('Отображать товар в разделе "Лучшее"?')
                                ->parameters([
                                    'id' => $product->id,
                                    'action' => "add",
                                    'type' => 1
                                ])
                                ->icon('magnifier');
                        }
                        if (!$display_recent) {
                            $actionList[] = Button::make("Добавить в предложений недели")
                                ->method('displayAction')
                                ->confirm('Отображать товар в разделе "Предложения недели"?')
                                ->parameters([
                                    'id' => $product->id,
                                    'action' => "add",
                                    'type' => 2
                                ])
                                ->icon('magnifier');
                        }
                        if (!$display_profit) {
                            $actionList[] = Button::make("Добавить в выгодные предложения")
                                ->method('displayAction')
                                ->confirm('Отображать товар в разделе "Выгодные предложения"?')
                                ->parameters([
                                    'id' => $product->id,
                                    'action' => "add",
                                    'type' => 3
                                ])
                                ->icon('magnifier');
                        }
                        $actionList[] = Button::make("Удалить")
                            ->method('remove')
                            ->confirm('Вы уверены что хотите удалить этот тендер?')
                            ->parameters([
                                'id' => $product->id,
                            ])
                            ->icon('trash');


                        return DropDown::make()
                            ->icon('options-vertical')
                            ->list($actionList);

                    }),
            ]),
        ];
    }

    public function remove(Product $product)
    {
        $product->delete();
        Alert::info('Товар удалён');
        return redirect()->route('platform.products');
    }

    public function displayAction(Product $product, $action, $type)
    {
        if ($action == "remove") {
           $product->displays->where('type',$type)->first()->delete();
            Alert::info("Продукт " . $product->title . " был убран из раздела");
        }
        elseif ($action == "add"){
            $productDisplay = new ProductDisplay();
            $productDisplay->type = $type;
            $productDisplay->product_id = $product->id;
            $productDisplay->save();
            Alert::info("Продукт " . $product->title . " был добавлен в раздел");
        }

        return redirect()->route('platform.products');
    }
}
