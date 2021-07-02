<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;

use App\Models\Tender;
use App\Models\TenderProduct;
use App\Models\TenderProductAttachment;

class TenderController extends Controller
{

  public function createTender(Request $request)
  {
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

  public function showTenders(Request $request)
  {
    $user = auth()->user();
    $tenders;
    if ($user == null){
      //return redirect('/login');
      
    }
    $tenders = Tender::with("products", "buyer", "provider", "status", "substatus")->filters()->paginate();
    //$tenders = Tender::with("products", "buyer", "provider", "status", "substatus")->where('buyer_id', $user->id)->filters()->paginate();



      return view('tenders-list',['tenders' => $tenders]);
  }

  public function showTender(Request $request, int $id)
  {
      $tender = Tender::with("products", "buyer", "provider", "status", "substatus")->where('id', $id)->first();

      return view('tender-info',['tender' => $tender]);
  }

}
