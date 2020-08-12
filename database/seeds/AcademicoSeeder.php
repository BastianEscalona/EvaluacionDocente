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
        $academico->titulo='Doctor en Ciencias de la Educacion';
        $academico->gradoAcademico='Doctora';
        $academico->categoria='Full';
        $academico->HorasContrato='45';
        $academico->nombre='Leonor';
        $academico->apellido='Cerda Díaz';
        $academico->email='lcerdad@ucm.cl';
        $academico->estado='1';
        $academico->departamento_id='3';
        $academico->save();

        $academico=new Academico();
        $academico ->rut='11.111.122-1';
        $academico->titulo='Magister en Ciencias de la Educacion';
        $academico->gradoAcademico='Magister';
        $academico->categoria='Full';
        $academico->HorasContrato='45';
        $academico->nombre='Marcela ';
        $academico->apellido='Bertoglio Salazar';
        $academico->email='mbertoglio@ucm.cl';
        $academico->estado='1';
        $academico->departamento_id='3';
        $academico->save();

        $academico=new Academico();
        $academico ->rut='11.111.133-1';
        $academico->titulo='Magister en Ciencias de la Educacion';
        $academico->gradoAcademico='Doctora';
        $academico->categoria='Full';
        $academico->HorasContrato='45';
        $academico->nombre='Mario ';
        $academico->apellido='Sánchez Bustos';
        $academico->email='msanchezb@ucm.cl';
        $academico->estado='1';
        $academico->departamento_id='3';
        $academico->save();

        $academico=new Academico();
        $academico ->rut='11.111.144-1';
        $academico->titulo='Magister en Ciencias de la Educacion';
        $academico->gradoAcademico='Magister';
        $academico->categoria='Full';
        $academico->HorasContrato='45';
        $academico->nombre='Hernán ';
        $academico->apellido='Parra Fica';
        $academico->email='jparra@ucm.cl';
        $academico->estado='1';
        $academico->departamento_id='3';
        $academico->save();

        $academico=new Academico();
        $academico ->rut='11.111.155-1';
        $academico->titulo='Magister en Ciencias de la Educacion';
        $academico->gradoAcademico='Magister';
        $academico->categoria='Full';
        $academico->HorasContrato='45';
        $academico->nombre='Luz María ';
        $academico->apellido='Fabres Espinoza';
        $academico->email='lfabres@ucm.cl';
        $academico->estado='1';
        $academico->departamento_id='3';
        $academico->save();

        
        $academico=new Academico();
        $academico ->rut='11.111.211-1';
        $academico->titulo='Doctora en Ciencias de la Educacion';
        $academico->gradoAcademico='Doctora';
        $academico->categoria='Full';
        $academico->HorasContrato='45';
        $academico->nombre='Myriam';
        $academico->apellido='Díaz Yañez';
        $academico->email='mdiaz@ucm.cl';
        $academico->estado='1';
        $academico->departamento_id='4';
        $academico->save();

        $academico=new Academico();
        $academico ->rut='11.111.222-1';
        $academico->titulo='Doctora en Ciencias de la Educacion';
        $academico->gradoAcademico='Doctora';
        $academico->categoria='Full';
        $academico->HorasContrato='45';
        $academico->nombre='Lorena';
        $academico->apellido='López Torres';
        $academico->email='lplopez@ucm.cl';
        $academico->estado='1';
        $academico->departamento_id='4';
        $academico->save();

        $academico=new Academico();
        $academico ->rut='11.111.233-1';
        $academico->titulo='Licenciado en Ciencias de la Educacion';
        $academico->gradoAcademico='Licenciado';
        $academico->categoria='Full';
        $academico->HorasContrato='45';
        $academico->nombre='María Fernanda';
        $academico->apellido='Ampuero Catalán';
        $academico->email='mampuero@ucm.cl';
        $academico->estado='1';
        $academico->departamento_id='4';
        $academico->save();

        $academico=new Academico();
        $academico ->rut='11.111.244-1';
        $academico->titulo='Licenciado en Ciencias de la Educacion';
        $academico->gradoAcademico='Licenciado';
        $academico->categoria='Full';
        $academico->HorasContrato='45';
        $academico->nombre='Giselle';
        $academico->apellido='Bahamondes Quezada';
        $academico->email='gbahamondes@ucm.cl';
        $academico->estado='1';
        $academico->departamento_id='4';
        $academico->save();

        $academico=new Academico();
        $academico ->rut='11.111.255-1';
        $academico->titulo='Licenciado en Ciencias de la Educacion';
        $academico->gradoAcademico='Licenciado';
        $academico->categoria='Full';
        $academico->HorasContrato='45';
        $academico->nombre='Karina Ester';
        $academico->apellido='Cerda Oñate';
        $academico->email='karinacerda@ucm.cl';
        $academico->estado='1';
        $academico->departamento_id='4';
        $academico->save();

        $academico=new Academico();
        $academico ->rut='11.111.311-1';
        $academico->titulo='Doctora en Ciencias de la Educacion';
        $academico->gradoAcademico='Doctora';
        $academico->categoria='Full';
        $academico->HorasContrato='45';
        $academico->nombre='Carolina';
        $academico->apellido='Cornejo Valderrama';
        $academico->email='ccornejo@ucm.cl';
        $academico->estado='1';
        $academico->departamento_id='5';
        $academico->save();

        $academico=new Academico();
        $academico ->rut='11.111.322-1';
        $academico->titulo='Doctor en Ciencias de la Educacion';
        $academico->gradoAcademico='Doctor';
        $academico->categoria='Full';
        $academico->HorasContrato='45';
        $academico->nombre='Manuel';
        $academico->apellido='Monzalve Macaya';
        $academico->email='mmonzalve@ucm.cl';
        $academico->estado='1';
        $academico->departamento_id='5';
        $academico->save();

        $academico=new Academico();
        $academico ->rut='11.111.333-1';
        $academico->titulo='Doctor en Ciencias de la Educacion';
        $academico->gradoAcademico='Doctor';
        $academico->categoria='Full';
        $academico->HorasContrato='45';
        $academico->nombre='M° Francisca';
        $academico->apellido='Cáceres Zuñiga';
        $academico->email='mfcaceres@ucm.cl';
        $academico->estado='1';
        $academico->departamento_id='5';
        $academico->save();

        $academico=new Academico();
        $academico ->rut='11.111.344-1';
        $academico->titulo='Licenciado en Ciencias de la Educacion';
        $academico->gradoAcademico='Licenciado';
        $academico->categoria='Full';
        $academico->HorasContrato='45';
        $academico->nombre='Nicole Vanessa';
        $academico->apellido='Frez Aróstica';
        $academico->email='nfrez@ucm.cl';
        $academico->estado='1';
        $academico->departamento_id='5';
        $academico->save();

        $academico=new Academico();
        $academico ->rut='11.111.355-1';
        $academico->titulo='Licenciado en Ciencias de la Educacion';
        $academico->gradoAcademico='Licenciado';
        $academico->categoria='Full';
        $academico->HorasContrato='45';
        $academico->nombre='Rossana';
        $academico->apellido='Gómez Campos';
        $academico->email='rgomez@ucm.cl';
        $academico->estado='1';
        $academico->departamento_id='5';
        $academico->save();

        $academico=new Academico();
        $academico ->rut='11.111.411-1';
        $academico->titulo='Doctor en Ciencias de la Educacion';
        $academico->gradoAcademico='Doctor';
        $academico->categoria='Full';
        $academico->HorasContrato='45';
        $academico->nombre='Marcelo Eduardo';
        $academico->apellido='Castillo Retamal';
        $academico->email='mcastill@ucm.cl';
        $academico->estado='1';
        $academico->departamento_id='6';
        $academico->save();

        $academico=new Academico();
        $academico ->rut='11.111.422-1';
        $academico->titulo='Titulado en Ciencias de la Educacion';
        $academico->gradoAcademico='Titulado';
        $academico->categoria='Full';
        $academico->HorasContrato='45';
        $academico->nombre='Jessica';
        $academico->apellido='Mondaca Urrutia';
        $academico->email='jmondaca@ucm.cl';
        $academico->estado='1';
        $academico->departamento_id='6';
        $academico->save();

        $academico=new Academico();
        $academico ->rut='11.111.433-1';
        $academico->titulo='Doctor en Ciencias de la Educacion';
        $academico->gradoAcademico='Doctor';
        $academico->categoria='Full';
        $academico->HorasContrato='45';
        $academico->nombre='Rodrigo';
        $academico->apellido='Vargas Vitoria';
        $academico->email='rvargas@ucm.cl';
        $academico->estado='1';
        $academico->departamento_id='6';
        $academico->save();

        $academico=new Academico();
        $academico ->rut='11.111.444-1';
        $academico->titulo='Licenciado en Ciencias de la Educacion';
        $academico->gradoAcademico='Licenciado';
        $academico->categoria='Full';
        $academico->HorasContrato='45';
        $academico->nombre='Aquiles Alejandro';
        $academico->apellido='Almonacid Fierro';
        $academico->email='aalmonacid@ucm.cl';
        $academico->estado='1';
        $academico->departamento_id='6';
        $academico->save();

        $academico=new Academico();
        $academico ->rut='11.111.455-1';
        $academico->titulo='Licenciado en Ciencias de la Educacion';
        $academico->gradoAcademico='Licenciado';
        $academico->categoria='Full';
        $academico->HorasContrato='45';
        $academico->nombre='Franklin Hugo';
        $academico->apellido='Castillo Retamal';
        $academico->email='fcastillo@ucm.cl';
        $academico->estado='1';
        $academico->departamento_id='6';
        $academico->save();
















































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
