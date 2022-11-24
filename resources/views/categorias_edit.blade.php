<x-base>

    <x-slot:titulo>Editar Categoria:</x-slot:titulo>

    <form action='{{route('categorias.update', $categoria) }}' method='post'>
        @method('put')
        <label for='nombre'>Nombre</label>
        <input id='nombre' name='nombre' type='text' value='{{$categoria->nombre}}'/>
        <br><br>
        <button type='submit'>Actualizar</button>
    </form>

    <form action='{{route('categorias.destroy', $categoria)}}' method='post'>
        @method('delete')
        <input type='submit'value='Eliminar'>
    </form>

</x-base>


