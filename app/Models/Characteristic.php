<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Attachment\Attachable;
use Orchid\Attachment\Models\Attachment;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class Characteristic extends Model
{
    use HasFactory;
    use AsSource, Attachable, Filterable;

    protected $fillable = [
        'name',
        'type'
    ];
    public function category()
    {
        return $this->belongsToMany(Category::class, "characteristic_categories", "characteristic_id", "category_id");
    }

    public function selects()
    {
        return $this->hasMany(CharcteristicSelect::class, 'charcteristic_id');
    }

}
