<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Academico extends Model
{
    use SoftDeletes;
    
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
