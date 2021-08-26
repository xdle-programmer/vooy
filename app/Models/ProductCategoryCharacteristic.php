<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Attachment\Attachable;
use Orchid\Attachment\Models\Attachment;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class ProductCategoryCharacteristic extends Model
{
    use HasFactory;
    use AsSource, Attachable, Filterable;

    protected $table = 'characteristic_categories';

    protected $fillable = [
        'id',
        'characteristic_id',
        'category_id'
    ];
}
