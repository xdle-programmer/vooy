<?php

namespace App\Orchid\Screens;

use Orchid\Screen\Screen;

use App\Models\Chat;
use Orchid\Screen\TD;
use Orchid\Support\Facades\Layout;

use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\Link;
use Orchid\Support\Facades\Alert;

class TenderChatListScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Чаты';

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

        $chats = Chat::with('tender', 'tender.products', 'review', 'users', 'messages')->filters()->paginate(20);
        return [
            'chats' => $chats
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
            Layout::table('chats', [
                TD::make('id')->sort(),
                TD::make('tender.id', 'id тендера')->sort(),
                TD::make('tender.id', 'тендер')
                    ->render(function (Chat $chat) {
                    return $chat->tender->products->first()->title;
                }),

                TD::make('review.id', 'Предложение')->sort(),
                TD::make('users', 'Участники')
                    ->sort()
                    ->render(function (Chat $chat) {
                        return $chat->users->count();
                    }),

                TD::make('messages', 'Сообщений')
                    ->sort()
                    ->render(function (Chat $chat) {
                        return $chat->messages->count();
                    }),

                TD::make('messages', 'Необработанно')
                    ->sort()
                    ->render(function (Chat $chat) {
                        return $chat->messages->where('status', '0')->count();
                    }),

                TD::make(__('Actions'))
                    ->align(TD::ALIGN_CENTER)
                    ->width('100px')
                    ->render(function (Chat $сhat) {
                        return Link::make("Войти")
                                    ->turbo(false)
                                    ->route('platform.chat', $сhat->id)
                                    ->icon('eye');
                    }),

            ])
        ];
    }
}
