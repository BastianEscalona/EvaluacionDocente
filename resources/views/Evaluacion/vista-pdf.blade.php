<script src="https://kit.fontawesome.com/eccfd43738.js" crossorigin="anonymous"></script>

@extends('layouts.app')

@section('content')

<div class="container">
  <a class="btn btn-link" href="{{url('Evaluacion')}}">
    <i class="fas fa-home" style="font-size: 48px;"></i>
  </a>
    {{csrf_field()}}
    <div class="Identificacion">
      <h4>IDENTIFICACION</h4>
      <table class="table table-striped table-bordered">
       
        <tr>
          <td>
            {{$evaluacion->nombre}}
          </td>
          <td> 
            @foreach ($departamentos as $departamento)
              @if ($academico->departamento_id == $departamento->id)
                {{$departamento->nombre}}
              @endif
            @endforeach
          </td>
        </tr>
        <tr>
          <td>Academico</td>
          <td>Departamento</td>
        </tr>

        <tr>
          <td>
            @foreach ($facultades as $facultad)
              @if ($departamento->facultad_id == $facultad->id)
                {{$facultad->Nombre}}
              @endif
            @endforeach
          </td>
          <td>          
          </td>
        </tr>
        <tr>
          <td>Facultad</td>
          <td>Periodo Evaluacion</td>
        </tr>

        <tr>
          <td>
            {{$evaluacion->titulo}}

          </td>
          <td>
            {{$evaluacion->HorasContrato}}

          </td>
        </tr>
        <tr>
          <td>Titulo Profesional</td>
          <td>Horas de Contrato</td>
        </tr>

        <tr>
          <td>
            {{$evaluacion->categoria}}
            
          </td>

          <td>
            {{$evaluacion->gradoAcademico}}

          </td>
        </tr>
        <tr>
          <td>Categoria</td>
          <td>Grado Academico</td>
        </tr>

        <tr>
          <td>
          </td>

          <td>
            {{$evaluacion->tipoplanta}}
          </td>
        </tr>
        <tr>
          <td>Nota Periodo Anterior</td>
          <td>Tipo de Planta</td>
        </tr>
        
        </tr>
      </table>
    </div>

    <div class="Calificacion">
      <h4>CALIFICACION ACADEMICA</h4>

      <table class="table table-striped table-bordered">
      
      <tr>
        <td></td>
        <td>% de tiempo asignado a tareas programadas</td>
        <td>Calificacion</td>
        <td></td>
        <td>Pond T*C/100</td>
      </tr>

      <tr>
        <td>Actividades de Docencia</td>
        <td> {{$evaluacion->t1}} <input type="hidden" name="t1" id="t1" max=100 onchange="pon(1); notaFinal();"> </td>
        <td> {{$evaluacion->nota1}} <input type="hidden" name="nota1" id="nota1" max=5 step=0.1 onchange="pon(1); notaFinal();"> </td>
        <td></td>
        <td> <input type="number" id="resu1" disabled value="0" > </td>
      </tr>

      <tr>
        <td>Actividades de Docencia</td>
        <td> {{$evaluacion->t2}} <input type="hidden" name="t2" id="t2" max=100 onchange="pon(2); notaFinal();"> </td>
        <td> {{$evaluacion->nota2}} <input type="hidden" name="nota2" id="nota2" max=5 step=0.1 onchange="pon(2); notaFinal();"> </td>
        <td></td>
        <td><input type="number" id="resu2" disabled value="0"> </td>
      </tr>

      <tr>
        <td>Extencion Y Vinculacion</td>
        <td> {{$evaluacion->t3}} <input type="hidden" name="t3" id="t3" max=100 onchange="pon(3); notaFinal();"> </td>
        <td> {{$evaluacion->nota3}} <input type="hidden" name="nota3" id="nota3" max=5 step=0.1 onchange="pon(3); notaFinal();"> </td>
        <td></td>
        <td><input type="number" id="resu3" disabled value="0"> </td>
      </tr>

      <tr>
        <td>Administracion Academica</td>
        <td> {{$evaluacion->t4}} <input type="hidden" name="t4" id="t4" max=100 onchange="pon(4); notaFinal();";> </td>
        <td> {{$evaluacion->nota4}} <input type="hidden" name="nota4" id="nota4" max=5 step=0.1 onchange="pon(4); notaFinal();"> </td>
        <td></td>
        <td><input type="number" id="resu4" disabled value="0"> </td>
      </tr>

      <tr>
        <td>Otras Actividades Realizadas</td>
        <td> {{$evaluacion->t5}} <input type="hidden" name="t5" id="t5" max=100 onchange="pon(5); notaFinal();";> </td>
        <td> {{$evaluacion->nota5}} <input type="hidden" name="nota5" id="nota5" max=5 step=0.1 onchange="pon(5); notaFinal();"> </td>
        <td></td>
        <td><input type="number" id="resu5" disabled value="0"> </td>
      </tr>

      <tr>
        <td colspan="3">Calificacion Final</td>
        <td><label for="" id="escalafinal"></label></td>
        <td> <input type="text" name="notafinal"  id="notafinal" ></td>
      </tr>
      
      </table>
    
    </div>

    <div>
      <h4>Escala Evaluativa</h4>
      <label>Escala: Exelente = 4.5 a 5     Muy Bueno = 4.0 a 4.4       Bueno= 3.5 a 3.9</label>
      <label>        Regular = 3.4 a 2.7       Deficiente = menos de 2.7</label>
    </div>

    <div>
      <h4>ARGUMENTO DE LA CALIFICACION FINAL</h4>
      <textarea id="argumento" name="argumento" rows="4" cols="50">
      </textarea>
    </div>

  
