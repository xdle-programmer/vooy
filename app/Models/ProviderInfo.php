<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProviderInfo extends Model
{
  use HasFactory;

  protected $table = 'provider_infos';

  protected $fillable = ['id', 'user_id', 'company', 'can_RLE'];


  public function services()
  {
    return $this->belongsToMany(ProviderService::class, "provider_info_services", "info_id", "services_id");
  }

  public function user()
  {
    return $this->belongsTo(User::class, 'user_id');
  }

}
