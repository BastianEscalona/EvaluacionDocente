<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Academico extends Model
{

    
    public function comisiones() {
        return $this
            ->belongsToMany('App\Comision')
            ->withTimestamps();
    }

    public function departamento(){

        return $this->belongsTo('App\Departamento');
    }

    public function evaluacion(){

        return $this->hasMany('App\Evaluacion');
    }
}
