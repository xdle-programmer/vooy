<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subrole extends Model
{
    use HasFactory;
    protected $table = 'subroles';

    public function providers(){
        return $this->belongsToMany(User::class, "provider_subroles","subrole_id","user_id");
    }
}
