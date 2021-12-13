<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SearchQuery extends Model
{
    use HasFactory;
    protected $fillable = [
        'text',
        'count'
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, "user_search_queries", "search_id", "user_id");
    }

}
