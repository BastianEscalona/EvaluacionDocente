<script src="https://kit.fontawesome.com/eccfd43738.js" crossorigin="anonymous"></script>
<style>
    .justify-content-center nav ul{
        justify-content: center !important;
    }
 </style>
@extends('layouts.app2')
@section('content')

<div class="container">

@if(Session::has('Mensaje'))
    <div class="alert alert-success" role="alert">
           {{ Session::get('Mensaje')
}}
    </div>
@endif

<!--a class="btn btn-success" href ="{{url('Evaluacion/create', $id_Academico=1)}}" > <i class="fas fa-user-plus" style="font-size: 24px;" ></i>   </a--> 
</br>
</br>
<div class="row">
    <div class="col-12 table-responsive">
        <table class="table table-light table-hover">
            <thead class="thead-light">
                <tr>
                    <th># </th>
                    <th>Nombre</th>
                    <th>Grado Academico</th>
                    <th>Fecha Evaluacion</th>
                    <th>Nota Final</th>
                    <th>Acciones</th>

                </tr>
            </thead>

            <tbody>
            @foreach ($evaluaciones as $evaluacion)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$evaluacion->nombre}}</td>
                <td>{{$evaluacion->gradoAcademico}}</td>
                <td>{{$evaluacion->fechaevaluacion}}</td>
                <td>{{$evaluacion->notafinal}}</td>

                <td>
                    <a class="btn btn-link" href="{{ url('/Evaluacion/'.$evaluacion->id.'/edit') }}" > <i class="fas fa-pencil-alt" style="font-size: 24px;" > </i>  </a>
                
                    <form method="POST" action="/Evaluacion/{{$evaluacion->id}}" style="display:inline">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                    <button class="btn btn-link" type="submit" onclick="return confirm('Esta Seguro de Borrar?');" ><i class="fas fa-trash-alt" style="font-size: 24px;color:red" ></i>  </button>
                    </form>
                </td>
            </tr>
            @endforeach
            </tbody>


        </table>
    </div>
    <div class="col-12 mx-auto" align="center">
        <div class="justify-content-center">
        {{ $evaluaciones->links() }}
    </div>
    </div>
</div>

</div>
@endsection
