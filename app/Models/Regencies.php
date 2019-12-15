<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Regencies extends Model
{
    protected $table = 'regencies';
    protected $primaryKey = 'id';

    public function leadtechnician()
    {
        return $this->hasMany('App\Models\LeadTechnician');
    }

    public function technician()
    {
        return $this->hasMany('App\Models\Technician');
    }

    public function users()
    {
        return $this->hasMany('App\Models\Users');
    }

    public function districts()
    {
        return $this->hasMany('App\Models\Districts');
    }

    public function provinces()
    {
        return $this->belongsTo('App\Models\Provinces', 'province_id', 'id');
    }
}
