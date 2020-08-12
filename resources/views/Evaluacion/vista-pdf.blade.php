



@section('content')

<div class="container">
    {{csrf_field()}}
    <div class="Identificacion">
      <h4>IDENTIFICACION</h4>
      <table class="table table-striped table-bordered">
       
        <tr>
          <td>
            {{$evaluacion->nombre}}
          </td>
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
          </td>
        </tr>
        <tr>
          <td>Facultad</td>
          <td>Periodo Evaluacion</td>
        </tr>

        <tr>
          <td>
            {{$evaluacion->titulo}}

          </td>
          <td>
            {{$evaluacion->HorasContrato}}

          </td>
        </tr>
        <tr>
          <td>Titulo Profesional</td>
          <td>Horas de Contrato</td>
        </tr>

        <tr>
          <td>
            {{$evaluacion->categoria}}
            
          </td>

          <td>
            {{$evaluacion->gradoAcademico}}

          </td>
        </tr>
        <tr>
          <td>Categoria</td>
          <td>Grado Academico</td>
        </tr>

        <tr>
          <td>
          </td>

          <td>
            {{$evaluacion->tipoplanta}}
          </td>
        </tr>
        <tr>
          <td>Nota Periodo Anterior</td>
          <td>Tipo de Planta</td>
        </tr>
        
        </tr>
      </table>
    </div>

    <div class="Calificacion">
      <h4>CALIFICACION ACADEMICA</h4>

      <table class="table table-striped table-bordered">
      
      <tr>
        <td></td>
        <td>% de tiempo asignado a tareas programadas</td>
        <td>Calificacion</td>
        <td></td>
        <td>Pond T*C/100</td>
      </tr>

      <tr>
        <td>Actividades de Docencia</td>
        <td> {{$evaluacion->t1}}  </td>
        <td> {{$evaluacion->nota1}} </td>
        <td></td>
        <td> {{$evaluacion->t1 * $evaluacion->nota1 /100}}</td>
      </tr>

      <tr>
        <td>Actividades de Docencia</td>
        <td> {{$evaluacion->t2}}  </td>
        <td> {{$evaluacion->nota2}}  </td>
        <td></td>
        <td>{{$evaluacion->t2 * $evaluacion->nota2 /100}} </td>
      </tr>

      <tr>
        <td>Extencion Y Vinculacion</td>
        <td> {{$evaluacion->t3}} </td>
        <td> {{$evaluacion->nota3}} </td>
        <td></td>
        <td>{{$evaluacion->t3* $evaluacion->nota3 /100}}</td>
      </tr>

      <tr>
        <td>Administracion Academica</td>
        <td> {{$evaluacion->t4}}  </td>
        <td> {{$evaluacion->nota4}} </td>
        <td></td>
        <td>{{$evaluacion->t4 * $evaluacion->nota4 /100}}</td>
      </tr>

      <tr>
        <td>Otras Actividades Realizadas</td>
        <td> {{$evaluacion->t5}} </td>
        <td> {{$evaluacion->nota5}} </td>
        <td></td>
        <td>{{$evaluacion->t5 * $evaluacion->nota5 /100}} </td>
      </tr>

      <tr>
        <td colspan="3">Calificacion Final</td>
        <td><label for="" id="escalafinal"></label></td>
        <td> </td>
      </tr>
      
      </table>
    
    </div>

    <div>
      <h4>Escala Evaluativa</h4>
      <label>Escala: Exelente = 4.5 a 5     Muy Bueno = 4.0 a 4.4       Bueno= 3.5 a 3.9</label>
      <label>        Regular = 3.4 a 2.7       Deficiente = menos de 2.7</label>
    </div>

    <div>
      <h4>ARGUMENTO DE LA CALIFICACION FINAL</h4>
      <textarea id="argumento" name="argumento" rows="4" cols="50">
      </textarea>
    </div>

  
</div>



@endsection