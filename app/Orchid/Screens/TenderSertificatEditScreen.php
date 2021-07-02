<?php

namespace App\Orchid\Screens;

use Orchid\Screen\Screen;
use App\Models\TenderSertificat;
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

class TenderSertificatEditScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Добавить сертификат';

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
     public function query(TenderSertificat $sertificat): array
     {

       $this->exists = $sertificat->exists;
       $this->data = $sertificat;

       if($this->exists){
         $this->name = 'Редактировать Сертификат';
       }

       return [
         'sertificat' => $sertificat
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
           Input::make('sertificat.name')
             ->title('Название')
             ->placeholder($this->data->name),
         ])

       ];
     }

     public function createOrUpdate(TenderSertificat $sertificat, Request $request)
     {
       $reqArr = [];

       foreach ($request->get('sertificat') as $key => $value) {
         $reqArr[$key] = $value;
       }

       $sertificat->fill($reqArr)->save();

       return redirect()->route('platform.sertificat');
     }

     public function remove(TenderSertificat $sertificat)
     {
         $sertificat->delete();
         Alert::info('Сертификат удалён');
         return redirect()->route('platform.sertificat');
     }
 }
