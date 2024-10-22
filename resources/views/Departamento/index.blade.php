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

<a class="btn btn-success" href ="{{url('Departamento/create')}}" > <i class="fas fa-user-plus" style="font-size: 24px;" ></i>   </a> 
</br>
</br>
<div class="row">
    <div class="col-12 table-responsive">
        <table class="table table-light table-hover" style="background-color: #f8f8f8;">
            <thead class="thead-light">
                <tr>
                    <th># </th>
                    <th>Nombre de Deparmento</th>
                    <th>Nombre de Facultad </th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody>
            @foreach ($departamentos as $departamento)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$departamento->nombre}}</td>
                <td> @foreach ($facultads as $facultad)
                    @if ($departamento->facultad_id == $facultad->id)
                        {{$facultad->Nombre}}
                    @endif
                @endforeach
                </td>
                <td>
                    <a class="btn btn-link" href="{{ url('/Departamento/'.$departamento->id.'/edit') }}" > <i class="fas fa-pencil-alt" style="font-size: 24px;" > </i>  </a>
                
                    <form method="POST" action="/Departamento/{{$departamento->id}}" style="display:inline">
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
        {{ $departamentos->links() }}
    </div>
    </div>
</div>

</div>
</body>
@endsection

