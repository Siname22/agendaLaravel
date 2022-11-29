<x-base>

    <x-slot:titulo>Editar Persona:</x-slot:titulo>

    <form action='{{route('personas.update', $persona) }}' method='post'>
        @method('put')

        <label for='nombre'>Nombre</label>
        <input id='nombre' name='nombre' type='text' value='{{$persona->nombre}}'/>
        <br><br>
        <label for='apellidos'>Apellidos</label>
        <input id='apellidos' name='apellidos' type='text' value='{{$persona->apellidos}}'/>
        <br><br>
        <label for='telefono'>Telefono</label>
        <input id='telefono' name='telefono' type='text' value='{{$persona->telefono}}'/>
        <br><br>
        <label for='estrella'>Estrella</label>
        <input id='estrella' name='estrella' type='checkbox' value='{{$persona->estrella}}'/>
        <br><br>
        <label for='categoria_id'>Categoria Id</label>
        <input id='categoria_id' name='categoria_id' type='text' value='{{$persona->categoria_id}}'/>
        <br><br>
        <button type='submit'>Actualizar</button>
    </form>

    <form action='{{route('personas.destroy', $persona)}}' method='post'>
        @method('delete')
        <input type='submit'value='Eliminar'>
    </form>

</x-base>


