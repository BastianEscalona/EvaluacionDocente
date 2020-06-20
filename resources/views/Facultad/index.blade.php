hola asdasd qweqweqwe

<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th># </th>
            <th>Nombre de Facultad</th>
        </tr>
    </thead>

    <tbody>
    @foreach($Facultad as $Facultad)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$Facultad->Nombre}} </td>
            
            <td>Editar | Borrar </td>
        </tr>
    @endforeach
    </tbody>

</table>