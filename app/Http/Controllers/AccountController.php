<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;

use App\Models\User;
use App\Models\Role;
use App\Models\Tender;

class AccountController extends Controller
{
    public function showAccount(int $id = null)
    {
        $user = null;

        if ($id != null) {
            $user = User::find($id);
        } else {
            $user = auth()->user();
            if ($user == null) {
                return redirect('/');
            }
        }
        $replyedTenders = Tender::whereHas('reviews', function ($q) use ($user) {
            $q->where('provider_id', $user->id);
        })->get();
        $inProgressTenders = Tender::whereHas('reviews', function ($q) use ($user) {
            $q->where('provider_id', $user->id);
        })->where('provider_id', $user->id)->get();

        return view('account-banner', ['user' => $user, 'replyedTenders' => $replyedTenders, 'inProgressTenders' => $inProgressTenders]);

    }

    public function showAccountSettings(int $id = null)
    {
        $user = null;
        if ($id != null) {
            $user = User::find($id);
        } else {
            $user = auth()->user();
            if ($user == null) {
                return redirect('/');
            }
        }

        if ($user != null) {
            if ($user->roles() != null) {
                if ($user->roles()->where('slug', 'buyer')->first() != null) {
                    return view('account-buyer-settings', ['user' => $user]);

                }
                if ($user->roles()->where('slug', 'provider')->first() != null) {
                    return view('account-manufacturer-settings', ['user' => $user]);

                }
            }
        }

    }

    public function saveAccountSettings(Request $request)
    {
        $user = auth()->user();
        if ($user == null) {
            return redirect()->back()->withErrors(['email' => trans('User does not exist')]);
        }
        $data = $request->all();

        if (isset($data['password_current']) && isset($data['password_new']) && isset($data['password_new2'])) {

            if (\Hash::check($data['password_current'], $user->password) == true && $data['password_new'] != null && $data['password_new'] == $data['password_new2']) {
                $user->forceFill([
                    'password' => \Hash::make($data['password_new']),
                    'remember_token' => \Str::random(60),
                ])->save();
            }
        }

        if (isset($data['user'])) {
            foreach ($data['user'] as $key => $userData) {
                $user->$key = $userData;
            }
            $user->save();
        }
        if (isset($data['company']) && $user->provider_infos->first() != null) {
            $user_info = $user->provider_infos->first();
            $user_info->company = $data['company'];
            $user_info->save();
        }

        return redirect()->back();
    }

    public function uploadPhoto(Request $request)
    {

        $user = auth()->user();
        if ($user == null) {
            return response()->json('cant find user', 201);
        }

        if ($request->file('image') != null) {
            $path = User::getStoragePath() . $user->id . '/';

            $file = $request->file('image');
            $ext = $file->guessExtension();
            $fileName = time() . '.' . $ext;
            $file->move($path, $fileName);

            $user->photo = $fileName;
            $user->save();
        }

        return response()->json('OK', 200);
    }
}
