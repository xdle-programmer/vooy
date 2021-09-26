<?php

namespace App\Orchid\Screens;

use Orchid\Screen\Screen;
use App\Models\Category;
use App\Models\Characteristic;
use App\Models\ProductCategoryCharacteristic;
use Orchid\Screen\TD;
use Orchid\Support\Facades\Layout;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\Link;
use Orchid\Support\Facades\Alert;
use Illuminate\Http\Request;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Picture;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Fields\Quill;
use Orchid\Screen\Fields\Relation;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Fields\Upload;


class ProductCategoryCharacteristicScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = '';

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
    public $data = false;

    public function query(Category $category): array
    {
        $this->exists = $category->exists;
        $this->data = $category;
        $catCharacteristics = Characteristic::whereHas('category', function ($q) use ($category) {
            return $q->where('category_id', $category->id);
        })->get();

        if ($this->exists) {
            $this->name = 'Редактировать характеристики категории';
        }

        return [
            'category' => $category,
            'catCharacteristics' => $catCharacteristics,
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
            Layout::rows([
                Select::make('category.id')
                    ->title('Название')
                    ->fromModel(Characteristic::class, 'name'),

                Button::make("Добавить")
                    ->method('addCharacteristic')
                    ->icon('pencil'),
            ]),
            Layout::table('catCharacteristics', [
                TD::make('id'),
                TD::make('name', 'Название'),
                TD::make(__('Actions'))
                    ->align(TD::ALIGN_CENTER)
                    ->width('100px')
                    ->render(function (Characteristic $characteristic) {
                        return Button::make("Удалить")
                            ->method('remove')
                            ->confirm("Вы уверены что хотите удалить это значение?")
                            ->parameters([
                                'id' => $this->data->id,
                                'characteristic_id' => $characteristic->id,
                            ])
                            ->icon('trash');

                    }),
            ])

        ];
    }

    public function addCharacteristic(Category $category, Request $request)
    {

       if ($request->category['id'] != null)
           $category->characteristics()->attach($request->category['id']);

        return redirect()->route('platform.category.characteristics', $category->id);
    }

    public function remove(Category $category, Request $request)
    {
        $category->characteristics()->detach($request->characteristic_id);

        Alert::info('Значение удалено');
        return redirect()->route('platform.category.characteristics', $category->id);
    }
}
