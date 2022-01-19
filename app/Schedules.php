<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedules extends Model
{

    public function Vet(){
        return $this->hasOne('App\User','id','vet_id');
    }
}
