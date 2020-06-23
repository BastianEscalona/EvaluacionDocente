@foreach ($departamentos as $departamento)
    <b>{{$departamento->nombre}}</b> <br>
    @foreach ($facultads as $facultad)
        @if ($departamento->facultad_id == $facultad->id)
            {{$facultad->Nombre}}
        @endif
    @endforeach
    <form action="/Departamento/{{$departamento->id}}/edit" method="GET">
        <button type="submit">Editar</button>
    </form>

    <form method="POST" action="/Departamento/{{$departamento->id}}">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
        <button type="submit">Eliminar</button>
    </form>

    <br>
    <br>
@endforeach

<a href="/Departamento/create">Agregar</a>