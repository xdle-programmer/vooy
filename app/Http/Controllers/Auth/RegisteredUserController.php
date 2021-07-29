<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

use App\Models\Role;
use App\Models\User;
use App\Models\ProviderInfo;
use App\Models\ProviderService;

use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required',
            'phone' => 'required',
            'password' => 'required',
        ]);


        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'surname' => " ",
            'midname' => " ",
            'city' => " ",
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
        ]);

        $role = Role::where('slug', 'buyer')->first();
        if ($role != null)
            $user->addRole($role);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }

    public function storeProvider(Request $request)
    {
    //  dd($request->all());
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required',
            'password' => 'required',
            'phone' => 'required',
            'company' => 'required',
        ]);

        //dd($request->all());

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'surname' => " ",
            'midname' => " ",
            'city' => " ",
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
        ]);
        $subrole = 0;
        $role = Role::where('slug', 'provider')->first();
        if ($role != null)
            $user->addRole($role);

        $providerInfo = new ProviderInfo;
        $providerInfo->user_id = $user->id;
        $providerInfo->company = $request->company;

        if ($request->can_RLE)
            $providerInfo->can_RLE = 1;
        else
            $providerInfo->can_RLE = 0;

        $providerInfo->save();

        if ($request->service) {
          foreach ($request->service as $key => $s) {
            $ps = ProviderService::find($key);
              if ($ps !== null){
                  $providerInfo->services()->attach($ps->id);

                  if ($ps->id == 1) $subrole = 1;
                  else if($ps->id == 2) $subrole = 2;
                  else if ($ps->id == 3) {
                      $user->subroles()->attach(4);
                  }

              }

          }
        }

        if ($subrole != 0)
            $user->subroles()->attach($subrole);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
