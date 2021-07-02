<?php

namespace App\Orchid\Screens;

use Orchid\Screen\Screen;
use App\Models\Tender;
use App\Models\TenderProduct;

use Orchid\Screen\TD;
use Orchid\Support\Facades\Layout;

use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\Link;
use Orchid\Support\Facades\Alert;

class TenderScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Тендеры';

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
        $tender = Tender::with("products", "buyer", "provider", "status", "substatus")->filters()->defaultSort('status_id')->paginate();
        return [
          'tenders' => $tender
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
          Layout::table('tenders',[
            TD::make('id')
            ->sort(),

            TD::make('status_id', 'Статус')
            ->sort()
            ->render(function (Tender $tender) {
                return $tender->status->name;
            }),

            TD::make('substatus.name', 'Статус реализации'),


            TD::make('buyer.name', 'Покупатель'),


            TD::make('provider.name', 'Поставщик'),


            TD::make('Количество товаров')
                    ->render(function (Tender $tender) {

                        return $tender->products->count();
            }),

            TD::make('created_at', 'Дата создания')
                    ->sort()
                    ->render(function (Tender $tender) {

                        return $tender->created_at->format('Y-m-d');
            }),

            TD::make('Действия')
                ->align(TD::ALIGN_CENTER)
                ->width('100px')
                ->render(function (Tender $tender) {
                    if ($tender->status_id == 2) {
                      return DropDown::make()
                          ->icon('options-vertical')
                          ->list([

                                  Link::make("Проверить")
                                    ->route('platform.tender.moderation', $tender->id)
                                    ->icon('magnifier'),

                                  Link::make("Посмотреть")
                                      ->route('platform.tender.products', $tender->id)
                                      ->icon('eye'),

                                  Button::make("Удалить")
                                      ->method('remove')
                                      ->confirm('Вы уверены что хотите удалить этот тендер?')
                                      ->parameters([
                                          'id' => $tender->id,
                                      ])
                                      ->icon('trash'),
                          ]);
                    }
                    else {
                      return DropDown::make()
                          ->icon('options-vertical')
                          ->list([

                              Link::make("Посмотреть")
                                  ->route('platform.tender.products', $tender->id)
                                  ->icon('eye'),

                                  Button::make("Удалить")
                                      ->method('remove')
                                      ->confirm('Вы уверены что хотите удалить этот тендер?')
                                      ->parameters([
                                          'id' => $tender->id,
                                      ])
                                      ->icon('trash'),
                          ]);
                    }
                }),

          ]),
        ];
    }

    public function remove(Tender $tender)
    {
        $tender->delete();
        Alert::info('Тендер удалён');
        return redirect()->route('platform.tender');
    }
}
