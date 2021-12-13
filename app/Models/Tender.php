<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Orchid\Attachment\Attachable;
use Orchid\Attachment\Models\Attachment;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class Tender extends Model
{
    use HasFactory;
    use AsSource, Attachable, Filterable;

    protected $table = 'tenders';

    protected $fillable = [
        'id',
        'status_id',
        'substatus_id',
        'buyer_id',
        'provider_id',
        'description',
        'ownership_id',
        'negotiator_id',
        'deliveryman_id',
        'need_delivery',
        'to_country',
        'date_end',
    ];

    public static function getStoragePath($s = true)
    {
        return storage_path() . '/app/public/tenders' . ($s ? '/' : '');
    }


    public function deliveryman()
    {
        return $this->belongsTo(User::class, 'deliveryman_id');
    }

    public function negotiator()
    {
        return $this->belongsTo(User::class, 'negotiator_id');
    }

    public function buyer()
    {
        return $this->belongsTo(User::class, 'buyer_id');
    }

    public function ownership()
    {
        return $this->belongsTo(TenderOwnership::class, 'ownership_id');
    }

    public function provider()
    {
        return $this->belongsTo(User::class, 'provider_id');
    }

    public function status()
    {
        return $this->belongsTo(TenderStatus::class, 'status_id');
    }

    public function substatus()
    {
        return $this->belongsTo(TenderSubstatus::class, 'substatus_id');
    }

    public function reviews()
    {
        return $this->hasMany(TenderProductReview::class, 'tender_id');
    }

    public function chats()
    {
        return $this->hasMany(Chat::class, 'tender_id');
    }

    public function products()
    {
        return $this->hasMany(TenderProduct::class, 'tender_id');
    }
    public function rating()
    {
        return $this->hasMany(UserReview::class, 'tender_id');
    }

    protected $allowedFilters = [
        'id',
        'status_id',
        'substatus_id',
        'status.name',
        'created_at',
        'need_delivery',
    ];

    protected $allowedSorts = [
        'id',
        'status_id',
        'substatus_id',
        'status.name',
        'created_at',
        'need_delivery',
    ];
}
