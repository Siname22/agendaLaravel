<x-base>

    <x-slot:titulo>Nueva Categoria</x-slot:titulo>

    <form action='{{route('categorias.store')}}' method='post'>
        @method('post')
        <label for='nombre'>Nombre</label>
        <input id='nombre' name='nombre' type='text' value=''/>
        <br><br>

        <button type='submit'>Crear</button>
    </form>

</x-base>




