<?php

declare(strict_types=1);

namespace App\Orchid\Screens\User;

use App\Orchid\Layouts\Role\RolePermissionLayout;
use App\Orchid\Layouts\User\UserEditLayout;
use App\Orchid\Layouts\User\UserPasswordLayout;
use App\Orchid\Layouts\User\UserRoleLayout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Orchid\Access\UserSwitch;
use Orchid\Platform\Models\User;
use Orchid\Screen\Action;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Screen;
use Orchid\Support\Color;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class UserEditScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Редактировать пользователя';

    /**
     * Display header description.
     *
     * @var string
     */
    public $description = '';

    /**
     * @var string
     */
    public $permission = 'platform.systems.users';

    /**
     * @var User
     */
    private $user;

    /**
     * Query data.
     *
     * @param User $user
     *
     * @return array
     */
    public function query(User $user): array
    {
        $this->user = $user;

        if (! $user->exists) {
            $this->name = 'Создать пользователя';
        }

        $user->load(['roles']);

        return [
            'user'       => $user,
            'permission' => $user->getStatusPermission(),
        ];
    }

    /**
     * Button commands.
     *
     * @return Action[]
     */
    public function commandBar(): array
    {
        return [
            Button::make("Выдача себя за пользователя")
                ->icon('login')
                ->confirm('Вы можете вернуться в исходное состояние, выйдя из системы')
                ->method('loginAs')
                ->canSee($this->user->exists && \request()->user()->id !== $this->user->id),

            Button::make("Удалить")
                ->icon('trash')
                ->confirm("Вы уверены что хотите удалить этого пользователя?")
                ->method('remove')
                ->canSee($this->user->exists),

            Button::make("Сохранить")
                ->icon('check')
                ->method('save'),
        ];
    }

    /**
     * @return \Orchid\Screen\Layout[]
     */
    public function layout(): array
    {
        return [

            Layout::block(UserEditLayout::class)
                ->title("Информация профиля ")
                ->commands(
                    Button::make("Сохранить")
                        ->type(Color::DEFAULT())
                        ->icon('check')
                        ->canSee($this->user->exists)
                        ->method('save')
                ),

            Layout::block(UserPasswordLayout::class)
                ->title("Пароль")
                ->description("Убедитесь, что в вашей учетной записи используется длинный случайный пароль, чтобы оставаться в безопасности.")
                ->commands(
                    Button::make(__('Save'))
                        ->type(Color::DEFAULT())
                        ->icon('check')
                        ->canSee($this->user->exists)
                        ->method('save')
                ),

            Layout::block(UserRoleLayout::class)
                ->title("Роль")
                ->description("Роль определяет набор задач, которые разрешено выполнять пользователю, которому назначена роль.")
                ->commands(
                    Button::make(__('Save'))
                        ->type(Color::DEFAULT())
                        ->icon('check')
                        ->canSee($this->user->exists)
                        ->method('save')
                ),

            Layout::block(RolePermissionLayout::class)
                ->title("Права")
                ->description("Разрешить пользователю выполнять некоторые действия, не предусмотренные его ролями. ")
                ->commands(
                    Button::make(__('Save'))
                        ->type(Color::DEFAULT())
                        ->icon('check')
                        ->canSee($this->user->exists)
                        ->method('save')
                ),

        ];
    }

    /**
     * @param User    $user
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function save(User $user, Request $request)
    {
        $request->validate([
            'user.email' => [
                'required',
                Rule::unique(User::class, 'email')->ignore($user),
            ],
        ]);

        $permissions = collect($request->get('permissions'))
            ->map(function ($value, $key) {
                return [base64_decode($key) => $value];
            })
            ->collapse()
            ->toArray();



        $userData = $request->get('user');


        if ($user->exists && (string)$userData['password'] === '') {
            // When updating existing user null password means "do not change current password"
            unset($userData['password']);
        } else {
            $userData['password'] = Hash::make($userData['password']);
        }



       foreach ($userData as $key=>$data){
           if ($key != 'roles')
               $user->$key = $data;
       }
        $user->save();
      /*
        $user->fill($userData)
            ->fill([
                'permissions' => $permissions,
            ]);
        $user->save();
*/

        $user->replaceRoles($request->input('user.roles'));

        Toast::info(__('User was saved.'));

        return redirect()->route('platform.systems.users');
    }

    /**
     * @param User $user
     *
     * @throws \Exception
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function remove(User $user)
    {
        $user->delete();

        Toast::info(__('User was removed'));

        return redirect()->route('platform.systems.users');
    }

    /**
     * @param User $user
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function loginAs(User $user)
    {
        UserSwitch::loginAs($user);

        Toast::info(__('You are now impersonating this user'));

        return redirect()->route(config('platform.index'));
    }
}
