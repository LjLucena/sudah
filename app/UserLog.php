<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserLog extends Model
{
    public function logProfile(){
        return $this->hasOne('App\Account','id','user_id');
    }
}
