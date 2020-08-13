<script src="https://kit.fontawesome.com/eccfd43738.js" crossorigin="anonymous"></script>

@extends('layouts.app2')

@section('content')
<body style="background-color: #f0f8ff;">

<div class="container">
          <a  class="btn btn-link" href ="{{url('Departamento')}}" > <i class="fas fa-home" style="font-size: 48px;" > </i>  </a>

<form action="{{ url('/Departamento')}}" class="form-horizontal" method="POST" enctype="multipart/form-data">
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

                    <label for="nombre" class="control-label" > Nombre Departamento </label>
                    <input type="text" class="form-control" name="nombre" id="nombre" required placeholder="Departamento de Informatica"> 
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlSelect1">Facultades</label>
                    <select class="form-control" id="facultad_id" name="facultad_id">
                        @foreach ($facultads as $facultad)
                        <option value={{$facultad->id}}>{{$facultad->Nombre}}</option>
                        @endforeach 
                    </select>
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
</body>
@endsection
