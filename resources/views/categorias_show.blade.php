<x-base>

    <x-slot:titulo>Ver Categoria</x-slot:titulo>

    <p>Nombre: {{$categoria->nombre }}</p>

    <form action='{{route('categorias.update', $categoria)}}' method='post'>
        @method('put')
    </form>

    <form action='{{route('categorias.edit', $categoria)}}' method='post'>
        @method('edit')
        <input type='submit' value='Crear Categoria'>
    </form>

    <form action='{{route('categorias.destroy', $categoria)}}' method='post'>
        @method('delete')
        <input type='submit'value='Eliminar Categoria'>
    </form>

</x-base>


