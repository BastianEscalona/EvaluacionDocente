@extends('layouts.app')

@section('content')

<div class="container">

<form method="post" action="{{url('/Facultad/'.$Facultad->id)}}" enctype = "multipart/form-data">
{{ csrf_field()}}
{{ method_field('PATCH')}}


    <label for="Nombre"> {{'Nombre'}}</label>
    <input type="text" name="Nombre" id="Nombre" value="{{$Facultad->Nombre}}">
    <br/>
    <br/>

    <input type="submit" value = 'Modificar'>
    <a href ="{{url('Facultad')}}"> Regresar </a>

</form>

</div>
@endsection