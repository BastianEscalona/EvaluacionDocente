<html>
<table>
    <tbody>
        <tr>
            <td rowspan="3"></td>
            <td colspan="3">VICERRECTORIA ACADEMICA</td>
        </tr>
        <tr>
            <td colspan="3">COMISION PROMOCION ACADEMICA</td>
        </tr>
        <tr>
            <td valign="middle" colspan="12">RESUMEN CALIFICACION</td>
        </tr>
        <tr>
            <td rowspan="2" style="background-color: #ffff99;">Facultad</td>
            <td rowspan="2" style="background-color: #ffff99;">Categoria</td>
            <td rowspan="2" style="background-color: #ffff99;">Nombre</td>
            <td rowspan="2" style="background-color: #ffff99;">Calificacion Anterior (nota)</td>
            <td colspan="2" style="background-color: #ffff99;">Actividades de docencia</td>
            <td colspan="2" style="background-color: #ffff99;">Actividades de Investigacion</td>
            <td colspan="2" style="background-color: #ffff99;">Extension y Vinculacion</td>
            <td colspan="2" style="background-color: #ffff99;">Administracion Academica</td>
            <td colspan="2" style="background-color: #ffff99;">Otras</td>
            <td colspan="2" style="background-color: #ffff99;">Calificacion</td>
        </tr>   
    
        <tr>
            <td style="background-color: #ffff99;">Tiempo asig</td>
            <td style="background-color: #ffff99;">nota</td>
            <td style="background-color: #ffff99;">Tiempo asig</td>
            <td style="background-color: #ffff99;">nota</td>
            <td style="background-color: #ffff99;">Tiempo asig</td>
            <td style="background-color: #ffff99;">nota</td>
            <td style="background-color: #ffff99;">Tiempo asig</td>
            <td style="background-color: #ffff99;">nota</td>
            <td style="background-color: #ffff99;">Tiempo asig</td>
            <td style="background-color: #ffff99;">nota</td>
            <td style="background-color: #ffff99;">Nota</td>
            <td style="background-color: #ffff99;">Concepto</td>            
        </tr>

        @foreach ($evaluaciones as $evaluacion )
            <tr>
                <td> {{$evaluacion->nombreFacultad}}</td>
                <td> {{$evaluacion->categoria}} </td>
                <td> {{$evaluacion->nombre}} </td>
                <td> {{$evaluacion->calificacionanterior}} </td>
                <td> {{$evaluacion->t1}}  </td>
                <td> {{$evaluacion->nota1}} </td>
                <td> {{$evaluacion->t2}}  </td>
                <td> {{$evaluacion->nota2}} </td>
                <td> {{$evaluacion->t3}}  </td>
                <td> {{$evaluacion->nota3}} </td>
                <td> {{$evaluacion->t4}}  </td>
                <td> {{$evaluacion->nota4}} </td>
                <td> {{$evaluacion->t5}}  </td>
                <td> {{$evaluacion->nota5}} </td>
                <td> {{$evaluacion->notafinal}}</td>
                <td>
                    @if($evaluacion->notafinal < 2.7)
                        Deficiente
                    @elseif($evaluacion->notafinal > 2.6 && $evaluacion->notafinal < 3.5)
                        Regular
                    @elseif($evaluacion->notafinal > 3.4 && $evaluacion->notafinal < 4.0)
                        Bueno
                    @elseif($evaluacion->notafinal > 3.9 && $evaluacion->notafinal < 4.5)
                        Muy Bueno
                    @elseif($evaluacion->notafinal > 4.4 && $evaluacion->notafinal < 5.0)
                        Excelente
                    @endif
                </td>
            </tr>
        @endforeach

    </tbody>
</table>
</html>