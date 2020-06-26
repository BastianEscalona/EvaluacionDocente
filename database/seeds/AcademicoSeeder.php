<?php

use Illuminate\Database\Seeder;
use App\Academico;
class AcademicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $academico=new Academico();
        $academico ->rut='11.111.111-1';
        $academico->titulo='Doctor en Filosofia';
        $academico->gradoAcademico='Doctor';
        $academico->categoria='Full';
        $academico->HorasContrato='45';
        $academico->nombre='Cristhian Alejandro ';
        $academico->apellido='Almonacid Diaz';
        $academico->email='calmonacid@ucm.cl';
        $academico->estado='1';
        $academico->departamento_id='17';
        $academico->save();

        $academico=new Academico();
        $academico ->rut='22.222.222-2';
        $academico->titulo='Doctorado en Ciencias de la Computación';
        $academico->gradoAcademico='Doctor';
        $academico->categoria='Full';
        $academico->HorasContrato='45';
        $academico->nombre='Marco';
        $academico->apellido='Toranzo Céspedes';
        $academico->email='mtoranzo@ucm.cl';
        $academico->estado='1';
        $academico->departamento_id='12';
        $academico->save();





    }
}