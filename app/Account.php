<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $table = "users";
        
    public function AccountAppointment(){
        return $this->hasMany('App\Appointment','role_id','id');
    }
    public function UserProfile(){
        return $this->hasOne('App\Profile','id','profile_id');
    }
    
}
