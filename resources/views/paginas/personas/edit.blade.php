<x-base>

    <x-slot:titulo>Editar Categoria:</x-slot:titulo>

    <form action='{{route('personas.update', $persona) }}' method='post'>
        @method('put')
        <label for='nombre'>Nombre</label>
        <input id='nombre' name='nombre' type='text' value='{{$persona->nombre}}'/>
        <label for='apellidos'>Apellidos</label>
        <input id='apellidos' name='apellidos' type='text' value='{{$persona->apellidos}}'/>
        <label for='telefono'>Telefono</label>
        <input id='telefono' name='telefono' type='text' value='{{$persona->telefono}}'/>
        <label for='estrella'>Estrella</label>
        <input id='estrella' name='estrella' type='text' value='{{$persona->estrella}}'/>
        <label for='categoriaId'>Categoria Id</label>
        <input id='categoriaId' name='categoriaId' type='text' value='{{$persona->nombre}}'/>
        <br><br>
        <button type='submit'>Actualizar</button>
    </form>

    <form action='{{route('personas.destroy', $categoria)}}' method='post'>
        @method('delete')
        <input type='submit'value='Eliminar'>
    </form>

</x-base>


