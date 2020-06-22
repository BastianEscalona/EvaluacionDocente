<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evaluacion extends Model
{
    public function comisiones(){
        
        return $this->belongsTo('App\Comision');
    }

    public function academicos(){
        return $this->belongsTo('App\Academico');
    }
}
