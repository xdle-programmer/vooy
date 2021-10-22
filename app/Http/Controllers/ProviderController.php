<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\TenderSubstatus;
use App\Models\UserReview;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

use App\Models\User;

class ProviderController extends Controller
{
    public function showProvidersList(Request $request)
    {
        $providers = User::has('provider_infos')->get();

        return view('manufacturer-list',['providers' => $providers]);
    }

    public function showProvider(Request $request, int $id)
    {
        $provider = User::has('provider_infos')->where('id', $id)->first();

        return view('manufacturer',['provider' => $provider]);
    }
}
