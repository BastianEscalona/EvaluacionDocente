<script src="https://kit.fontawesome.com/eccfd43738.js" crossorigin="anonymous"></script>
<style>
    .justify-content-center nav ul{
        justify-content: center !important;
    }
 </style>
@extends('layouts.app2')
@section('content')
<body style="background-color: #f0f8ff;">

<div class="container">
  <a class="btn btn-link" href="{{url('Bienvenido')}}">
    <i class="fas fa-home" style="font-size: 48px;"></i>
  </a>
<a class="btn btn-link" href ="{{url('Evaluacion/downloadexcel')}}" >  <i class="far fa-file-excel" style="font-size: 36px;color:green"></i>   </a> 
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
        <table class="table table-light table-hover" style="background-color: #f8f8f8;">
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
                    <a class="btn btn-link" href ="{{url('Evaluacion/download', $id=$evaluacion->id)}}" >  <i class="far fa-file-pdf" style="font-size: 36px;color:orange"></i>   </a> 

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
</body>
@endsection
