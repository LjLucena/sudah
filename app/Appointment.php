<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    // public function AppointmentUser(){
    //     return $this->belongsTo('App\Account','role_id','id');
    // }
    public function AppointmentBranch(){
        return $this->hasOne('App\Branch','id','branch_id');
    }
    public function AppointmentUser(){
        return $this->hasOne('App\Account','id','user_id');
    }
    public function AppointmentVet(){
        return $this->hasOne('App\Account','id','vet_id');
    }
    public function AppointmentPet(){
        return $this->hasOne('App\Pet','id','pet_id');
    }
    public function AppointmentDate(){
        return $this->hasOne('App\Schedules','id','schedule_id');
    }
}
