<script src="https://kit.fontawesome.com/eccfd43738.js" crossorigin="anonymous"></script>

@extends('layouts.app')

@section('content')

<div class="container">

@if(Session::has('Mensaje')){{
    Session::get('Mensaje')
}}
@endif

<a class="btn btn-success" href ="{{url('Facultad/create')}}" > <i class="fas fa-user-plus" style="font-size: 24px;" ></i>   </a> 


</br>
</br>
<table class="table table-light table-hover">
    <thead class="thead-light">
        <tr>
            <th># </th>
            <th>Nombre de Facultad</th>
            <th>Acciones </th>
        </tr>
    </thead>

    <tbody>
    @foreach($Facultad as $Facultad)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$Facultad->Nombre}} </td>
            
            <td>

   
            <a class="btn btn-link" href="{{ url('/Facultad/'.$Facultad->id.'/edit') }}" > <i class="fas fa-pencil-alt" style="font-size: 24px;" > </i>  </a>      
            <form method="post" action="{{url('/Facultad/'.$Facultad->id) }}" style="display:inline">
            {{ csrf_field() }}
            {{method_field('DELETE')}}    
            <button class="btn btn-link" type="submit" onclick="return confirm('Esta Seguro de Borrar?');" ><i class="fas fa-trash-alt" style="font-size: 24px;color:red" ></i>  </button>
            </form>

             </td>
        </tr>
    @endforeach
    </tbody>

</table>
</div>
@endsection