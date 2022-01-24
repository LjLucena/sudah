<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedules extends Model
{

    public function VetName(){
        return $this->hasOne('App\Account','id','vet_id');
    }
}
