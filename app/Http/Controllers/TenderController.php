<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;

use App\Models\Role;
use App\Models\Tender;
use App\Models\TenderProduct;
use App\Models\TenderProductAttachment;
use App\Models\TenderProductReview;
use App\Models\TenderProductReviewItem;
use App\Models\TenderProductReviewItemAttachment;

class TenderController extends Controller
{
    public function createReview(Request $request)
    {
        $user = auth()->user();
        if ($user == null) {
            return response()->json('user not found');
        }
        //dd($request->input('review'));
        //dd($request->input('review'));
        $review = $request->input('review');

        $review_db = new TenderProductReview;
        $review_db->tender_id = $review['tender_id'];
        $review_db->provider_id = $user->id;
        $review_db->save();

        foreach ($review['item'] as $key => $item) {
            $review_item_db = new TenderProductReviewItem();

            $review_item_db->review_id = $review_db->id;
            $review_item_db->product_id = $item['product_id'];

            $review_item_db->name = $item['name'];
            $review_item_db->description = $item['description'];
            $review_item_db->price = $item['price'];
            $review_item_db->count = $item['count'];
            $review_item_db->release_time = $item['release_time'];

            if ($item['sample'] == "true")
                $review_item_db->sample = true;
            else
                $review_item_db->sample = false;

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

        return response()->json('Заявка создана', 200);
    }

    public function createTender(Request $request)
    {
        //USER AUTH CHECK//
        $user = auth()->user();
        if ($user == null) {
            return response()->json('user not found');
        }

        $tender = $request->input('tender');

        // CREATE TENDER //
        $tender_db = new Tender;
        $tender_db->status_id = 2;
        $tender_db->buyer_id = $user->id;
        $tender_db->description = "Новый тендер";
        $tender_db->save();

        foreach ($tender["products"] as $key => $product) {

            // CREATE TENDER PRODUCT //
            $tender_product_db = new TenderProduct;
            $tender_product_db->title = $product["title"];
            $tender_product_db->description = $product["description"];
            $tender_product_db->count = $product["count"];

            if ($product["sample"] == "true") {
                $tender_product_db->sample = true;
            } else {
                $tender_product_db->sample = false;
            }

            $tender_product_db->tender_id = $tender_db->id;
            $tender_product_db->save();

            if (array_key_exists('copied_attachments', $product)) {
                foreach ($product['copied_attachments'] as $copied_key => $copied_attachment) {
                    $copiedFile = 'public/tenderProducts/' . $copied_attachment;

                    $ext = substr(strstr($copied_attachment, '.'), 1);
                    $fileName = $copied_key . time() . '.' . $ext;
                    $destination = 'public/tenderProducts/' . $tender_product_db->id . '/' . $fileName;
                    if (!file_exists(storage_path() . '/app/public/tenderProducts/' . $tender_product_db->id))
                        \File::makeDirectory(storage_path() . '/app/public/tenderProducts/' . $tender_product_db->id);

                    Storage::copy($copiedFile, $destination);

                    $tender_product_attachment_db = new TenderProductAttachment;
                    $tender_product_attachment_db->type = $ext;
                    $tender_product_attachment_db->name = $fileName;
                    $tender_product_attachment_db->path = $tender_product_db->id . '/' . $fileName;
                    $tender_product_attachment_db->tender_product_id = $tender_product_db->id;
                    $tender_product_attachment_db->save();

                }
            }

            $product_att_count = intval($product["attachments_count"]);
            //if ($product_att_count > 0) {
              //  for ($i = 0; $i < $product_att_count; $i++) {
                    // ADD ATTACHMEMNT //
                    if ($request->file('tender.products.' . $key . '.attachments') != null) {
                        $path = TenderProduct::getStoragePath() . $tender_product_db->id . '/';
                        foreach ($request->file('tender.products.' . $key . '.attachments') as $i => $attachments) {
                            $file = $attachments['file'];
                            $ext = $file->guessExtension();
                            $fileName = $i . time() . '.' . $ext;
                            $file->move($path, $fileName);

                            $tender_product_attachment_db = new TenderProductAttachment;
                            $tender_product_attachment_db->type = $ext;
                            $tender_product_attachment_db->name = $fileName;
                            $tender_product_attachment_db->path = $tender_product_db->id . '/' . $fileName;
                            $tender_product_attachment_db->tender_product_id = $tender_product_db->id;
                            $tender_product_attachment_db->save();
                        }

                    }
               // }
            //}
        }

        return response()->json('Тендер создан', 200);
    }

    public function getTender(int $id)
    {
        $tender = Tender::with("products", "products.attachments", "buyer", "provider", "status", "substatus")->where('id', $id)->first();
        if ($tender != null)
            return $tender;

        return response()->json('Тендер не найден', 204);
    }

    public function showTenders(Request $request)
    {
        $user = auth()->user();
        $role = null;

        if ($user != null){
            if($user->roles() != null )
                $role = $user->roles()->first();

        }

        $tenders;
        $buyer_id = 0;

        $onlyMy = $request->input('onlyMy');
        $onlyActive = $request->input('onlyActive');
        $onlyArchive = $request->input('onlyArchive');

        if ($onlyMy != null || $onlyActive != null || $onlyArchive != null) {
            $tenders = Tender::with("products", "buyer", "provider", "status", "substatus");
            if ($user != null) {
                $buyer_id = $user->id;
                if ($onlyMy == 'on') {
                    $tenders = $tenders->where('buyer_id', $user->id);
                }
            }
            if ($onlyActive == 'on') {
                $tenders = $tenders->where('status_id', 3);
            }
            if ($onlyArchive == 'on') {
                $tenders = $tenders->where('status_id', 5);
            }
            $tenders = $tenders->get();
        } else {
            if ($user != null) {
                $buyer_id = $user->id;
                $tenders = Tender::with("products", "buyer", "provider", "status", "substatus")
                    ->where('status_id', 5)
                    ->orWhere('status_id', 3)
                    ->orWhere('buyer_id', $user->id)->get();
            } else {
                $tenders = Tender::with("products", "buyer", "provider", "status", "substatus")
                    ->where('status_id', 5)
                    ->orWhere('status_id', 3)->get();
            }
        }

        //$tenders = Tender::with("products", "buyer", "provider", "status", "substatus")->where('buyer_id', $user->id)->filters()->paginate();

        return view('tenders-list', ['tenders' => $tenders,'role'=>$role, 'buyer_id' => $buyer_id,
            'onlyMy' => $onlyMy, 'onlyActive' => $onlyActive, 'onlyArchive' => $onlyArchive]);
    }

    public function showTender(Request $request, int $id)
    {

        $user = auth()->user();
        $role = null;

        if ($user != null){
            if($user->roles() != null )
                $role = $user->roles()->first();

        }

        $tender = Tender::with("products", "products.reviews", "buyer", "provider", "status",
            "substatus", "reviews", "reviews.items", "reviews.items.attachments", "reviews.provider")
            ->where('id', $id)->first();

        //dd($tender);
        return view('tender-info', ['tender' => $tender, 'user' => $user, 'role' => $role]);
    }

    public function hideReview(Request $request)
    {
        $request->validate([
            'id' => 'required',
        ]);

        $review = TenderProductReview::find($request->id);
        if ($review != null)
        {
            $review->hidden = 1;
            $review->save();
            return response()->json('Ответ скрыт', 200);
        }
        return response()->json('Ответ не найден', 204);
    }

    public function unhideReview(Request $request)
    {
        $request->validate([
            'id' => 'required',
        ]);

        $review = TenderProductReview::find($request->id);
        if ($review != null)
        {
            $review->hidden = 0;
            $review->save();
            return response()->json('Ответ скрыт', 200);
        }
        return response()->json('Ответ не найден', 204);
    }
}
