<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Technician extends Model
{
    use softDeletes;
    protected $table = 'technician';
    protected $primaryKey = 'id';
    protected $casts = ['id' => 'string'];
    protected $fillable = 
        [
            'id', 
            'province_id', 
            'regency_id', 
            'district_id',
            'lead_technician_id', 
            'full_name', 
            'email', 
            'email_verified_at', 
            'password', 
            'handphone', 
            'date_of_birth', 
            'full_address',
            'remember_token',
        ];
    protected $guarded = ['created_at', 'updated_at'];
    public $dates = ['deleted_at'];
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

    public function leadtechnician()
    {
        return $this->belongsTo('App\Models\LeadTechnician', 'lead_technician_id', 'id');
    }
}
