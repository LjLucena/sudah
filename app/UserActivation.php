<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserActivation extends Model
{
    protected $fillable = [
        'user_id','token',
    ];
}
