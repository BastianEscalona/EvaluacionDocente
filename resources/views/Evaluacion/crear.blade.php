<script src="https://kit.fontawesome.com/eccfd43738.js" crossorigin="anonymous"></script>

@extends('layouts.app')

@section('content')

<div class="container">
  <a class="btn btn-link" href="{{url('Evaluacion')}}">
    <i class="fas fa-home" style="font-size: 48px;"></i>
  </a>
  <form action="{{ url('/Evaluacion')}}" class="form-horizontal" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="Identificacion">
      <h4>IDENTIFICACION</h4>
      <table class="table table-striped table-bordered">
        <tr></tr>
        <tr>
          <td>
            {{$academico->nombre}}
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
            {{$academico->titulo}}
          </td>
          <td>
            {{$academico->HorasContrato}}
          </td>
        </tr>
        <tr>
          <td>Titulo Profesional</td>
          <td>Horas de Contrato</td>
        </tr>

        <tr>
          <td>
            {{$academico->Categoria}}
          </td>

          <td>
            {{$academico->gradoAcademico}}
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
          </td>
        </tr>
        <tr>
          <td>Nota Periodo Anterior</td>
          <td>Tipo de Planta</td>
        </tr>
        
        </tr>
      </table>
    </div>

    <h4>CALIFICACION ACADEMICA</h4>

    <h4>ARGUMENTO DE LA CALIFICACION FINAL</h4>
  </form>
  
</div>
@endsection