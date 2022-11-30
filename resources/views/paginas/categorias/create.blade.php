<x-base>

    <x-slot:titulo>Nueva Categoria</x-slot:titulo>

    <form action='{{route('categorias.store')}}' method='post'>
        @method('post')
        <p>
            <label for='nombre'>Nombre</label>
            <input id='nombre' name='nombre' type='text' value=''/>
        </p>
        <button type='submit'>Crear</button>
    </form>

</x-base>




