<x-base>

    <x-slot:titulo>Nueva Persona</x-slot:titulo>

    <form action='{{route('personas.store')}}' method='post'>
        @method('post')
        <label for='nombre'>Nombre</label>
        <input id='nombre' name='nombre' type='text' value=''/>
        <label for='apellidos'>Apellidos</label>
        <input id='apellidos' name='apellidos' type='text' value=''/>
        <label for='telefono'>Telefono</label>
        <input id='telefono' name='telefono' type='text' value=''/>
        <label for='estrella'>Estrella</label>
        <input id='estrella' name='estrella' type='text' value=''/>
        <label for='categoriaId'>Categoria Id</label>
        <input id='categoriaId' name='categoriaId' type='text' value=''/>
        <br><br>

        <button type='submit'>Crear</button>
    </form>

</x-base>




