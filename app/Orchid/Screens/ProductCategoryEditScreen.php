<?php

namespace App\Orchid\Screens;

use Orchid\Screen\Screen;
use App\Models\Category;
use Illuminate\Http\Request;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Picture;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Fields\Quill;
use Orchid\Screen\Fields\Relation;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Fields\Upload;
use Orchid\Support\Facades\Layout;
use Orchid\Screen\Actions\Button;
use Orchid\Support\Facades\Alert;

class ProductCategoryEditScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Добавить категорию';

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
        if($this->exists){
            $this->name = 'Редактировать категорию';
        }

        return [
            'category' => $category
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
            Button::make('Создать')
                ->icon('pencil')
                ->method('createOrUpdate')
                ->canSee(!$this->exists),

            Button::make('Обновить')
                ->icon('note')
                ->method('createOrUpdate')
                ->canSee($this->exists),

            Button::make('Удалить')
                ->icon('trash')
                ->method('remove')
                ->canSee($this->exists),
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
            Layout::rows([
                Input::make('category.name')
                    ->title('Название')
                    ->placeholder($this->data->name ?? 'Название'),
                Select::make('category.parrent_id')
                    ->fromModel(Category::class, 'name')
                    ->placeholder($this->data->parrent_id)
            ])
        ];
    }

    public function createOrUpdate(Category $category, Request $request)
    {
        $reqArr = [];

        foreach ($request->category as $key => $value) {
            $reqArr[$key] = $value;
        }

        $category->fill($reqArr)->save();

        return redirect()->route('platform.categories');
    }

    public function remove(Category $category)
    {
        $category->delete();
        Alert::info('Категория удалена');
        return redirect()->route('platform.categories');
    }
}
