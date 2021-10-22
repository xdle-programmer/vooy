<?php

declare(strict_types=1);

namespace App\Orchid\Layouts\User;

use Orchid\Screen\Field;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Layouts\Rows;

class UserEditLayout extends Rows
{
    /**
     * Views.
     *
     * @return Field[]
     */
    public function fields(): array
    {
        return [
            Input::make('user.name')
                ->type('text')
                ->max(255)
                ->required()
                ->title("Имя")
                ->placeholder("Имя"),

            Input::make('user.midname')
                ->type('text')
                ->max(255)
                ->title("Отчество")
                ->placeholder("Отчество"),

            Input::make('user.surname')
                ->type('text')
                ->max(255)
                ->title("Фамилия")
                ->placeholder("Фамилия"),

            Input::make('user.phone')
                ->type('text')
                ->required()
                ->title("Телефон")
                ->placeholder("Телефон"),

            Input::make('user.email')
                ->type('email')
                ->required()
                ->title("Почта")
                ->placeholder("Почта"),

            Input::make('user.city')
                ->type('text')
                ->title("Город")
                ->placeholder("Город"),
        ];
    }
}
