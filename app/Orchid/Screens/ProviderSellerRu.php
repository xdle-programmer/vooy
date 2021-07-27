<?php

namespace App\Orchid\Screens;

use Orchid\Screen\Screen;
use App\Models\Subrole;
use App\Models\User;

use Orchid\Screen\TD;
use Orchid\Support\Facades\Layout;

use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\Link;
use Orchid\Support\Facades\Alert;

class ProviderSellerRu extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Продавецы в России';

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
        $users = User::whereHas('subroles', function ($q) {
            $q->where('subroles.id', 4);
        })->with("subroles", "provider_infos")->filters()->paginate();

        return [
            'users' => $users
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
            Layout::table('users', [
                TD::make('id')
                    ->sort(),

                TD::make('name', 'Имя'),
                TD::make('email', 'Почта'),
                TD::make('phone', 'Телефон'),

                TD::make('company', 'Компания')
                    ->sort()
                    ->render(function (User $users) {
                        if ($users->provider_infos->first())
                            return $users->provider_infos->first()->company;
                        else
                            return ' ';
                    }),

                TD::make('company', 'Ру юр.лицо')
                    ->sort()
                    ->render(function (User $users) {
                        if ($users->provider_infos->first())
                        {
                            if($users->provider_infos->first()->can_RLE == 1)
                                return 'да';
                            else
                                return 'нет';
                        }

                        else
                            return 'нет';
                    }),

                TD::make('created_at', 'Дата регистрации')
                    ->sort()
                    ->render(function (User $users) {
                        return $users->created_at->format('Y-m-d');
                    }),


            ]),
        ];
    }
}
