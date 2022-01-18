<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Breed extends Model
{
    
    public function pet_species(){
        return $this->hasOne('App\Species','id','species_id');
    } 
}
