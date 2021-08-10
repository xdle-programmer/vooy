<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $fillable = [
        'text', 'chat_id', 'user_id','status',
    ];

    public function chat(){
        return $this->belongsTo(Chat::class, 'chat_id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function attachments()
    {
        return $this->hasMany(MessageAttachment::class, 'message_id');
    }
}
