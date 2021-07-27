<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TenderProductReviewItem extends Model
{
    use HasFactory;

    protected $table = 'tender_product_review_items';

    public static function getStoragePath($s = true)
    {
        return storage_path() . '/app/public/reviewProducts' . ($s ? '/' : '');
    }

    protected $fillable =
        [
            'id',
            'review_id',
            'product_id',
            'name',
            'description',
            'price',
            'count',
            'release_time',
            'sample',
            'branding',
            'packing',
            'currency_id'
        ];

    public function attachments()
    {
        return $this->hasMany(TenderProductReviewItemAttachment::class, 'review_product_id');
    }

    public function review()
    {
        return $this->belongsTo(TenderProductReview::class, 'review_id');
    }

    public function currency()
    {
        return $this->belongsTo(Currency::class, 'currency_id');
    }


}
