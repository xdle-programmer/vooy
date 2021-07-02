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

class TenderProductScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Товары тендера';

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
    public function query(Tender $tender): array
    {
        return [
          'tender' => TenderProduct::with('attachments')->where('tender_id', $tender->id)->filters()->defaultSort('id')->paginate(),
          'tender_id' => $tender->id,
          'storage' => asset('storage/tenderProducts/'),
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
          Button::make('Удалить')
              ->icon('trash')
              ->confirm("Вы уверены что хотите удалить этот тендер?")
              ->method('remove'),
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
        Layout::table('tender',[
          TD::make('id')
          ->sort(),

          TD::make('title', "Заголовок")
          ->sort(),

          TD::make('image', "Фото")
            ->render(function (TenderProduct $tender) {
              $storage = asset('storage/tenderProducts');
              $outputHtml = "";
              if (count($tender->attachments) > 0) {
                $outputHtml .= "<div style='display: grid;
                grid-template-columns: auto auto auto;
                grid-template-rows: auto auto auto;
                gap: 5px 5px;' class='photo-container'>";
                $tenderCount = count($tender->attachments);
                foreach ($tender->attachments as $key => $value) {

                  $outputHtml .= "<img src='{$storage}/{$tender->attachments[$key]->path}'
                    alt='sample' style='width: auto; max-height: 200px;'
                    class='d-block img-fluid'>";
                }
                $outputHtml .= "</div>";
              }

              return $outputHtml;
            }),

          TD::make('description', "Комментарий")
          ->width('40%')
          ->sort(),


          TD::make('sample', "Нужен образец")
            ->render(function (TenderProduct $tender) {
              if ($tender->sample == 1)
                return "Да";
              else
                return "Нет";

            }),

            TD::make('count', "Количество")
            ->sort(),


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
