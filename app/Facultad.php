<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facultad extends Model
{
    public function departamentos(){
        return $this->hasMany('App\Departamento');
    }
}
