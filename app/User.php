<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','is_admin'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function proyecto(){
        return $this->hasMany('App\grupo', 'idG', 'idProyecto', 'id');
    }
     public function area(){
        return $this->hasMany('App\area', 'idA', 'idProyecto', 'id');
    }
}
