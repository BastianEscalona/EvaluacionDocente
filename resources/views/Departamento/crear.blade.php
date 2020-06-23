<form method="POST" action="/Departamento">
    {{ csrf_field() }}
    <label for="nombre">Nombre Departamento</label><br>
    <input type="text" id="nombre" name="nombre" placeholder="Pedro Gonzales" required ><br>

    <select name="facultad_id" id="facultad_id" size="2">
        @foreach ($facultads as $facultad)
            <option value={{$facultad->id}}>{{$facultad->Nombre}}</option>
        @endforeach 
    </select><br><br>


    <input type="submit" value="Submit">
</form>