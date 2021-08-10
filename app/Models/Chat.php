<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Attachment\Attachable;
use Orchid\Attachment\Models\Attachment;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class Chat extends Model
{
    use HasFactory;
    use AsSource, Attachable, Filterable;

    protected $fillable = [
        'title',
        'tender_id',
        'review_id',
    ];


    public static function getStoragePath($s = true)
    {
        return storage_path() . '/app/public/chatRoom' . ($s ? '/' : '');
    }

    public function users(){
        return $this->belongsToMany(User::class, "chats_users","chat_id","user_id");
    }

    public function messages()
    {
        return $this->hasMany(Message::class, 'chat_id');
    }

    public function tender()
    {
        return $this->belongsTo(Tender::class, 'tender_id');
    }

    public function review()
    {
        return $this->belongsTo(TenderProductReview::class, 'review_id');
    }

    protected $allowedFilters = [
        'id',
        'title',
        'tender_id',
        'review_id',
    ];

    protected $allowedSorts = [
        'id',
        'title',
        'tender_id',
        'review_id',
    ];
}
