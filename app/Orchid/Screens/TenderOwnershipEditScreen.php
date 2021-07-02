<?php

namespace App\Orchid\Screens;

use Orchid\Screen\Screen;
use App\Models\TenderOwnership;
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

class TenderOwnershipEditScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Добавить форму собственности';

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
    public function query(TenderOwnership $ownership): array
    {

      $this->exists = $ownership->exists;
      $this->data = $ownership;

      if($this->exists){
        $this->name = 'Редактировать форму собственности';
      }

      return [
        'ownership' => $ownership
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
          Input::make('ownership.name')
            ->title('Название')
            ->placeholder($this->data->name),
        ])

      ];
    }

    public function createOrUpdate(TenderOwnership $ownership, Request $request)
    {
      $reqArr = [];

      foreach ($request->get('ownership') as $key => $value) {
        $reqArr[$key] = $value;
      }

      $ownership->fill($reqArr)->save();

      return redirect()->route('platform.ownership');
    }

    public function remove(TenderOwnership $ownership)
    {
        $ownership->delete();
        Alert::info('Форма собственности удалена');
        return redirect()->route('platform.ownership');
    }
}
