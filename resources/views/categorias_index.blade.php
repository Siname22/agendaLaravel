<x-base>
    <x-slot:titulo>Listado de categorias</x-slot:titulo>
    <table border='1'>
        <tr>
            <th>Nombre</th>
            <th>Eliminar</th>
        </tr>
        @foreach ($categorias as $categoria)
            <tr>
                <td>{{$categoria->nombre }}</td>

                <td>
                    <form action='{{route('categorias.destroy', $categoria)}}' method='post'>
                        @method('delete')
                        <input type='submit'value='Eliminar'>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</x-base>


