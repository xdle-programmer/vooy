<?php

namespace App\Orchid\Screens;

use Orchid\Screen\Screen;
use App\Models\TenderSubstatus;
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

class SubstatusEditScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Добавить статус реализации';

    /**
     * Display header description.
     *
     * @var string|null
     */
    public $description = '';
    public $data = false;

    /**
     * Query data.
     *
     * @return array
     */
    public function query(TenderSubstatus $substatus): array
    {
        $this->exists = $substatus->exists;
        $this->data = $substatus;

        if($this->exists){
          $this->name = 'Редактировать статус';
        }

        return [
          'substatus' => $substatus
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
            Input::make('substatus.name')
              ->title('Название')
              ->placeholder($this->data->name),
          ])

        ];
    }

    public function createOrUpdate(TenderSubstatus $substatus, Request $request)
    {
      $reqArr = [];

      foreach ($request->get('substatus') as $key => $value) {
        $reqArr[$key] = $value;
      }

      $substatus->fill($reqArr)->save();

      return redirect()->route('platform.substatus');
    }

    public function remove(TenderSubstatus $substatus)
    {
        $substatus->delete();
        Alert::info('Статус удалён');
        return redirect()->route('platform.substatus');
    }
}
