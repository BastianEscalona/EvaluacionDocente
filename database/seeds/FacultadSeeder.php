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
        $facultad->NombreDecano = 'Raúl Silva Prado';
        $facultad->save();

        $facultad = new Facultad();
        $facultad->Nombre = 'Facultad de Ciencias de la Educacion';
        $facultad->NombreDecano = 'Rodrigo Vargas Vitoria';
        $facultad->save();

        $facultad = new Facultad();
        $facultad->Nombre = 'Facultad de Ciencias de la Salud';
        $facultad->NombreDecano = 'Sara Herrera Leyton';
        $facultad->save();

        $facultad = new Facultad();
        $facultad->Nombre = 'Facultad de Ciencias de la Ingenieria';
        $facultad->NombreDecano = 'David Joel Zamora Barraza';
        $facultad->save();

        $facultad = new Facultad();
        $facultad->Nombre = 'Facultad de Ciencias Agrarias y Forestales';
        $facultad->NombreDecano = 'Nelson Loyola López';
        $facultad->save();

        $facultad = new Facultad();
        $facultad->Nombre = 'Facultad de Ciencias Sociales y Economicas';
        $facultad->NombreDecano = 'Patricio Oliva Lagos';
        $facultad->save();

        $facultad = new Facultad();
        $facultad->Nombre = 'Facultad de Ciencias Religiosas y Filosoficas';
        $facultad->NombreDecano = 'PBRO. DR. Luis Mauricio Albornoz Olivares';
        $facultad->save();

        $facultad = new Facultad();
        $facultad->Nombre = 'Facultad de Ciencias Basicas';
        $facultad->NombreDecano = 'Víctor Hugo Monzón Godoy';
        $facultad->save();
    }
}
