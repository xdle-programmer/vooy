<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\TenderSubstatus;
use App\Models\UserReview;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;

use App\Models\User;
use App\Models\Role;
use App\Models\Tender;
use App\Models\TenderProduct;
use App\Models\TenderProductAttachment;
use App\Models\TenderProductReview;
use App\Models\TenderProductReviewItem;
use App\Models\TenderProductReviewItemAttachment;

use App\Models\Chat;
use App\Models\Message;
use App\Models\MessageAttachment;

class TenderController extends Controller
{
    public function createReview(Request $request)
    {
        $user = auth()->user();
        if ($user == null) {
            return response()->json('user not found');
        }

        //dd($request->input('review'));
        $review = $request->input('review');

        $review_db = new TenderProductReview;
        $review_db->tender_id = $review['tender_id'];
        $review_db->provider_id = $user->id;
        $review_db->from_country = $review['from_country'];
        $review_db->save();

        $curTender = Tender::find($review['tender_id']);
        $chat_db = new Chat;
        $chat_db->tender_id = $curTender->id;
        $chat_db->review_id = $review_db->id;
        $chat_db->save();

        $chat_db->users()->attach($user->id);
        $chat_db->users()->attach($curTender->buyer_id);

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

        return response()->json('???????????? ??????????????', 200);

    }

