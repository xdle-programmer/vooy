<?php

namespace App\Orchid\Screens;

use Orchid\Screen\Screen;

use Orchid\Screen\Actions\Link;
use Orchid\Support\Facades\Layout;

use App\Models\Tender;
use App\Models\TenderProduct;
use App\Models\User;
use App\Models\TenderOwnership;
use App\Models\TenderSertificat;



use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class TenderParthnerScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Выбрать партнёра';

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
        $tender = Tender::with("products", "ownership", "products.attachments", "products.sertificats", "buyer", "deliveryman", "negotiator", "provider", "status", "substatus")->where('id', $tender->id)->first();

        $connectors = User::whereHas('subroles', function ($q) {
        $q->where('subroles.id', 3);
         })->with("subroles", "provider_infos")->get();

        return [
            'tender' => $tender,
            'connectors' => $connectors,
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
            Layout::wrapper('orchid/tender_parthner', [
            ]),
        ];
    }

    public function aprove(Request $request)
    {
        $provider_id = $request->provider_id;
        $tender_id = $request->tender_id;

        $tender = Tender::find($tender_id);
        $tender->substatus_id = 2;
        $tender->deliveryman_id = $provider_id;
        $tender->save();

        $provider = User::find($provider_id);

        return response()->json(['provider'=>$provider],200);
    }
}
