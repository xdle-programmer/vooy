<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCharacteristic extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'value',
        'product_id',
        'characteristic_id',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function characteristic()
    {
        return $this->belongsTo(Characteristic::class, 'characteristic_id');
    }
}
