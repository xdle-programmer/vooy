<?php

namespace App\Orchid\Screens;

use Orchid\Screen\Screen;
use Illuminate\Http\Request;
use App\Models\TenderSertificat;

use Orchid\Screen\TD;
use Orchid\Support\Facades\Layout;

use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\Link;
use Orchid\Support\Facades\Alert;

class TenderSertificatScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Сертификаты';

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
           'sertificats' => TenderSertificat::filters()->defaultSort('id')->paginate()
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
               ->route('platform.sertificat.edit'),
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
           Layout::table('sertificats',[
             TD::make('id')
             ->sort(),

             TD::make('name', "Название")
             ->sort(),

             TD::make(__('Actions'))
                 ->align(TD::ALIGN_CENTER)
                 ->width('100px')
                 ->render(function (TenderSertificat $sertificat) {
                     return DropDown::make()
                         ->icon('options-vertical')
                         ->list([

                             Link::make("Редактировать")
                                 ->route('platform.sertificat.edit', $sertificat->id)
                                 ->icon('pencil'),

                                 Button::make("Удалить")
                                     ->method('remove')
                                     ->confirm("Вы уверены что хотите удалить этот сертификат?")
                                     ->parameters([
                                         'id' => $sertificat->id,
                                     ])
                                     ->icon('trash'),
                         ]);
                 }),
           ]),
         ];
     }

     public function remove(TenderSertificat $sertificats)
     {
         $sertificats->delete();
         Alert::info('Сертификат удалён');
         return redirect()->route('platform.sertificat');
     }
 }
