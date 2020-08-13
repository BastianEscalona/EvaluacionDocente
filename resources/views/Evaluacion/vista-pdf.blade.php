<html>
  <head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>EVALUACION DOCENTE</title>
  </head>
  <body>
      <h5 align="center" >PAUTA RESUMEN</h5>
    <div class="Identificacion">
      <h6>I. IDENTIFICACIÓN:</h6>
      <table class="table table-striped table-bordered">
        <tr> 
          <td> {{$evaluacion->nombre}} </td>
          <td> 
            @foreach ($departamentos as $departamento)
              @if ($academico->departamento_id == $departamento->id)
                {{$departamento->nombre}}
              @endif
            @endforeach
          </td>
        </tr>
        <tr>
          <td>Academico</td>
          <td>Departamento</td>
        </tr>
        <tr>
          <td>
            @foreach ($facultades as $facultad)
              @if ($departamento->facultad_id == $facultad->id)
                {{$facultad->Nombre}}
              @endif
            @endforeach
          </td>
          <td> 
            {{$evaluacion->fechainicio}} 
          </td>
        </tr>
        <tr>
          <td>Facultad</td>
          <td>Periodo Evaluacion</td>
        </tr>

        <tr>
          <td>{{$evaluacion->titulo}} </td>
          <td> {{$evaluacion->HorasContrato}} </td>
        </tr>
        <tr>
          <td>Titulo Profesional</td>
          <td>Horas de Contrato</td>
        </tr>

        <tr>
          <td>{{$evaluacion->categoria}}</td>
          <td>{{$evaluacion->gradoAcademico}}</td>
        </tr>
        <tr>
          <td>Categoria</td>
          <td>Grado Academico</td>
        </tr>

        <tr>
          <td></td>
          <td>{{$evaluacion->tipoplanta}}</td>
        </tr>
        <tr>
          <td>Nota Periodo Anterior</td>
          <td>Tipo de Planta</td>
        </tr>
      </table>
    </div>

    <div class="Calificacion">
      <h6>II. CALIFICACION ACADEMICA:</h6>
      <table class="table table-striped table-bordered">
        <tr>
          <td></td>
          <td>% de tiempo asignado a tareas programadas</td>
          <td colspan="5">Calificacion</td>
          <td>Pond</td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td>E</td>
          <td>MB</td>
          <td>B</td>
          <td>R</td>
          <td>D</td>
          <td>T*C/100</td>
        </tr>
        <tr class="nota1">
          <td>1. Actividades de Docencia</td>
          <td>{{$evaluacion->t1}}</td>
          <td>
            @if ($evaluacion->nota1 >= 4.5)
              {{$evaluacion->nota1}}
            @endif
          </td>
          <td>
            @if ($evaluacion->nota1 < 4.5 && $evaluacion->nota1 >= 4.0)
              {{$evaluacion->nota1}}
            @endif
          </td>
          <td>
            @if ($evaluacion->nota1 < 4.0 && $evaluacion->nota1 >= 3.5)
              {{$evaluacion->nota1}}
            @endif
          </td>
          <td>
            @if ($evaluacion->nota1 < 3.5 && $evaluacion->nota1 >= 2.7)
              {{$evaluacion->nota1}}
            @endif
          </td>
          <td>
            @if ($evaluacion->nota1 < 2.7)
              {{$evaluacion->nota1}}
            @endif
          </td>
          <td> {{$evaluacion->t1 * $evaluacion->nota1 /100}}</td>
          
        </tr>
        <tr class="nota2">
          <td>2. Actividades de Investigación</td>
          <td>{{$evaluacion->t2}}</td>
          <td>
            @if ($evaluacion->nota2 >= 4.5)
              {{$evaluacion->nota2}}
            @endif
          </td>
          <td>
            @if ($evaluacion->nota2 < 4.5 && $evaluacion->nota2 >= 4.0)
              {{$evaluacion->nota2}}
            @endif
          </td>
          <td>
            @if ($evaluacion->nota2 < 4.0 && $evaluacion->nota2 >= 3.5)
              {{$evaluacion->nota2}}
            @endif
          </td>
          <td>
            @if ($evaluacion->nota2 < 3.5 && $evaluacion->nota2 >= 2.7)
              {{$evaluacion->nota2}}
            @endif
          </td>
          <td>
            @if ($evaluacion->nota2 < 2.7)
              {{$evaluacion->nota2}}
            @endif
          </td>
          <td> {{$evaluacion->t2 * $evaluacion->nota2 /100}}</td>

        </tr>
        <tr class="nota3">
          <td>3. Extensión y Vinculación</td>
          <td>{{$evaluacion->t3}}</td>
          <td>
            @if ($evaluacion->nota3 >= 4.5)
              {{$evaluacion->nota3}}
            @endif
          </td>
          <td>
            @if ($evaluacion->nota3 < 4.5 && $evaluacion->nota3 >= 4.0)
              {{$evaluacion->nota3}}
            @endif
          </td>
          <td>
            @if ($evaluacion->nota3 < 4.0 && $evaluacion->nota3 >= 3.5)
              {{$evaluacion->nota3}}
            @endif
          </td>
          <td>
            @if ($evaluacion->nota3 < 3.5 && $evaluacion->nota3 >= 2.7)
              {{$evaluacion->nota3}}
            @endif
          </td>
          <td>
            @if ($evaluacion->nota3 < 2.7)
              {{$evaluacion->nota3}}
            @endif
          </td>
          <td> {{$evaluacion->t3 * $evaluacion->nota3 /100}}</td>

        </tr>
        <tr class="nota4">
          <td>4. Administración Académica</td>
          <td>{{$evaluacion->t4}}</td>
          <td>
            @if ($evaluacion->nota4 >= 4.5)
              {{$evaluacion->nota4}}
            @endif
          </td>
          <td>
            @if ($evaluacion->nota4 < 4.5 && $evaluacion->nota4 >= 4.0)
              {{$evaluacion->nota4}}
            @endif
          </td>
          <td>
            @if ($evaluacion->nota4 < 4.0 && $evaluacion->nota4 >= 3.5)
              {{$evaluacion->nota4}}
            @endif
          </td>
          <td>
            @if ($evaluacion->nota4 < 3.5 && $evaluacion->nota4 >= 2.7)
              {{$evaluacion->nota4}}
            @endif
          </td>
          <td>
            @if ($evaluacion->nota4 < 2.7)
              {{$evaluacion->nota4}}
            @endif
          </td>
          <td> {{$evaluacion->t4 * $evaluacion->nota4 /100}}</td>

        </tr>
        <tr class="nota5">
          <td>5. Otras Actividades Realizadas</td>
          <td>{{$evaluacion->t5}}</td>
          <td>
            @if ($evaluacion->nota5 >= 4.5)
              {{$evaluacion->nota5}}
            @endif
          </td>
          <td>
            @if ($evaluacion->nota5 < 4.5 && $evaluacion->nota5 >= 4.0)
              {{$evaluacion->nota5}}
            @endif
          </td>
          <td>
            @if ($evaluacion->nota5 < 4.0 && $evaluacion->nota5 >= 3.5)
              {{$evaluacion->nota5}}
            @endif
          </td>
          <td>
            @if ($evaluacion->nota5 < 3.5 && $evaluacion->nota5 >= 2.7)
              {{$evaluacion->nota5}}
            @endif
          </td>
          <td>
            @if ($evaluacion->nota5 < 2.7)
              {{$evaluacion->nota5}}
            @endif
          </td>
          <td> {{$evaluacion->t5 * $evaluacion->nota5 /100}}</td>

        </tr>
        <tr>
        <td >Calificacion Final</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>@if($evaluacion->notafinal < 2.7)
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
        <td>{{$evaluacion->notafinal}} </td>
      </tr>
      </table>

    </div>
    <div class="Escala">
      <h4>III. Escala Evaluativa:</h4>
      <table border="3" style="margin: 0 auto;">
        <tr>
        <td>          <label>Escala: Exelente = 4.5 a 5     Muy Bueno = 4.0 a 4.4       Bueno= 3.5 a 3.9</label> </td>
        </tr>
        <tr>
        <td>          <label>        Regular = 3.4 a 2.7       Deficiente = menos de 2.7</label> </td> 
        </tr>
      </table>
    </div>
    <div class="Escala">
      <h4>IV. Argumentos de la calificación</h4>
      <table class="table table-striped table-bordered">
        <td> {{$evaluacion->argumento}}  </td>
      </table>
    </div>
    <h4 align="center" >Firma Comision</h4>
    <table class="table table-striped table-bordered">
        <tr> 
          <td> {{$evaluacion->comision_id->}} </td>
          <td> 
              {{$evaluacion->nombre}}
          </td>
          <td> {{$evaluacion->nombre}} </td>
        </tr>
        <tr>
          <td>Nombre</td>
          <td>Nombre</td>
          <td>Nombre</td>
        </tr>

  </body>
</html>

