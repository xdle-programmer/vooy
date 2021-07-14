<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Orchid\Attachment\Attachable;
use Orchid\Attachment\Models\Attachment;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;


class TenderProduct extends Model
{
    use HasFactory;
    use AsSource, Attachable, Filterable;

    protected $table = 'tender_products';

    protected $fillable = ['id', 'title', 'description', 'tender_id', 'sample', 'count', 'branding', 'packing'];

    public static function getStoragePath($s = true)
    {
        return storage_path() . '/app/public/tenderProducts' . ($s ? '/' : '');
    }

    public function sertificats()
    {
      return $this->belongsToMany(TenderSertificat::class, "products_sertificats","product_id","sertificat_id");
    }

    public function attachments()
    {
      return $this->hasMany(TenderProductAttachment::class, 'tender_product_id');
    }

    public function reviews()
    {
        return $this->hasMany(TenderProductReviewItem::class, 'product_id');
    }

    public function tender()
    {
      return $this->belongsTo(Tender::class, 'tender_id');
    }

    protected $allowedFilters = [
        'id',
        'title',
    ];

    protected $allowedSorts = [
      'id',
      'title',
    ];
}
