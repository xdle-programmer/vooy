<?php

namespace App\Models;

use Orchid\Platform\Models\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'permissions',
        'city',
        'surname',
        'midname',
        'phone',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'permissions',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'permissions'          => 'array',
        'email_verified_at'    => 'datetime',
    ];

    /**
     * The attributes for which you can use filters in url.
     *
     * @var array
     */
    protected $allowedFilters = [
        'id',
        'name',
        'email',
        'permissions',
    ];

    /**
     * The attributes for which can use sort in url.
     *
     * @var array
     */
    protected $allowedSorts = [
        'id',
        'name',
        'email',
        'updated_at',
        'created_at',
    ];

    public function chats(){
        return $this->belongsToMany(Chat::class, "chats_users","user_id","chat_id");
    }
    public function subroles(){
        return $this->belongsToMany(Subrole::class, "provider_subroles","user_id","subrole_id");
    }
    public function provider_infos()
    {
        return $this->hasMany(ProviderInfo::class, 'user_id');
    }
    public function tender_product_reviews()
    {
        return $this->hasMany(TenderProductReview::class, 'provider_id');
    }

}
