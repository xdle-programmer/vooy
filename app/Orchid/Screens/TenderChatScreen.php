<?php

namespace App\Orchid\Screens;

use Orchid\Screen\Actions\Link;
use Orchid\Support\Facades\Layout;
use Orchid\Screen\Screen;

use App\Models\Chat;

class TenderChatScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Чат';

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
    public function query(Chat $chat): array
    {
        $chat = Chat::with('tender', 'review', 'users', 'messages', 'messages.user')->where('id',$chat->id)->first();
        $user = auth()->user();
        return [
            'chat' => $chat,
            'user' => $user
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
            Layout::wrapper('orchid/tender_chat', [
            ]),
        ];
    }
}
