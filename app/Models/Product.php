<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'title',
        'description',
        'release_time',
        'owner_id',
    ];

    public static function getStoragePath($s = true)
    {
        return storage_path() . '/app/public/products' . ($s ? '/' : '');
    }

    public function prices()
    {
        return $this->hasMany(ProductPrice::class, 'product_id');
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, "product_categories", "product_id", "category_id");
    }

    public function attachments()
    {
        return $this->hasMany(ProductAttachment::class, 'product_id');
    }


}
