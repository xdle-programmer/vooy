<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCharcteristicSelect extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'value',
        'product_id',
        'select_id',
    ];

    public function info()
    {
        return $this->belongsTo(CharcteristicSelect::class, 'select_id');
    }


}
