<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Orchid\Attachment\Attachable;
use Orchid\Attachment\Models\Attachment;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class TenderSertificat extends Model
{
    use HasFactory;
    use AsSource, Attachable, Filterable;

    protected $table = 'sertificats';

    protected $fillable = [
        'id',
        'name',
    ];

    protected $allowedFilters = [
        'id',
        'name',
    ];

    protected $allowedSorts = [
      'id',
      'name',
    ];
}
