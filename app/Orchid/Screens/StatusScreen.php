<?php

namespace App\Orchid\Screens;

use Orchid\Screen\Screen;
use App\Models\TenderStatus;

use Orchid\Screen\TD;
use Orchid\Support\Facades\Layout;

class StatusScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Статусы тендера';

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
          'statuses' => TenderStatus::filters()->defaultSort('id')->paginate()
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
         Layout::table('statuses',[
           TD::make('id')
           ->sort(),

           TD::make('name', "Название")
           ->sort(),
         ]),
        ];
    }
}
