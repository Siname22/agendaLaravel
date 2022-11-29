<x-base>

    <x-slot:titulo>Nueva Persona</x-slot:titulo>

    <form action='{{route('personas.store')}}' method='post'>
        @method('post')
        <p>
            <label for='nombre'>Nombre</label>
            <input id='nombre' name='nombre' type='text' value=''/>
        </p>
        <p>
            <label for='apellidos'>Apellidos</label>
            <input id='apellidos' name='apellidos' type='text' value=''/>
        </p>
        <p>
            <label for='telefono'>Telefono</label>
            <input id='telefono' name='telefono' type='text' value=''/>
        </p>
        <p>
            <label for='estrella'>Estrella</label>
            <input id='estrella' name='estrella' type='text' value=''/>
        </p>
        <p>
            <label for='categoria_id'>Categoria Id</label>
            <input id='categoria_id' name='categoria_id' type='text' value=''/>
        </p>



        <button type='submit'>Crear</button>
    </form>

</x-base>




