<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProviderService extends Model
{
  use HasFactory;

  protected $table = 'provider_services';

  protected $fillable = ['id', 'name'];


  public function providerInfos()
  {
    return $this->belongsToMany(ProviderInfo::class, "provider_info_services", "services_id", "info_id");
  }
}
