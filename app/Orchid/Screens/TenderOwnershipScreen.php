<?php

namespace App\Orchid\Screens;

use Orchid\Screen\Screen;
use Illuminate\Http\Request;
use App\Models\TenderOwnership;

use Orchid\Screen\TD;
use Orchid\Support\Facades\Layout;

use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\Link;
use Orchid\Support\Facades\Alert;

class TenderOwnershipScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Формы собственности';

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
          'ownerships' => TenderOwnership::filters()->defaultSort('id')->paginate()
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
            Link::make('Создать')
              ->icon('pencil')
              ->route('platform.ownership.edit'),
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
          Layout::table('ownerships',[
            TD::make('id')
            ->sort(),

            TD::make('name', "Название")
            ->sort(),

            TD::make(__('Actions'))
                ->align(TD::ALIGN_CENTER)
                ->width('100px')
                ->render(function (TenderOwnership $ownership) {
                    return DropDown::make()
                        ->icon('options-vertical')
                        ->list([

                            Link::make("Редактировать")
                                ->route('platform.ownership.edit', $ownership->id)
                                ->icon('pencil'),

                                Button::make("Удалить")
                                    ->method('remove')
                                    ->confirm("Вы уверены что хотите удалить эту форму собственности?")
                                    ->parameters([
                                        'id' => $ownership->id,
                                    ])
                                    ->icon('trash'),
                        ]);
                }),
          ]),
        ];
    }

    public function remove(TenderOwnership $ownerships)
    {
        $ownerships->delete();
        Alert::info('Форма собственности удалена');
        return redirect()->route('platform.ownership');
    }
}
