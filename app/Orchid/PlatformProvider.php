<?php

namespace App\Orchid;

use App\Models\Tender;
use Orchid\Platform\Dashboard;
use Orchid\Platform\ItemPermission;
use Orchid\Platform\OrchidServiceProvider;
use Orchid\Screen\Actions\Menu;
use Orchid\Support\Color;

use App\Models\Message;

class PlatformProvider extends OrchidServiceProvider
{
    /**
     * @param Dashboard $dashboard
     */
    public function boot(Dashboard $dashboard): void
    {
        parent::boot($dashboard);

        // ...
    }

    /**
     * @return Menu[]
     */
    public function registerMainMenu(): array
    {
        return [

            Menu::make('Чаты')
                ->icon('folder')
                ->turbo(false)
                ->badge(function () {
                    if (Message::where('status', '0')->count() != 0) {
                        return Message::where('status', '0')->count();
                    }
                    return null;
                })
                ->route('platform.chats'),


            Menu::make('Тендеры')
                ->badge(function () {
                    if (Tender::where('status_id', '2')->count() != 0) {
                        return Tender::where('status_id', '2')->count();
                    }
                    return null;
                })
                ->icon('code')
                ->list([
                    Menu::make('Тендеры')
                        ->icon('folder')
                        ->turbo(false)
                        ->route('platform.tender'),

                    Menu::make('Статусы')
                        ->icon('layers')
                        ->route('platform.status'),

                    Menu::make('Статусы реализации')
                        ->icon('layers')
                        ->route('platform.substatus'),

                    Menu::make("Формы собственности")
                        ->icon('layers')
                        ->route('platform.ownership'),

                    Menu::make("Сертификаты")
                        ->icon('layers')
                        ->route('platform.sertificat'),

                    Menu::make("Таймер")
                        ->icon('layers')
                        ->route('platform.tender.timer'),
                ]),


            Menu::make('Поставщики')
                ->icon('code')
                ->list([
                    Menu::make("Торговые представители")
                        ->icon('layers')
                        ->route('platform.sellerReps'),
                    Menu::make("Дистрибьютеры")
                        ->icon('layers')
                        ->route('platform.distributors'),
                    Menu::make("Коннекторы")
                        ->icon('layers')
                        ->route('platform.connectors'),
                    Menu::make("Продавцы в России")
                        ->icon('layers')
                        ->route('platform.sellerRus'),
                ]),

            Menu::make('Продукты')
                ->icon('code')
                ->list([
                    Menu::make("Продукты")
                        ->icon('layers')
                        ->route('platform.products'),
                    Menu::make("Категории")
                        ->icon('layers')
                        ->route('platform.categories'),
                    Menu::make("Характеристики")
                        ->icon('layers')
                        ->route('platform.characteristics'),
                ]),


            Menu::make("Валюты")
                ->icon('layers')
                ->route('platform.currencies'),


            Menu::make("Пользователи")
                ->icon('user')
                ->route('platform.systems.users')
                ->permission('platform.systems.users')
                ->title("Права доступа"),

            Menu::make("Роли")
                ->icon('lock')
                ->route('platform.systems.roles')
                ->permission('platform.systems.roles'),

            /*
                Menu::make('Example screen')
                    ->icon('monitor')
                    ->route('platform.example')
                    ->title('Navigation')
                    ->badge(function () {
                        return 6;
                    }),

                Menu::make('Dropdown menu')
                    ->icon('code')
                    ->list([
                        Menu::make('Sub element item 1')->icon('bag'),
                        Menu::make('Sub element item 2')->icon('heart'),
                    ]),

                Menu::make('Basic Elements')
                    ->title('Form controls')
                    ->icon('note')
                    ->route('platform.example.fields'),

                Menu::make('Advanced Elements')
                    ->icon('briefcase')
                    ->route('platform.example.advanced'),

                Menu::make('Text Editors')
                    ->icon('list')
                    ->route('platform.example.editors'),

                Menu::make('Overview layouts')
                    ->title('Layouts')
                    ->icon('layers')
                    ->route('platform.example.layouts'),

                Menu::make('Chart tools')
                    ->icon('bar-chart')
                    ->route('platform.example.charts'),

                Menu::make('Cards')
                    ->icon('grid')
                    ->route('platform.example.cards')
                    ->divider(),

                Menu::make('Documentation')
                    ->title('Docs')
                    ->icon('docs')
                    ->url('https://orchid.software/en/docs'),

                Menu::make('Changelog')
                    ->icon('shuffle')
                    ->url('https://github.com/orchidsoftware/platform/blob/master/CHANGELOG.md')
                    ->target('_blank')
                    ->badge(function () {
                        return Dashboard::version();
                    }, Color::DARK()),

         */


        ];
    }

    /**
     * @return Menu[]
     */
    public function registerProfileMenu(): array
    {
        return [
            Menu::make('Profile')
                ->route('platform.profile')
                ->icon('user'),
        ];
    }

    /**
     * @return ItemPermission[]
     */
    public function registerPermissions(): array
    {
        return [
            ItemPermission::group(__('System'))
                ->addPermission('platform.systems.roles', __('Roles'))
                ->addPermission('platform.systems.users', __('Users')),
        ];
    }

    /**
     * @return string[]
     */
    public function registerSearchModels(): array
    {
        return [
            // ...Models
            // \App\Models\User::class
        ];
    }
}


/*


            Menu::make('Example screen')
                ->icon('monitor')
                ->route('platform.example')
                ->title('Navigation')
                ->badge(function () {
                    return 6;
                }),

            Menu::make('Dropdown menu')
                ->icon('code')
                ->list([
                    Menu::make('Sub element item 1')->icon('bag'),
                    Menu::make('Sub element item 2')->icon('heart'),
                ]),

            Menu::make('Basic Elements')
                ->title('Form controls')
                ->icon('note')
                ->route('platform.example.fields'),

            Menu::make('Advanced Elements')
                ->icon('briefcase')
                ->route('platform.example.advanced'),

            Menu::make('Text Editors')
                ->icon('list')
                ->route('platform.example.editors'),

            Menu::make('Overview layouts')
                ->title('Layouts')
                ->icon('layers')
                ->route('platform.example.layouts'),

            Menu::make('Chart tools')
                ->icon('bar-chart')
                ->route('platform.example.charts'),

            Menu::make('Cards')
                ->icon('grid')
                ->route('platform.example.cards')
                ->divider(),

            Menu::make('Documentation')
                ->title('Docs')
                ->icon('docs')
                ->url('https://orchid.software/en/docs'),

            Menu::make('Changelog')
                ->icon('shuffle')
                ->url('https://github.com/orchidsoftware/platform/blob/master/CHANGELOG.md')
                ->target('_blank')
                ->badge(function () {
                    return Dashboard::version();
                }, Color::DARK()),

            Menu::make(__('Users'))
                ->icon('user')
                ->route('platform.systems.users')
                ->permission('platform.systems.users')
                ->title(__('Access rights')),

            Menu::make(__('Roles'))
                ->icon('lock')
                ->route('platform.systems.roles')
                ->permission('platform.systems.roles'),
*/
