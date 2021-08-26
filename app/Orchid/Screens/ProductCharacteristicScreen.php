<?php

namespace App\Orchid\Screens;

use Orchid\Screen\Screen;
use App\Models\Characteristic;
use Orchid\Screen\TD;
use Orchid\Support\Facades\Layout;

use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\Link;
use Orchid\Support\Facades\Alert;


class ProductCharacteristicScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'ProductCharacteristicScreen';

    /**
     * Display header description.
     *
     * @var string|null
     */
    public $description = 'ProductCharacteristicScreen';

    /**
     * Query data.
     *
     * @return array
     */
    public function query(): array
    {
        $characteristics = Characteristic::all();
        return [
            'characteristics' => $characteristics
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
                ->route('platform.characteristic.edit'),
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
            Layout::table('characteristics', [
                TD::make('id'),
                TD::make('name', 'Название'),
                TD::make('type', 'Тип'),

                TD::make(__('Actions'))
                    ->align(TD::ALIGN_CENTER)
                    ->width('100px')
                    ->render(function (Characteristic $characteristic) {

                        if ($characteristic->type == 3) {
                            return DropDown::make()
                                ->icon('options-vertical')
                                ->list([

                                    Link::make("Редактировать")
                                        ->route('platform.characteristic.edit', $characteristic->id)
                                        ->icon('pencil'),

                                    Link::make("Значения")
                                        ->route('platform.characteristic.selects', $characteristic->id)
                                        ->icon('pencil'),

                                    Button::make("Удалить")
                                        ->method('remove')
                                        ->confirm("Вы уверены что хотите удалить эту характеристику?")
                                        ->parameters([
                                            'id' => $characteristic->id,
                                        ])
                                        ->icon('trash'),
                                ]);
                        }
                        else {
                            return DropDown::make()
                                ->icon('options-vertical')
                                ->list([

                                    Link::make("Редактировать")
                                        ->route('platform.characteristic.edit', $characteristic->id)
                                        ->icon('pencil'),

                                    Button::make("Удалить")
                                        ->method('remove')
                                        ->confirm("Вы уверены что хотите удалить эту характеристику?")
                                        ->parameters([
                                            'id' => $characteristic->id,
                                        ])
                                        ->icon('trash'),
                                ]);
                        }


                    }),
                ])
            ];
    }

    public function remove(Characteristic $characteristic)
    {
        $characteristic->delete();
        Alert::info('Характеристика удалена');
        return redirect()->route('platform.characteristics');
    }
}
