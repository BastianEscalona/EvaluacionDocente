<?php

namespace App\Exports;

use App\Evaluacion;
use App\Departamento;
use App\Academico;
use App\Facultad;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;

class EvaluacionExport implements FromView
{
   

    public function view(): View
    {
        #$evaluacion = Evaluacion::get();
        #$departamento = Departamento::get();
        #$academico = Academico::get();
        #$facultad = Facultad::get();
        return view('Evaluacion.export', [
            'evaluaciones' => Evaluacion::all()
        ]);
    }
}