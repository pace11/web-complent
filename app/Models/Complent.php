<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Complent extends Model
{
    use SoftDeletes;
    protected $table = 'complent_issue';
    protected $primaryKey = 'id';
    protected $fillable = 
        [
            'user_id', 
            'lead_technician_id', 
            'technician_id', 
            'description', 
            'status',
        ];
    public $dates = ['deleted_at'];
    public $timestamps = true;

    public function users()
    {
        return $this->belongsTo('App\Models\Users', 'user_id', 'id');
    }

    public function leadtechnician()
    {
        return $this->belongsTo('App\Models\LeadTechnician', 'lead_technician_id', 'id');
    }

    public function technician()
    {
        return $this->belongsTo('App\Models\Technician', 'technician_id', 'id');
    }
}
