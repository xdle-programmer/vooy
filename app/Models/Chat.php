<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
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
}
