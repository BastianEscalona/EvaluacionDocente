<?php

use Illuminate\Database\Seeder;
use App\Departamento;
class DepartamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $departamento = new Departamento();
        $departamento->nombre = 'Departamento de ciencias pre-clínicas';
        $departamento->facultad_id = '1';
        $departamento->save();

        $departamento = new Departamento();
        $departamento->nombre = 'Departamento de ciencias clínicas';
        $departamento->facultad_id = '1';
        $departamento->save();

        $departamento = new Departamento();
        $departamento->nombre = 'Departamento de formación inicial escolar';
        $departamento->facultad_id = '2';
        $departamento->save();

        $departamento = new Departamento();
        $departamento->nombre = 'Departamento de lengua castellana y literatura';
        $departamento->facultad_id = '2';
        $departamento->save();

        $departamento = new Departamento();
        $departamento->nombre = 'Departamento de diversidad e inclusividad educativa';
        $departamento->facultad_id = '2';
        $departamento->save();

        $departamento = new Departamento();
        $departamento->nombre = 'Departamento de ciencias de la actividad física';
        $departamento->facultad_id = '2';
        $departamento->save();

        $departamento = new Departamento();
        $departamento->nombre = 'Departamento de idiomas'; 
        $departamento->facultad_id = '2';
        $departamento->save();
        
        $departamento = new Departamento();
        $departamento->nombre = 'Departamento de fundamentos de la educación';
        $departamento->facultad_id = '2';
        $departamento->save();
        
        $departamento = new Departamento();
        $departamento->nombre = 'Departamento de enfermería'; 
        $departamento->facultad_id = '3';
        $departamento->save();

        $departamento = new Departamento();
        $departamento->nombre = 'Departamento de psicología';
        $departamento->facultad_id = '3';
        $departamento->save();

        $departamento = new Departamento();
        $departamento->nombre = 'Departamento de kinesiología';
        $departamento->facultad_id = '3';
        $departamento->save();

        $departamento = new Departamento();
        $departamento->nombre = 'Departamento de computación e industrias'; 
        $departamento->facultad_id = '4';
        $departamento->save();

        $departamento = new Departamento();
        $departamento->nombre = 'Departamento de obras civiles'; 
        $departamento->facultad_id = '4';
        $departamento->save();

        $departamento = new Departamento();
        $departamento->nombre = 'Facultad de ciencias agrarias'; 
        $departamento->facultad_id = '5';
        $departamento->save();

        $departamento = new Departamento();
        $departamento->nombre = 'Departamento de ciencias sociales'; 
        $departamento->facultad_id = '6';
        $departamento->save();

        $departamento = new Departamento();
        $departamento->nombre = 'Departamento de economía y administración'; 
        $departamento->facultad_id = '6';
        $departamento->save();

        $departamento = new Departamento();
        $departamento->nombre = 'Deparatamento de filosofía'; 
        $departamento->facultad_id = '7';
        $departamento->save();

        $departamento = new Departamento();
        $departamento->nombre = 'Departamento de teología'; 
        $departamento->facultad_id = '7';
        $departamento->save();

        $departamento = new Departamento();
        $departamento->nombre = 'Departamento de biología y química'; 
        $departamento->facultad_id = '8';
        $departamento->save();

        
        $departamento = new Departamento();
        $departamento->nombre = 'Departamento de matemática, física y estadística'; 
        $departamento->facultad_id = '8';
        $departamento->save();


    }
}
