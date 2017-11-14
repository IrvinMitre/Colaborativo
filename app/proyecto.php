<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class proyecto extends Model
{
    protected $fillable = [
        'nombre','colaboradores','is_admin'
    ];

    public function proyectos(){
        return $this->hasMany('App\grupo', 'idG', 'id', 'idProyecto');
    }
    public function area(){
        return $this->hasMany('App\area', 'idA', 'id', 'idProyecto');
    }
   
}
