<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActivityLog extends Model
{
    public function activityUser(){
        return $this->hasOne('App\Account','id','user_id');
    }
}