</div>


<script>

function pon(pos){
  switch (pos) {
    case 1:
      Strin_tiem = 't1';
      Strin_nota = 'nota1';
      Strin_resul = 'resu1';
      break;
    case 2:
      Strin_tiem = 't2';
      Strin_nota = 'nota2';
      Strin_resul = 'resu2';
      break;
    case 3:
      Strin_tiem = 't3';
      Strin_nota = 'nota3';
      Strin_resul = 'resu3';
      break;
    case 4:
      Strin_tiem = 't4';
      Strin_nota = 'nota4';
      Strin_resul = 'resu4';
      break;
    case 5:
      Strin_tiem = 't5';
      Strin_nota = 'nota5';
      Strin_resul = 'resu5';
      break;
  
    default:
      console.log("error");
      break;
  }
  var t = document.getElementById(Strin_tiem).value;
  var nota = document.getElementById(Strin_nota).value;


  var resul = t*nota;
  resul /= 100;
  resul = resul.toFixed(2);


  document.getElementById(Strin_resul).value = resul;
};

function notaFinal(){
  var pon1 = parseFloat(document.getElementById('resu1').value);
  var pon2 = parseFloat(document.getElementById('resu2').value);
  var pon3 = parseFloat(document.getElementById('resu3').value);
  var pon4 = parseFloat(document.getElementById('resu4').value);
  var pon5 = parseFloat(document.getElementById('resu5').value);

  var notafinal = pon1 + pon2 + pon3 + pon4 + pon5;
  notafinal = notafinal.toFixed(2);
  document.getElementById('notafinal').value = notafinal;

  
  //document.querySelector('#escalafinal').innerText = valorEscala(notafinal);
};


</script>

<script>
  function valorEscala(valor){
  var escala = "";
  console.log(valor);
  if (valor < 2.7){
    escala = "DEFICIENTE";
  }else if (valor < 3.4){
    escala = "REGULAR";
  }else if (valor < 3.9){
    escala = "BUENO";
  }else if (valor < 4.4){
    escala = "MUY BUENO";
  }else{ 
    escala = "EXCELENTE";
  }
  
  return escala;
  console.log(escala);

};
</script>
@endsection