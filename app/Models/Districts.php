<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Districts extends Model
{
    protected $table = 'districts';
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

    public function regencies()
    {
        return $this->belongsTo('App\Models\Regencies');
    }
}
