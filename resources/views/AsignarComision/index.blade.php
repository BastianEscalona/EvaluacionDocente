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
          <a  class="btn btn-link" href ="{{url('Bienvenido')}}" > <i class="fas fa-home" style="font-size: 48px;" > </i>  </a>

@if(Session::has('Mensaje'))
    <div class="alert alert-success" role="alert">
           {{ Session::get('Mensaje')
}}
    </div>
@endif

  <div class="container formulario">

        <div class="card">
          <div class="card-body">
            <table class="table table-light table-hover">
            <thead class="thead-light">
                <tr>
                    <th># </th>
                    <th>ID Comision</th>
                    <th>Nombre Comision </th>
                    <th>Rut Academico </th>
                    <th>Nombre Academico </th>
                    <th>Correo </th>
                </tr>
            </thead>
        

        <tbody>
           <tr>  @foreach ($academicos->comisions as $comision)
                   {{$comisions->pivot->comision_id}}

                <td>
                
                    <form method="POST" action="/AsignarComision/{{$comision->id}}" style="display:inline">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                    <button class="btn btn-link" type="submit" onclick="return confirm('Esta Seguro de Borrar?');" ><i class="fas fa-trash-alt" style="font-size: 24px;color:red" ></i>  </button>
                    </form>
                </td>
                       
            </tr>

            @endforeach
            </tbody>
        </table>

        <div class="card-body">
            <labe> </label>
        </div>
          </div>
          

     </div>




</form>

</div>
@endsection