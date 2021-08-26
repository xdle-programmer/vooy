<?php

namespace App\Orchid\Screens;

use Orchid\Screen\Screen;
use App\Models\Characteristic;
use App\Models\CharcteristicSelect;
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


class ProductCharacteristicValuesScreen extends Screen
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


    public function query(Characteristic $characteristic): array
    {
        $this->exists = $characteristic->exists;
        $this->data = $characteristic;
        $selects = CharcteristicSelect::where('charcteristic_id', $characteristic->id)->get();

        return [
            'characteristic' => $characteristic,
            'selects' => $selects,
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
                Input::make('category.name')
                    ->title('Название'),

                Input::make('category.charcteristic_id')
                    ->value($this->data->id)
                    ->type('hidden'),

                Button::make("Добавить")
                    ->method('addCharacteristicSelect')
                    ->icon('pencil'),
            ]),
            Layout::table('selects', [
                TD::make('id'),
                TD::make('name', 'Название'),

                TD::make(__('Actions'))
                    ->align(TD::ALIGN_CENTER)
                    ->width('100px')
                    ->render(function (CharcteristicSelect $select) {
                            return Button::make("Удалить")
                                        ->method('remove')
                                        ->confirm("Вы уверены что хотите удалить это значение?")
                                        ->parameters([
                                            'id' => $select->id,
                                        ])
                                        ->icon('trash');

                    }),

            ])

        ];
    }

    public function addCharacteristicSelect(Characteristic $characteristic, Request $request)
    {
        $reqArr = [];
        foreach ($request->category as $key => $value) {
            $reqArr[$key] = $value;
        }
        $charSelect = new CharcteristicSelect();
        $charSelect->fill($reqArr)->save();


        return redirect()->route('platform.characteristic.selects', $characteristic->id);
    }

    public function remove(CharcteristicSelect $charSelect)
    {
        $charSelect->delete();
        Alert::info('Значение удалено');
        return redirect()->route('platform.characteristic.selects', $charSelect->charcteristic_id);
    }
}
