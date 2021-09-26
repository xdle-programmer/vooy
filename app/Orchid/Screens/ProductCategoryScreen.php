<?php

namespace App\Orchid\Screens;

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
        $categories = Category::all();
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
                TD::make(__('Actions'))
                    ->align(TD::ALIGN_CENTER)
                    ->width('100px')
                    ->render(function (Category $category) {
                        return DropDown::make()
                            ->icon('options-vertical')
                            ->list([

                                Link::make("Редактировать")
                                    ->route('platform.category.edit', $category->id)
                                    ->icon('pencil'),

                                Link::make("Характеристики")
                                    ->route('platform.category.characteristics', $category->id)
                                    ->icon('pencil'),

                                Button::make("Удалить")
                                    ->method('remove')
                                    ->confirm("Вы уверены что хотите удалить эту категорию?")
                                    ->parameters([
                                        'id' => $category->id,
                                    ])
                                    ->icon('trash'),
                            ]);
                    }),
            ])
        ];
    }

    public function remove(Category $category)
    {
        $category->delete();
        Alert::info('Категория удалена');
        return redirect()->route('platform.categories');
    }
}

function getPath($category){
    if ($category->parrent_id != null) {
        $parentCategory = Category::find($category->parrent_id);
        $curPath = getPath($parentCategory);
        return $curPath . ' > ' . $category->name;
    }
    else{
        return $category->name;
    }
}

