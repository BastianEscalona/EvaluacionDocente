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
        $departamento->nombre = 'DEPARTAMENTO DE CIENCIAS PRE-CLÍNICAS';
        $departamento->facultad_id = '1';
        $departamento->save();

        $departamento = new Departamento();
        $departamento->nombre = 'DEPARTAMENTO DE CIENCIAS CLÍNICAS';
        $departamento->facultad_id = '1';
        $departamento->save();

        $departamento = new Departamento();
        $departamento->nombre = 'DEPARTAMENTO DE FORMACIÓN INICIAL ESCOLAR';
        $departamento->facultad_id = '2';
        $departamento->save();

        $departamento = new Departamento();
        $departamento->nombre = 'DEPARTAMENTO DE LENGUA CASTELLANA Y LITERATURA';
        $departamento->facultad_id = '2';
        $departamento->save();

        $departamento = new Departamento();
        $departamento->nombre = 'DEPARTAMENTO DE DIVERSIDAD E INCLUSIVIDAD EDUCATIVA';
        $departamento->facultad_id = '2';
        $departamento->save();

        $departamento = new Departamento();
        $departamento->nombre = 'DEPARTAMENTO DE CIENCIAS DE LA ACTIVIDAD FÍSICA';
        $departamento->facultad_id = '2';
        $departamento->save();

        $departamento = new Departamento();
        $departamento->nombre = 'DEPARTAMENTO DE IDIOMAS';
        $departamento->facultad_id = '2';
        $departamento->save();
        
        $departamento = new Departamento();
        $departamento->nombre = 'DEPARTAMENTO DE FUNDAMENTOS DE LA EDUCACIÓN';
        $departamento->facultad_id = '2';
        $departamento->save();
        
        $departamento = new Departamento();
        $departamento->nombre = 'DEPARTAMENTO DE ENFERMERÍA';
        $departamento->facultad_id = '3';
        $departamento->save();

        $departamento = new Departamento();
        $departamento->nombre = 'DEPARTAMENTO DE PSICOLOGÍA';
        $departamento->facultad_id = '3';
        $departamento->save();

        $departamento = new Departamento();
        $departamento->nombre = 'DEPARTAMENTO DE KINESIOLOGÍA';
        $departamento->facultad_id = '3';
        $departamento->save();

        $departamento = new Departamento();
        $departamento->nombre = 'DEPARTAMENTO DE COMPUTACIÓN E INDUSTRIAS';
        $departamento->facultad_id = '4';
        $departamento->save();

        $departamento = new Departamento();
        $departamento->nombre = 'DEPARTAMENTO DE OBRAS CIVILES';
        $departamento->facultad_id = '4';
        $departamento->save();

        $departamento = new Departamento();
        $departamento->nombre = 'FACULTAD DE CIENCIAS AGRARIAS';
        $departamento->facultad_id = '5';
        $departamento->save();

        $departamento = new Departamento();
        $departamento->nombre = 'DEPARTAMENTO DE CIENCIAS SOCIALES';
        $departamento->facultad_id = '6';
        $departamento->save();

        $departamento = new Departamento();
        $departamento->nombre = 'DEPARTAMENTO DE ECONOMÍA Y ADMINISTRACIÓN';
        $departamento->facultad_id = '6';
        $departamento->save();

        $departamento = new Departamento();
        $departamento->nombre = 'DEPARTAMENTO DE FILOSOFÍA';
        $departamento->facultad_id = '7';
        $departamento->save();

        $departamento = new Departamento();
        $departamento->nombre = 'DEPARTAMENTO DE TEOLOGÍA';
        $departamento->facultad_id = '7';
        $departamento->save();

        $departamento = new Departamento();
        $departamento->nombre = 'DEPARTAMENTO DE BIOLOGÍA Y QUÍMICA';
        $departamento->facultad_id = '8';
        $departamento->save();

        
        $departamento = new Departamento();
        $departamento->nombre = 'DEPARTAMENTO DE MATEMÁTICA, FÍSICA Y ESTADÍSTICA';
        $departamento->facultad_id = '8';
        $departamento->save();


    }
}
