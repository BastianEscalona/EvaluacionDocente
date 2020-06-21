<script src="https://kit.fontawesome.com/eccfd43738.js" crossorigin="anonymous"></script>

@extends('layouts.app')

@section('content')

<div class="container">

<form action="{{ url('/Facultad')}}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}

<label for="Nombre"> {{'Nombre'}}</label>
<input type="text" name="Nombre" id="Nombre" value="">
<br/>
<br/>
<input type="submit" value= "Agregar">


<a href ="{{url('Facultad')}}" class="dashicons dashicons-undo"> Regresar </a>


</form>

</div>
@endsection