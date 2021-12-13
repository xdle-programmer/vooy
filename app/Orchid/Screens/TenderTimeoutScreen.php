<?php

namespace App\Orchid\Screens;

use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Input;
use Illuminate\Http\Request;
use Orchid\Support\Facades\Alert;

use App\Models\TenderTimeout;

class TenderTimeoutScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Время истечения тендера';

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
        $timer = TenderTimeout::first();

        if ($timer == null) {
            $timer = new TenderTimeout();
            $timer->hours = 50;
            $timer->save();
        }
        $this->data = $timer;

        return [
            'timer'=>$timer
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

            Layout::rows([
                Input::make('timer.hours')
                    ->title('Времени в часах')
                    ->placeholder($this->data->hours),

                Button::make("Изменить")
                    ->method('createOrUpdate')
                    ->parameters([
                        'id' => $this->data->id,
                    ])
                    ->icon('pencil'),
            ]),

        ];
    }

    public function createOrUpdate(Request $request)
    {
        $timer = TenderTimeout::firstOrCreate();
        $timer->hours = $request->timer['hours'];
        $timer->save();

        Alert::info('Значение сохранено');
        return redirect()->route('platform.tender.timer');
    }
}
