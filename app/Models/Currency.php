<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Orchid\Attachment\Attachable;
use Orchid\Attachment\Models\Attachment;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class Currency extends Model
{
    use HasFactory;
    use AsSource, Attachable, Filterable;

    protected $table = 'currencies';

    protected $fillable = ['name', 'code', 'price', 'price_back','is_active'];

    protected $allowedFilters = [
        'id',
        'name',
        'code',
        'price.name',
        'is_active',
    ];

    protected $allowedSorts = [
        'id',
        'name',
        'code',
        'price.name',
        'is_active',
    ];

}
