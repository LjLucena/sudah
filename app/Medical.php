<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medical extends Model
{
    
    public function assessment(){
        return $this->hasOne('App\Pet','id','pet_id');
    }
    public function appointment_details(){
        return $this->hasOne('App\Appointment','id','appointment_id');
    }
}
