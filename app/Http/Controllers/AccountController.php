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
        }
        else {
            $user = auth()->user();
            if ($user == null) {
                return  redirect('/');
            }
        }
        $replyedTenders = Tender::whereHas('reviews', function ($q) use($user) {
            $q->where('provider_id', $user->id);
        })->get();
        $inProgressTenders = Tender::whereHas('reviews', function ($q) use($user)  {
            $q->where('provider_id', $user->id);
        })->where('provider_id', $user->id)->get();

        return view('account-manufacturer', ['user' => $user, 'replyedTenders' => $replyedTenders, 'inProgressTenders' => $inProgressTenders]);

    }
}
