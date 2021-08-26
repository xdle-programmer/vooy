<?php

namespace App\Orchid\Screens;

use Orchid\Screen\Screen;
use App\Models\Characteristic;
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

class ProductCharacteristicEditScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Добавить характеристику';

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

    public function query(Characteristic $characteristic): array
    {
        $this->exists = $characteristic->exists;
        $this->data = $characteristic;
        if ($this->exists) {
            $this->name = 'Редактировать характеристику';
        }

        return [
            'characteristic' => $characteristic
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
                Input::make('characteristic.name')
                    ->title('Название')
                    ->placeholder($this->data->name ?? 'Название'),
                Select::make('characteristic.type')
                    ->options([
                        '1' => 'Текстовое значение',
                        '2' => 'Числовое значение',
                        '3' => 'Селект значение',
                    ])
                    ->title('Тип')
                    ->placeholder($this->data->type)
            ])
        ];
    }

    public function createOrUpdate(Characteristic $characteristic, Request $request)
    {
        $reqArr = [];

        foreach ($request->characteristic as $key => $value) {
            $reqArr[$key] = $value;
        }

        $characteristic->fill($reqArr)->save();

        return redirect()->route('platform.characteristics');
    }

    public function remove(Characteristic $characteristic)
    {
        $characteristic->delete();
        Alert::info('Характеристика удалена');
        return redirect()->route('platform.characteristics');
    }
}
