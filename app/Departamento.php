<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    public function facultad(){
        
        return $this->belongsTo('App\Facultad');
    }

    public function academicos(){
        return $this->hasMany('App\Academico');
    }
}
