<?php

namespace App\Orchid\Screens;

use Orchid\Screen\Screen;
use App\Models\Currency;

use Orchid\Screen\TD;
use Orchid\Support\Facades\Layout;

use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\Link;
use Orchid\Support\Facades\Alert;

class Currencies extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Валюты';

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
            'currency' => Currency::filters()->defaultSort('is_active', 'DESC')->paginate()
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
        return [Layout::table('currency', [
            TD::make('id')
                ->sort(),

            TD::make('name', 'Название'),
            TD::make('code', 'Код'),
            TD::make('price', 'Курс'),
            TD::make('price_back', 'Обратный курс'),
            TD::make('is_active', 'Активная')->sort(),

            TD::make('Действия')
                ->align(TD::ALIGN_CENTER)
                ->width('100px')
                ->render(function (Currency $curr) {
                    if ($curr->is_active == 0){
                        return Button::make("Показать")
                            ->method('unhide')
                            ->confirm('Вы уверены что хотите показать эту валюту?')
                            ->parameters([
                                'id' => $curr->id,
                            ])
                            ->icon('check');
                    }
                    elseif ($curr->is_active == 1){
                        return Button::make("Скрыть")
                            ->method('hide')
                            ->confirm('Вы уверены что хотите скрыть эту валюту?')
                            ->parameters([
                                'id' => $curr->id,
                            ])
                            ->icon('check');
                    }

                }),

        ]),
        ];
    }

    public function hide(Currency $curr)
    {
        $curr->is_active = 0;
        $curr->save();

        Alert::info($curr->name . ' Скрыт');

        return redirect()->route('platform.currencies');
    }

    public function unhide(Currency $curr)
    {
        $curr->is_active = 1;
        $curr->save();

        Alert::info($curr->name . ' Отображается');

        return redirect()->route('platform.currencies');
    }
}
