<?php

namespace App\Orchid\Screens;

use App\Models\Chat;
use App\Models\Message;
use App\Models\TenderOwnership;
use App\Models\TenderProductReviewItem;
use App\Models\TenderProductReviewItemAttachment;
use App\Models\TenderSertificat;
use Orchid\Screen\Actions\Link;
use Orchid\Support\Facades\Layout;
use Orchid\Screen\Screen;

use App\Models\Currency;
use App\Models\Tender;
use App\Models\TenderProduct;
use App\Models\User;
use App\Models\TenderProductReview;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class TenderReviewCreationScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'TenderReviewCreationScreen';

    /**
     * Display header description.
     *
     * @var string|null
     */
    public $description = 'TenderReviewCreationScreen';

    /**
     * Query data.
     *
     * @return array
     */
    public function query(Tender $tender): array
    {
        $tender = Tender::with("products", "ownership", "products.attachments", "products.sertificats", "buyer", "provider", "status", "substatus")->where('id', $tender->id)->first();

        $providers = User::whereHas('provider_infos')
            ->whereDoesntHave('tender_product_reviews', function ($query)  use ($tender){
                $query->where('tender_id', $tender->id);
            })->with('provider_infos','subroles','provider_infos.services')->get();
        $ownerships = TenderOwnership::all();
        $sertificats = TenderSertificat::all();
        $currencies = Currency::where('is_active', 1)->get();
        return [
            'tender' => $tender,
            'ownerships' => $ownerships,
            'sertificats' => $sertificats,
            'currencies' => $currencies,
            'providers' => $providers,
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
            Layout::wrapper('orchid/tender_review_creation', [
            ]),
        ];
    }

    public function create(Request $request)
    {
        //dd($request->input('review'));
        $user = auth()->user();
        if ($user == null) {
            return response()->json('user not found');
        }

        $review = $request->input('review');

        if ($review['type'] == 1) {
            $review_db = new TenderProductReview;
            $review_db->tender_id = $review['tender_id'];
            $review_db->provider_id = $review['provider_id'];
            $review_db->from_country = $review['from_country'];
            $review_db->save();

            $curTender = Tender::find($review['tender_id']);
            $chat_db = new Chat;
            $chat_db->tender_id = $curTender->id;
            $chat_db->review_id = $review_db->id;
            $chat_db->save();

            $chat_db->users()->attach($review['provider_id']);
            $chat_db->users()->attach($curTender->buyer_id);

            if (isset($review['message'])) {
                $first_message = new Message();
                $first_message->text = $review['message'];
                $first_message->chat_id = $chat_db->id;
                $first_message->user_id = $review['provider_id'];
                $first_message->status = 1;
                $first_message->save();
            }

            foreach ($review['item'] as $key => $item) {
                $review_item_db = new TenderProductReviewItem();

                $review_item_db->review_id = $review_db->id;
                $review_item_db->product_id = $item['product_id'];

                $review_item_db->name = $item['name'];
                $review_item_db->description = $item['description'];
                $review_item_db->price = $item['price'];
                $review_item_db->count = $item['count'];
                $review_item_db->release_time = $item['release_time'];
                $review_item_db->currency_id = $item['currency'];

                if ($item['sample'] == "true")
                    $review_item_db->sample = true;
                else
                    $review_item_db->sample = false;

                if ($item['branding'] == "true")
                    $review_item_db->branding = true;
                else
                    $review_item_db->branding = false;

                if ($item['packing'] == "true")
                    $review_item_db->packing = true;
                else
                    $review_item_db->packing = false;

                $review_item_db->save();

                if ($request->file('review.item.' . $key . '.attachments') != null) {

                    $path = TenderProductReviewItem::getStoragePath() . $review_item_db->id . '/';
                    foreach ($request->file('review.item.' . $key . '.attachments') as $i => $attachments) {
                        $file = $attachments['file'];
                        $ext = $file->guessExtension();
                        $fileName = $i . time() . '.' . $ext;
                        $file->move($path, $fileName);

                        $tender_product_attachment_db = new TenderProductReviewItemAttachment;
                        $tender_product_attachment_db->type = $ext;
                        $tender_product_attachment_db->name = $fileName;
                        $tender_product_attachment_db->path = $review_item_db->id . '/' . $fileName;
                        $tender_product_attachment_db->review_product_id = $review_item_db->id;
                        $tender_product_attachment_db->save();
                    }

                }

            }
        }
        else if ($review['type'] == 2) {
            $curTender = Tender::find($review['tender_id']);
            $chat_db = new Chat;
            $chat_db->tender_id = $curTender->id;
            $chat_db->save();

            $chat_db->users()->attach($review['provider_id']);
            $chat_db->users()->attach($curTender->buyer_id);

            if (isset($review['message'])) {
                $first_message = new Message();
                $first_message->text = $review['message'];
                $first_message->chat_id = $chat_db->id;
                $first_message->user_id = $review['provider_id'];
                $first_message->status = 1;
                $first_message->save();
            }
        }


        return response()->json('OK',200);
    }
}
