<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TenderProductReview extends Model
{
    use HasFactory;

    protected $table = 'tender_product_reviews';

    protected $fillable = ['id', 'hidden', 'tender_id', 'provider_id', 'from_country'];

    public function items()
    {
        return $this->hasMany(TenderProductReviewItem::class, 'review_id');
    }

    public function provider()
    {
        return $this->belongsTo(User::class, 'provider_id');
    }

    public function chats()
    {
        return $this->hasMany(Chat::class, 'review_id');
    }

}
