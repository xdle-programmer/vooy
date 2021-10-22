<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FactoryAttachment extends Model
{
    use HasFactory;
    protected $fillable = [
        'path',
        'type',
        'name',
        'factory_id',
    ];
    public static function getStoragePath($s = true)
    {
        return storage_path() . '/app/public/factories_attachments' . ($s ? '/' : '');
    }
}
