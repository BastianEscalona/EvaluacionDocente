hola asdasd qweqweqwe

<table class="table table-light">
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
            
            <td>Editar | 
            
            <form method="post" action="{{url('/Facultad/'.$Facultad->id) }}">
            {{ csrf_field() }}
            {{method_field('DELETE')}}    
            <button type="submit" onclick="return confirm('Esta Seguro de Borrar?');" > Borrar </button>
            </form>

             </td>
        </tr>
    @endforeach
    </tbody>

</table>