<script src="https://kit.fontawesome.com/eccfd43738.js" crossorigin="anonymous"></script>
@extends('layouts.app')

@section('content')

<div class="container">
<form method="post" action="{{url('/Academico/'.$academicos->id)}}" enctype = "multipart/form-data">
{{ csrf_field()}}
{{ method_field('PATCH')}}

<div class="container">
<a  class="btn btn-link" href ="{{url('Departamento')}}" > <i class="fas fa-home" style="font-size: 48px;" > </i>  </a>
  <div class="container formulario">
        <div class="card">
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered">
                <thead>
                </thead>
              <tr>
                <th style=" width: 200px;">
                  <div class="form-group">

                    <label for="rut" class="control-label" > Rut Academico </label>
                    <input type="text" class="form-control" name="rut" id="rut" required placeholder="19176953-8"> 
                  </div>
                   <div class="form-group">

                    <label for="nombre" class="control-label" > Nombre </label>
                    <input type="text" class="form-control" name="nombre" id="nombre" required placeholder="Juanito"> 
                  </div>
                  <div class="form-group">

                    <label for="apellido" class="control-label" > Apellido </label>
                    <input type="text" class="form-control" name="apellido" id="apellido" required placeholder="Perez"> 
                  </div>

                  <div class="form-group">
                    <label for="email" class="control-label" > Email </label>
                    <input type="email" class="form-control" name="email" id="email" required placeholder="ucm@ucm.cl"> 
                  </div>

                  <div class="form-group">
                    <label for="titulo" class="control-label" > Titulo </label>
                    <input type="text" class="form-control" name="titulo" id="titulo" required placeholder="Profesor de Matematicas y Computacion"> 
                  </div>

                  <div class="form-group">
                    <label for="gradoAcademico" class="control-label" > Grado Academico </label>
                    <input type="text" class="form-control" name="gradoAcademico" id="gradoAcademico" required placeholder="Doctor"> 
                  </div>

                  <div class="form-group">
                    <label for="categoria" class="control-label" > Categoria </label>
                    <input type="text" class="form-control" name="categoria" id="categoria" required placeholder="Titular"> 
                  </div>

                  <div class="form-group">
                    <label for="HorasContrato" class="control-label" > Horas de Contrato </label>
                    <input type="number" class="form-control" name="HorasContrato" id="HorasContrato" required placeholder="40"> 
                  </div>

                  <div class="form-group">
                    <label for="exampleFormControlSelect1">Estado</label>
                        <select class="form-control" id="estado" name="estado" >
                            <option value = '1' >Activo</option>
                            <option value = '0' > Inactivo </option>
                        </select> 
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlSelect1">Departamento</label>
                    <select class="form-control" id="departamento_id" name="departamento_id">
                        @foreach ($departamentos as $departamento)
                        <option value={{$departamento->id}}>{{$departamento->nombre}}</option>
                        @endforeach 
                    </select>
                </div>
                </th>
                </tr>                         
              </table>
            </div>
          </div>
          <button style: "display:inline" class="btn btn-link" type="submit" ><i class="far fa-check-circle" style="font-size: 48px;color:blue" ></i>  </button>

     </div>

</form>
</div>

@endsection