    public function createTender(Request $request)
    {
        //USER AUTH CHECK//
        $user = auth()->user();
        if ($user == null) {
            return response()->json('user not found');
        }

        $tender = $request->input('tender');
        //dd($tender);
        // CREATE TENDER //
        $tender_db = new Tender;
        $tender_db->status_id = 2;
        $tender_db->buyer_id = $user->id;
        $tender_db->description = "?????????? ????????????";
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

                $attachmentsPath = 'public/tenderProducts/';
                if (array_key_exists('attachments_path', $product)) {
                    $attachmentsPath = $product["attachments_path"];
                }

                foreach ($product['copied_attachments'] as $copied_key => $copied_attachment) {
                    $copiedFile = $attachmentsPath . $copied_attachment;

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

            //$product_att_count = intval($product["attachments_count"]);
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

        return response()->json('???????????? ????????????', 200);
    }

    public function updateTender(Request $request)
    {
        //USER AUTH CHECK//
        $user = auth()->user();
        if ($user == null) {
            return response()->json('user not found');
        }

        $tender = $request->input('tender');


        // CREATE TENDER //
        $tender_db = Tender::find($tender['id']);
        $tender_db->status_id = 2;
        $tender_db->save();
        $tender_db->products()->delete();

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

        return response()->json('???????????? ????????????', 200);
    }

    public function getTender(int $id)
    {
        $tender = Tender::with("products", "products.attachments", "buyer", "provider", "status", "substatus")
            ->where('id', $id)->first();

        if ($tender != null)
            return $tender;

        return response()->json('???????????? ???? ????????????', 204);
    }

    public function showTenders(Request $request)
    {
        $user = auth()->user();
        $role = null;

        if ($user != null) {
            if ($user->roles() != null)
                $role = $user->roles()->first();

        }

        $tenders;
        $buyer_id = 0;

        $isFiltered = $request->input('filtered');
        $onlyMy = $request->input('onlyMy');
        $onlyMyProvider = $request->input('onlyMyProvider');
        $onlyMyRelease = $request->input('onlyMyRelease');
        $onlyActive = $request->input('onlyActive');
        $onlyArchive = $request->input('onlyArchive');

        if ($isFiltered) {
            $tenders = Tender::with("products", "buyer", "provider", "status", "substatus");
            if ($user != null) {
                $buyer_id = $user->id;

                if ($onlyMy == 'on') {
                    $tenders = $tenders->where('buyer_id', $user->id);
                }
                if ($onlyMyProvider == 'on') {
                    $tenders = $tenders->whereHas('reviews', function ($q) use ($user) {
                        $q->where('provider_id', $user->id)->orWhere('deliveryman_id', $user->id);
                    });
                }
                if ($onlyMyRelease == 'on') {
                    $tenders = $tenders->whereHas('reviews', function ($q) use ($user) {
                        $q->where('provider_id', $user->id)->orWhere('deliveryman_id', $user->id);
                    })->where('provider_id', $user->id);
                }
            }
            if ($onlyActive == 'on') {
                $tenders = $tenders->where('status_id', 3);
            }
            if ($onlyArchive == 'on') {
                $tenders = $tenders->where('status_id', 5);
            }
            $tenders = $tenders->orderBy('id', 'desc')->paginate(15);
        } else {
            if ($user != null) {
                $buyer_id = $user->id;
                $tenders = Tender::with("products", "buyer", "provider", "status", "substatus")
                    ->where('status_id', 5)
                    ->orWhere('status_id', 3)
                    ->orWhere('provider_id', $user->id)
                    ->orWhere('deliveryman_id', $user->id)
                    ->orWhere('buyer_id', $user->id)->orderBy('id', 'desc')->paginate(15);
            } else {
                $tenders = Tender::with("products", "buyer", "provider", "status", "substatus")
                    ->where('status_id', 5)
                    ->orWhere('status_id', 3)->orderBy('id', 'desc')->paginate(15);
            }
        }

        //$tenders = Tender::with("products", "buyer", "provider", "status", "substatus")->where('buyer_id', $user->id)->filters()->paginate();

        return view('tenders-list', ['tenders' => $tenders, 'role' => $role, 'buyer_id' => $buyer_id,
            'onlyMy' => $onlyMy, 'onlyMyProvider' => $onlyMyProvider, 'onlyActive' => $onlyActive, 'onlyArchive' => $onlyArchive]);
    }

    public function showTender(Request $request, int $id)
    {
        $user = auth()->user();
        $role = null;

        if ($user != null) {
            if ($user->roles() != null)
                $role = $user->roles()->first();
        }

        $tender = Tender::with("products", "products.reviews", "products.sertificats", "buyer", "provider", "status",
            "substatus", "chats", "chats.users", "reviews", "reviews.items", "reviews.chats", "reviews.items.attachments", "reviews.provider", "reviews.provider.subroles")
            ->where('id', $id)->first();

        if ($tender != null && $user != null) {
            $hasTender = Tender::whereHas('reviews', function ($q) use ($user) {
                $q->where('provider_id', $user->id)->orWhere('deliveryman_id', $user->id);
            })->where('id', $id)->first();
            $review = $tender->reviews->where('tender_id', $id)->where('provider_id', $user->id)->first();


            $hasChat = Chat::whereHas('users', function ($q) use ($user, $tender) {
                return $q->where('users.id', $user->id)->where('users.id', '!=', $tender->buyer_id);
            })->where('tender_id', $tender->id)->first();

            if ($hasTender != null || $tender->provider_id == $user->id) {
                return view('tender-info-provider', ['tender' => $tender, 'chat' => null, 'review' => $review, 'user' => $user, 'role' => $role]);
            } elseif ($hasChat != null) {
                return view('tender-info-provider', ['tender' => $tender, 'chat' => $hasChat, 'review' => null, 'user' => $user, 'role' => $role]);
            }
        }
        //dd($tender);
        return view('tender-info', ['tender' => $tender, 'user' => $user, 'role' => $role]);
    }

    public function hideReview(Request $request)
    {
        $request->validate([
            'id' => 'required',
        ]);

        $review = TenderProductReview::find($request->id);
        if ($review != null) {
            $review->hidden = 1;
            $review->save();
            return response()->json('?????????? ??????????', 200);
        }
        return response()->json('?????????? ???? ????????????', 204);
    }

    public function unhideReview(Request $request)
    {
        $request->validate([
            'id' => 'required',
        ]);

        $review = TenderProductReview::find($request->id);
        if ($review != null) {
            $review->hidden = 0;
            $review->save();
            return response()->json('?????????? ??????????', 200);
        }
        return response()->json('?????????? ???? ????????????', 204);
    }

    public function setWinner(Request $request)
    {
        $request->validate([
            'tender_id' => 'required',
            'review_id' => 'required',
            'deal_type' => 'required',
            'delivery' => 'required',
            'country' => 'required',
        ]);

        $tender_id = $request->tender_id;
        $review_id = $request->review_id;
        $deal_type = $request->deal_type;
        $delivery = $request->delivery;
        $country = $request->country;


        $tender = Tender::find($tender_id);
        if ($tender == null)
            response()->json('???????????? ???? ????????????', 204);

        $tenderReview = TenderProductReview::find($review_id);
        if ($tenderReview == null)
            response()->json('?????????? ???? ???????????? ???? ????????????', 204);

        $tender->provider_id = $tenderReview->provider_id;
        $tender->to_country = $country;
        $tender->need_delivery = $delivery;
        $tender->status_id = 4;
        if ($deal_type == 1) {
            $tender->negotiator_id = $tenderReview->provider_id;
            if ($delivery == 0)
                $tender->substatus_id = 2;
            else
                $tender->substatus_id = 1;

        } elseif ($deal_type == 2) {
            $tender->negotiator_id = $tenderReview->provider_id;
            if ($delivery == 1)
                $tender->deliveryman_id = $tenderReview->provider_id;
            $tender->substatus_id = 2;
        }
        $tender->save();

        $provider = User::with('provider_infos')->where('id', $tenderReview->provider_id)->first();
        $buyer = User::find($tender->buyer_id);

        return response()->json(['provider' => $provider, 'buyer' => $buyer, 'tender' => $tender], 200);
    }

    public function nextSubstatus(Request $request)
    {
        $substatus_id = $request->substatus_id + 1;
        $tender = Tender::find($request->tender_id);
        $substatus = TenderSubstatus::find($substatus_id);

        if ($substatus != null) {
            $tender->substatus_id = $substatus_id;
            $tender->save();
            return back();
        }
        dd($substatus);
        return back();
    }

    public function nextStatus(Request $request)
    {
        $user = auth()->user();
        if ($user == null) {
            return response()->json('user not found');
        }

        $tender = Tender::find($request->tender_id);
        $tender->status_id = $tender->status_id + 1;
        $tender->substatus_id = null;
        $tender->save();

        if ($request->input('review') != null) {

            $review = $request->input('review');
            if (!isset($review['grade']) && $review['comment'] == null) {
                return back();
            }

            $user_review_db = new UserReview();

            if (isset($review['grade']))
                $user_review_db->grade = $review['grade'];
            else
                $user_review_db->grade = 0;

            if (isset($review['comment']))
                $user_review_db->comment = $review['comment'];

            $user_review_db->from_user_id = $user->id;
            $user_review_db->user_id = $tender->provider_id;
            $user_review_db->tender_id = $tender->id;
            $user_review_db->save();
        }

        return back();
    }

    public function showChat()
    {
        $user = auth()->user();
        $users = null;
        $role = null;

        if ($user != null) {
            $users = User::where('id', '!=', $user->id)->get();
            $user = User::with('chats', 'chats.users')->where('id', $user->id)->first();
        }

        return view('chat', ['user' => $user, 'users' => $users]);

    }

    public function sendMessage(Request $request, int $id)
    {
        $request->validate([
            'text' => 'required',
            'chat_id' => 'required',
            'user_id' => 'required',
        ]);

        $message = new Message;
        $message->text = $request->text;
        $message->chat_id = $request->chat_id;
        $message->user_id = $request->user_id;
        $message->save();

        $msgAtt = null;
        /* ADD ATTACHMEMNT */
        if ($request->file('attachments') != null) {
            $message->has_attachment = 1;
            $message->save();

            $path = Chat::getStoragePath() . $request->chat_id . '/';
            $msgAtt;
            foreach ($request->file('attachments') as $i => $attachments) {
                $file = $attachments['file'];
                $ext = $file->guessExtension();
                $fileName = $i . time() . '.' . $ext;
                $file->move($path, $fileName);

                $message->attachments()->save(new MessageAttachment([
                    'type' => $ext,
                    'name' => $fileName,
                    'path' => 'chatRoom',
                ]));

                $msgAtt[] = [
                    'msg_id' => $request->user_id,
                    'name' => $fileName,
                    'type' => $ext,
                ];
            }
        }

        return response()->json(['message' => $message, 'file' => $msgAtt]);
    }

    public function getMessages(Request $request, int $id)
    {
        if ($request->status != null) {
            if ($request->mod == 1) {
                $user = auth()->user();
                $messages = Message::with('attachments')->where(function ($q) use ($id, $request) {
                    return $q->where('chat_id', $id)->where('status', $request->status);
                })->orWhere(function ($q) use ($id, $user) {
                    return $q->where('chat_id', $id)->where('user_id', $user->id);
                })->get();
                return response()->json($messages);
            }
            $messages = Message::with('attachments')->where('chat_id', $id)->where('status', $request->status)->get();
            return response()->json($messages);
        }
        $messages = Message::with('attachments')->where('chat_id', $id)->get();
        return response()->json($messages);
    }

    public function createRoom(Request $request)
    {
        $request->validate([
            'user_id' => 'required'
        ]);
        $user = auth()->user();

        $chat = new Chat;
        $chat->title = '?????? ' . $user->name;
        $chat->save();
        $chat->users()->attach($user->id);
        $chat->users()->attach($request->user_id);

        return response()->json($chat);
    }

    public function messageAccept(int $id)
    {
        $msg = Message::with('attachments')->where('id', $id)->first();
        $msg->status = 1;
        $msg->save();

        return response()->json(['message' => $msg], 200);
    }

    public function messageDecline(Request $request, int $id)
    {
        if ($request->decline_text != null) {

        }
        $msg = Message::with('attachments')->where('id', $id)->first();
        $msg->status = -1;
        if ($request->decline_text != null)
            $msg->decline_text = $request->decline_text;
        $msg->save();

        return response()->json(['message' => $msg], 200);
    }


    public function getUserRating(Request $request, int $id)
    {
        $userReview = UserReview::with('from_user')->where('user_id', $id)->get();
        return response()->json($userReview);
    }
}
