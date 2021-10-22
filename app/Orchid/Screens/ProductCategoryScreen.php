<?php

namespace App\Orchid\Screens;

use App\Models\CategoryDisplay;
use Orchid\Screen\Screen;
use App\Models\Category;
use Orchid\Screen\TD;
use Orchid\Support\Facades\Layout;

use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\Link;
use Orchid\Support\Facades\Alert;

class ProductCategoryScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Категории';

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
        $categories = Category::with('displays')->paginate();
        return [
            'categories' => $categories
        ];
    }

    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): array
    {
        return [
            Link::make('Добавить')
                ->icon('pencil')
                ->route('platform.category.edit'),
        ];
    }

    /**
     * Views.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): array
    {
        return [
            Layout::table('categories', [
                TD::make('id'),
                TD::make('name', 'Название'),
                TD::make('tender.id', 'Путь')
                    ->render(function (Category $category) {
                        $fullPath = '';
                        $fullPath = getPath($category);
                        return $fullPath;
                    }),

                TD::make('displays', 'Вывод')
                    ->render(function (Category $category) {
                        if (count($category->displays) != 0)
                            return "Да";
                        else
                            return "Нет";
                    }),

                TD::make(__('Actions'))
                    ->align(TD::ALIGN_CENTER)
                    ->width('100px')
                    ->render(function (Category $category) {
                        $actionList = [];
                        $productDisplays = $category->displays;

                        if (count($category->displays) == 0) {
                            $actionList[] = Button::make("Добавить в предложения")
                                ->method('displayAction')
                                ->confirm("Вы уверены что хотите добавить эту категорию в предложения?")
                                ->parameters([
                                    'id' => $category->id,
                                    'action' => "add"
                                ])
                                ->icon('magnifier');
                        } else {
                            $actionList[] = Button::make("Убрать из предложений")
                                ->method('displayAction')
                                ->confirm("Вы уверены что хотите убрать эту категорию из предложений?")
                                ->parameters([
                                    'id' => $category->id,
                                    'action' => "remove"
                                ])
                                ->icon('magnifier');
                        }


                        $actionList[] = Link::make("Редактировать")
                            ->route('platform.category.edit', $category->id)
                            ->icon('pencil');

                        $actionList[] = Link::make("Характеристики")
                            ->route('platform.category.characteristics', $category->id)
                            ->icon('pencil');


                        $actionList[] = Button::make("Удалить")
                            ->method('remove')
                            ->confirm("Вы уверены что хотите удалить эту категорию?")
                            ->parameters([
                                'id' => $category->id,
                            ])
                            ->icon('trash');

                        return DropDown::make()
                            ->icon('options-vertical')
                            ->list($actionList);
                    }),
            ])
        ];
    }

    public function displayAction(Category $category, $action)
    {
        if ($action == "remove") {
            $category->displays->first()->delete();
            Alert::info("Категория " . $category->title . " была убрана из главной страницы");
        } elseif ($action == "add") {
            $categoryDisplay = new CategoryDisplay();
            $categoryDisplay->category_id = $category->id;
            $categoryDisplay->save();
            Alert::info("Категория " . $category->title . " была добавлена на главную страницу");
        }

        return redirect()->route('platform.categories');
    }

    public function remove(Category $category)
    {
        $category->delete();
        Alert::info('Категория удалена');
        return redirect()->route('platform.categories');
    }
}

function getPath($category)
{
    if ($category->parrent_id != null) {
        $parentCategory = Category::find($category->parrent_id);
        $curPath = getPath($parentCategory);
        return $curPath . ' > ' . $category->name;
    } else {
        return $category->name;
    }
}

