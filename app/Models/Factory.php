<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factory extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'logo',
        'address',
        'city',
        'status',
        'provider_id',
    ];

    public function provider()
    {
        return $this->belongsTo(User::class, 'provider_id');
    }

    public function attachments()
    {
        return $this->hasMany(FactoryAttachment::class, 'factory_id');
    }

    public static function getStoragePath($s = true)
    {
        return storage_path() . '/app/public/factories' . ($s ? '/' : '');
    }

}
