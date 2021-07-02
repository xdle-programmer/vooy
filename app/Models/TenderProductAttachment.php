<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Orchid\Attachment\Attachable;
use Orchid\Attachment\Models\Attachment;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class TenderProductAttachment extends Model
{
    use HasFactory;
    use AsSource, Attachable, Filterable;

    protected $table = 'tender_product_attachments';

    protected $fillable = ['id', 'type', 'path', 'tender_product_id'];

    protected $allowedFilters = [
        'id',
    ];

    protected $allowedSorts = [
      'id',
    ];

    public function tenderProduct()
    {
      return $this->belongsTo(TenderProduct::class, 'tender_product_id');
    }
}
