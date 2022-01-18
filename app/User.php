<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function UserProfile(){
        return $this->hasOne('App\Profile','id','profile_id');
    }
    public function UserRole(){
        return $this->belongsTo('App\User','role_id','id');
    }
    public function UserRoleI(){
        return $this->hasOne('App\Role','id','role_id');
    }
    public function UserBranch(){
        return $this->hasOne('App\Branch','id','branch_id');
    }
}
