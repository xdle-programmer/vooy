<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserReview extends Model
{
    use HasFactory;

    protected $fillable = [
        'grade',
        'comment',
        'from_user_id',
        'user_id',
        'tender_id'
    ];

    public function tender()
    {
        return $this->belongsTo(Tender::class, 'tender_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function from_user()
    {
        return $this->belongsTo(User::class, 'from_user_id');
    }

}
