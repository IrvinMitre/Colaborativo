<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class grupo extends Model
{
    //
  
     public function area(){
        return $this->hasMany('App\area','id', 'idProyecto', 'idA');
    }
}
