<?php

use Illuminate\Database\Seeder;
use App\Facultad;
class FacultadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $facultad = new Facultad();
        $facultad->Nombre = 'Facultad de Medicina';
        $facultad->save();

        $facultad = new Facultad();
        $facultad->Nombre = 'Facultad de Ciencias de la Educacion';
        $facultad->save();

        $facultad = new Facultad();
        $facultad->Nombre = 'Facultad de Ciencias de la Salud';
        $facultad->save();

        $facultad = new Facultad();
        $facultad->Nombre = 'Facultad de Ciencias de la Ingenieria';
        $facultad->save();

        $facultad = new Facultad();
        $facultad->Nombre = 'Facultad de Ciencias Agrarias y Forestales';
        $facultad->save();

        $facultad = new Facultad();
        $facultad->Nombre = 'Facultad de Ciencias Sociales y Economicas';
        $facultad->save();

        $facultad = new Facultad();
        $facultad->Nombre = 'Facultad de Ciencias Religiosas y Filosoficas';
        $facultad->save();

        $facultad = new Facultad();
        $facultad->Nombre = 'Facultad de Ciencias Basicas';
        $facultad->save();
    }
}
