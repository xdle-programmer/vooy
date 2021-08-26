<?php

namespace App\Orchid\Screens;

use Orchid\Screen\Screen;
use App\Models\TenderSubstatus;

use Orchid\Screen\TD;
use Orchid\Support\Facades\Layout;

use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\Link;
use Orchid\Support\Facades\Alert;

class SubstatusScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Подстатусы тендера';

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
        return [
            'substatuses' => TenderSubstatus::filters()->defaultSort('id')->paginate()
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
            ->route('platform.substatus.edit'),
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
  Layout::table('substatuses',[
    TD::make('id')
    ->sort(),

    TD::make('name', "Название")
    ->sort(),

    TD::make(__('Actions'))
        ->align(TD::ALIGN_CENTER)
        ->width('100px')
        ->render(function (TenderSubstatus $substatus) {
            return DropDown::make()
                ->icon('options-vertical')
                ->list([

                    Link::make("Редактировать")
                        ->route('platform.substatus.edit', $substatus->id)
                        ->icon('pencil'),

                        Button::make("Удалить")
                            ->method('remove')
                            ->confirm("Вы уверены что хотите удалить этот подстатус?")
                            ->parameters([
                                'id' => $substatus->id,
                            ])
                            ->icon('trash'),
                ]);
        }),
  ]),
 ];
}

public function remove(TenderSubstatus $substatus)
{
    $substatus->delete();
    Alert::info('Подстатус удалён');
    return redirect()->route('platform.substatus');
}
}
