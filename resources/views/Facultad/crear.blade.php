<script src="https://kit.fontawesome.com/eccfd43738.js" crossorigin="anonymous"></script>

@extends('layouts.app')

@section('content')

<div class="container">
          <a  class="btn btn-link" href ="{{url('Facultad')}}" > <i class="fas fa-home" style="font-size: 48px;" > </i>  </a>

<form action="{{ url('/Facultad')}}" class="form-horizontal" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
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
                    <label for="Nombre" class="control-label" > {{'Nombre de la Facultad'}}</label>
                    <input type="text" class="form-control" name="Nombre" id="Nombre" value="" required>  
                  </div>
                    <div class="form-group">
                    <label for="NombreDecano" class="control-label" > {{'Nombre del Decano'}}</label>
                    <input type="text" class="form-control" name="NombreDecano" id="NombreDecano" value="" required>  
                  </div>
                </th>
                </tr>
                                                
              </table>
            </div>
          </div>
          <button style: "display:inline" class="btn btn-link" type="submit" ><i class="far fa-check-circle" style="font-size: 48px;color:green" ></i>  </button>

     </div>




</form>

</div>
@endsection
