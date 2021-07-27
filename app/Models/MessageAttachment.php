<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MessageAttachment extends Model
{
    use HasFactory;

    protected $table = 'message_attachments';

    protected $fillable = ['id', 'path', 'type', 'name', 'message_id', 'created_at'];

}
