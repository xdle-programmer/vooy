<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Attachment\Attachable;
use Orchid\Attachment\Models\Attachment;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class CharcteristicSelect extends Model
{
    use HasFactory;
    use AsSource, Attachable, Filterable;

    protected $fillable = [
        'name',
        'charcteristic_id'
    ];

}
