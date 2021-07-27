<?php

namespace App\Http\Controllers;

use App\Mail\ModeratorToTenderProviderMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function sendMessage(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
            'email' => 'email',
        ]);

        $details = [
            'title' => $request->title,
            'body' => $request->body
        ];

        if ($request->email == null){
            $moderators = User::whereHas('roles', function ($q) {
                $q->where('slug', 'moderator');
            })->get();
            foreach ($moderators as $moderator){
                Mail::to($moderator->email)->send(new ModeratorToTenderProviderMail($details));
            }
        }
        else{
            Mail::to($request->email)->send(new ModeratorToTenderProviderMail($details));
        }
        return response()->json('Письмо отправлено', 200);
    }
}
