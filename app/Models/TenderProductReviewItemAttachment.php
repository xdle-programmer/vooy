<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TenderProductReviewItemAttachment extends Model
{
    use HasFactory;

    protected $table = 'tender_product_review_item_attachments';

    protected $fillable = ['id', 'type', 'path', 'review_product_id'];

    public function reviewProduct()
    {
        return $this->belongsTo(TenderProductReviewItem::class, 'review_product_id');
    }

}
