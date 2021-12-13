<?php

namespace App\Orchid\Screens;

use App\Models\TenderTimeout;
use Orchid\Screen\Actions\Link;
use Orchid\Support\Facades\Layout;
use Orchid\Screen\Screen;

use App\Models\Tender;
use App\Models\TenderProduct;
use App\Models\User;
use App\Models\TenderOwnership;
use App\Models\TenderSertificat;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
class TenderModerationScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Модеррация тендера';

    /**
     * Display header description.
     *
     * @var string|null
     */
    public $description = '';

    /**
     * Query data.
     *
     * @return array
     */
    public function query(Tender $tender): array
    {
        $tender = Tender::with("products", "ownership", "products.attachments", "products.sertificats", "buyer", "provider", "status", "substatus")->where('id', $tender->id)->first();
        $ownerships = TenderOwnership::all();
        $sertificats = TenderSertificat::all();

        //dd($tender);
        return [
            'tender' => $tender,
            'ownerships' => $ownerships,
            'sertificats' => $sertificats,
        ];
    }

    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): array
    {
        return [];
    }

    /**
     * Views.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): array
    {
        return [
            Layout::wrapper('orchid/tender_moderation', [
            ]),
        ];
    }

    public function test(Request $req)
    {
        $reqTender = $req->input();

        if ($req->input("products")) {
            foreach ($req->input("products") as $reqProduct) {

                $product = TenderProduct::find($reqProduct["id"]);
                $product->title = $reqProduct["title"];
                $product->count = $reqProduct["count"];
                $product->sample = $reqProduct["sample"];
                $product->packing = $reqProduct["packing"];
                $product->branding = $reqProduct["branding"];
                $product->description = $reqProduct["description"];

                if ($reqProduct["sertificats"]) {
                    $sertArr = array();
                    foreach ($reqProduct["sertificats"] as $reqProdSert) {
                        array_push($sertArr, $reqProdSert["id"]);
                    }
                    $product->sertificats()->sync($sertArr);
                } else
                    $product->sertificats()->detach();


                $product->save();
            }
        }

        if ($req->input("buyer")) {
            $reqByuer = $req->input("buyer");
            $buyer = User::find($reqByuer["id"]);
            $buyer->name = $reqByuer["name"];
            $buyer->surname = $reqByuer["surname"];
            $buyer->midname = $reqByuer["midname"];
            $buyer->city = $reqByuer["city"];
            $buyer->email = $reqByuer["email"];
            $buyer->save();
        }

        if ($req->input("id")) {
            $tender = Tender::find($req->input("id"));

            if ($req->input("tenderComment"))
                $tender->description = $req->input("tenderComment");

            if ($req->input("ownershipType"))
                $tender->ownership_id = $req->input("ownershipType");

            if ($req->input("status"))
                $tender->status_id = $req->input("status");

            $timeout = TenderTimeout::first();
            if ($timeout == null)
                $timeout = 48;
            else
                $timeout = $timeout->hours;


            $tender->date_end = Carbon::now('UTC')->addHour($timeout)->format('Y-m-d H:i:s');
            $tender->save();

        }


        return "OK";
    }
}
