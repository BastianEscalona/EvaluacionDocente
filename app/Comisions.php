<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comisions extends Model
{
    
    public function academicos() {
        return $this
            ->belongsToMany('App\Academico')
            ->withTimestamps();
    }

    public function evaluaciones(){
        return $this->hasMany('App\Evaluacion');
    }
}
