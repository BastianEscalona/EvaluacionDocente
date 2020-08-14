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

@if(Session::has('Mensaje'))
    <div class="alert alert-success" role="alert">
           {{ Session::get('Mensaje')
}}
    </div>
@endif


<a class="btn btn-success" href ="{{url('Academico/create')}}" > <i class="fas fa-user-plus" style="font-size: 24px;" ></i>   </a> 
</br>
</br>
<div class="row" >
    <div class="col-12 table-responsive">
        <table class="table table-light table-hover" style="background-color: #f8f8f8;">
            <thead class="thead-light">
                <tr>
                    <th># </th>
                    <th>Rut Academico</th>
                    <th>Nombre Completo </th>
                    <th>Email </th>
                    <th>Titulo </th>
                    <th>Grado Academico </th>
                    <th>Categoria </th>
                    <th>Horas de Contrato </th>
                    <th>Estado </th>
                    <th>Departamento</th>
                    <th>Evaluar</th>
                    <th>Generar PDF</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>

            <tbody>
            @foreach ($academicos as $academico)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$academico->rut}}</td>
                <td>{{$academico->nombre}} {{$academico->apellido}} </td>
                <td>{{$academico->email}}</td>
                <td>{{$academico->titulo}}</td>
                <td>{{$academico->gradoAcademico}}</td>
                <td>{{$academico->categoria}}</td>
                <td>{{$academico->HorasContrato}}</td>

                <td>@if($academico->estado == 1)
                        Activo
                    @else 
                        Inactivo
                    @endif  
                </td>



                <td> @foreach ($departamentos as $departamento)
                    @if ($academico->departamento_id == $departamento->id)
                        {{$departamento->nombre}}
                    @endif
                @endforeach
                </td>
                <td>
                    <a class="btn btn-link" href="{{url('Evaluacion/create', $id_Academico=$academico->id)}}" > <i class="far fa-address-card" style="font-size: 36px;color:green" > </i>  </a>                        
                </td>  


                <td>
                <a class="btn btn-link" href ="{{url('Evaluacion/download', $id_Academico=$academico->id)}}" >  <i class="far fa-file-pdf" style="font-size: 36px;color:orange"></i>   </a> 
                </td>

                <td>
                    <a class="btn btn-link" href="{{ url('/Academico/'.$academico->id.'/edit') }}" > <i class="fas fa-pencil-alt" style="font-size: 24px;" > </i>  </a>
                </td>
                <td>
                    <form method="POST" action="/Academico/{{$academico->id}}" style="display:inline">
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
        {{ $academicos->links() }}
    </div>
    </div>
</div>

</div>
</body> 
@endsection
