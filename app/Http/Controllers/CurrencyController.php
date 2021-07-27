<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

use App\Models\Currency;

class CurrencyController extends Controller
{
    function update(Request $request){

        $prices = $request->price;

        foreach ($prices as $code => $price){
            $curCur = Currency::where('code', $code)->first();
            if ($curCur){
                $curCur->price = $price[0];
                $curCur->price_back = $price[1];
                $curCur->save();
            }
        }

        return Currency::all();
    }
}
