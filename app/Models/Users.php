<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;

class Users extends Authenticatable
{
    use HasApiTokens, Notifiable, softDeletes;
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $casts = ['id' => 'string'];
    protected $fillable = 
        [
            'id', 
            'province_id', 
            'regency_id', 
            'district_id', 
            'full_name', 
            'email', 
            'email_verified_at',
            'password',
            'handphone', 
            'date_of_birth', 
            'full_address',
        ];
    protected $guarded = ['created_at', 'updated_at'];
    public $dates = ['deleted_at'];
    protected $hidden = ['password', 'remember_token'];
    public $timestamps = true;

    public function complent()
    {
        return $this->hasMany('App\Models\Complent');
    }

    public function provinces()
    {
        return $this->belongsTo('App\Models\Provinces', 'province_id', 'id');
    }

    public function regencies()
    {
        return $this->belongsTo('App\Models\Regencies', 'regency_id', 'id');
    }

    public function districts()
    {
        return $this->belongsTo('App\Models\Districts', 'district_id', 'id');
    }
}
