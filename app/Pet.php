<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    public function pet_breed(){
        return $this->hasOne('App\Breed','id','breed_id');
    }
    public function pet_species(){
        return $this->hasOne('App\Species','id','species_id');
    }
    public function pet_color(){
        return $this->hasOne('App\Color','id','color_id');
    }
    public function owner(){
        return $this->hasOne('App\User','id','user_id');
    }
}
