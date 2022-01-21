<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InvInOut extends Model
{
    

    public function Product(){
        return $this->hasOne('App\Inventory','id','inventory_id');
    }

    public function Category(){
        return $this->hasOne('App\Category','id','category_id');
    }
}
