<x-base>

    <x-slot:titulo>Listado de personas</x-slot:titulo>

    <table border='1'>
        <tr>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Tlf</th>
            <th>Estrella</th>
            <th>Categoria_ID</th>
            <th>Eliminar</th>
        </tr>

        @foreach ($personas as $persona)
            <tr>
                <td>
                    <a href='{{ route('personas.show', $persona )}}'>{{ $persona->nombre }}</a>
                </td>

                <td>
                    <a href='{{ route('personas.show', $persona) }}'>{{ $persona->apellidos }}</a>
                </td>

                <td>
                    <a href='{{ route('personas.show', $persona) }}'>{{ $persona->telefono }}</a>
                </td>

                <td>
                    <a href='{{ route('personas.show', [$persona,1-$persona->estrella]) }}'>
                            <img src='{{($persona->estrella == 1 ? "/img/estrella_llena.png" : "/img/estrella_vacia.png")}}' style='width: 25px'>
                    </a>

                </td>

                <td>
                    @foreach($categorias as $categoria)
                        @if($persona->categoria_id == $categoria->id)
                            <a href='{{ route('personas.show', $persona) }}'>
                                {{$categoria->nombre}}
                            </a>
                        @endif
                    @endforeach
                </td>

                <td>
                    <form action='{{ route('personas.destroy', $persona) }}' method='post'>
                        @method('delete')
                        <input type='submit'value='Eliminar'>
                    </form>
                </td>
            </tr>
        @endforeach

    </table>

</x-base>


