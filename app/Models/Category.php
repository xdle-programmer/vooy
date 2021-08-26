<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Attachment\Attachable;
use Orchid\Attachment\Models\Attachment;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class Category extends Model
{
    use HasFactory;
    use AsSource, Attachable, Filterable;

    protected $fillable = [
        'name',
        'parrent_id'
    ];

    public function characteristics()
    {
        return $this->belongsToMany(Characteristic::class, "characteristic_categories", "category_id", "characteristic_id");
    }

    public function products()
    {
        return $this->belongsToMany(Product::class, "product_categories", "category_id", "product_id");
    }

}
