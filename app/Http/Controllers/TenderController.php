<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;

use App\Models\Tender;
use App\Models\TenderProduct;
use App\Models\TenderProductAttachment;

class TenderController extends Controller
{

  public function createTender(Request $request)
  {

    /*
    $filePath = 'tenderProducts/24/01624908232.jpg';
    $content = Storage::disk('public')->get($filePath);
    dd($content);
    */

      //dd($request->file('tender.products.0.attachments'));

    //USER AUTH CHECK//
    $user = auth()->user();
  	if ($user == null){
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

      if ($product["sample"] == "true"){$tender_product_db->sample = true;}
      else{$tender_product_db->sample = false;}

      $tender_product_db->tender_id = $tender_db->id;
      $tender_product_db->save();

      if (array_key_exists('copied_attachments', $product)) {
        foreach ($product['copied_attachments'] as $copied_key => $copied_attachment) {
          $copiedFile = 'public/tenderProducts/' . $copied_attachment;

          $ext = substr(strstr($copied_attachment, '.'), 1);
          $fileName = $copied_key  . time() . '.' . $ext;
          $destination = 'public/tenderProducts/' . $tender_product_db->id . '/' . $fileName;
          if (! file_exists(storage_path() . '/app/public/tenderProducts/' . $tender_product_db->id))
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
      if ($product_att_count > 0) {
        for ($i=0; $i < $product_att_count; $i++)
        {
                // ADD ATTACHMEMNT //
                if ($request->file('tender.products.'. $key .'.attachments') != null)
                {
                  $path = TenderProduct::getStoragePath() . $tender_product_db->id . '/';
                  foreach ($request->file('tender.products.'. $key .'.attachments') as $i => $attachments)
                  {
                    $file = $attachments['file'];
                    $ext = $file->guessExtension();
                    $fileName = $i  . time() . '.' . $ext;
                    $file->move($path, $fileName);

                    $tender_product_attachment_db = new TenderProductAttachment;
                    $tender_product_attachment_db->type = $ext;
                    $tender_product_attachment_db->name = $fileName;
                    $tender_product_attachment_db->path = $tender_product_db->id . '/' . $fileName;
                    $tender_product_attachment_db->tender_product_id = $tender_product_db->id;
                    $tender_product_attachment_db->save();
                  }

                }
        }
      }
    }

    return response()->json('Тендер создан');
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
    $tenders;
    $buyer_id = 0;

    $onlyMy = $request->input('onlyMy');
    $onlyActive = $request->input('onlyActive');
    $onlyArchive = $request->input('onlyArchive');

    if ($onlyMy != null || $onlyActive != null || $onlyArchive != null) {
      $tenders = Tender::with("products", "buyer", "provider", "status", "substatus");
      if ($user != null){
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
    }else {
      if ($user != null){
        $buyer_id = $user->id;
        $tenders = Tender::with("products", "buyer", "provider", "status", "substatus")
        ->where('status_id', 5)
        ->orWhere('status_id', 3)
        ->orWhere('buyer_id', $user->id)->get();
      }
      else {
        $tenders = Tender::with("products", "buyer", "provider", "status", "substatus")
        ->where('status_id', 5)
        ->orWhere('status_id', 3)->get();
      }
    }

      //$tenders = Tender::with("products", "buyer", "provider", "status", "substatus")->where('buyer_id', $user->id)->filters()->paginate();

      return view('tenders-list',['tenders' => $tenders, 'buyer_id' => $buyer_id,
      'onlyMy' => $onlyMy, 'onlyActive' => $onlyActive, 'onlyArchive' => $onlyArchive ]);
  }

  public function showTender(Request $request, int $id)
  {
      $user = auth()->user();
      $role = null;
      if ($user != null && $user->roles()->firstOrFail() != null)
          $role = $user->roles()->first();

      $tender = Tender::with("products", "buyer", "provider", "status", "substatus")->where('id', $id)->first();

      return view('tender-info',['tender' => $tender, 'role' => $role]);
  }

}
