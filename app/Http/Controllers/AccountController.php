<?php

namespace App\Http\Controllers;


use App\Models\FactoryAttachment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;

use App\Models\User;
use App\Models\Role;
use App\Models\Tender;
use App\Models\Factory;

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

    public function showAccountAddFactory()
    {
        $user = auth()->user();
        if ($user == null) {
            return redirect('/');
        }

        return view('account-manufacturer-factory', ['user' => $user]);
    }

    public function showAccountFactory()
    {
        $user = auth()->user();
        if ($user == null) {
            return redirect('/');
        }

        $factories = Factory::with('attachments')->where('provider_id', $user->id)->get();

        return view('account-manufacturer-factory-list', ['user' => $user, 'factories' => $factories]);
    }

    public function saveFactory(Request $request)
    {
        //dd($request->file('factory_logo'));
        $user = auth()->user();
        if ($user == null) {
            return response()->json('cant find user', 201);
        }

        $data = $request->all();
        $factory_db = new Factory();

        if (isset($data['factory'])) {
            foreach ($data['factory'] as $key=>$factory){
                $factory_db->$key = $factory;
            }

            $factory_db->provider_id = $user->id;
            $factory_db->save();

            if (isset($data['factory_logo'])) {

                $path = Factory::getStoragePath() . $factory_db->id . '/';

                $file = $data['factory_logo'];
                $ext = $file->guessExtension();
                $fileName = time() . '.' . $ext;
                $file->move($path, $fileName);

                $factory_db->logo = $fileName;
                $factory_db->save();

            }

            if (isset($data['factory_attachments'])) {
                foreach ($data['factory_attachments'] as $key=>$factory_attachment){

                    $path = FactoryAttachment::getStoragePath() . $factory_db->id . '/';

                    $file = $factory_attachment;
                    $ext = $file->guessExtension();
                    $fileName = $key . time() . '.' . $ext;
                    $file->move($path, $fileName);

                    $factory_attachment_db = new FactoryAttachment();
                    $factory_attachment_db->type = $ext;
                    $factory_attachment_db->name = $fileName;
                    $factory_attachment_db->path = $factory_db->id . '/' . $fileName;
                    $factory_attachment_db->factory_id = $factory_db->id;
                    $factory_attachment_db->save();

                }

            }

        }
        return redirect()->back();
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
