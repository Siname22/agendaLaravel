<x-base>

    <x-slot:titulo>Ver Persona</x-slot:titulo>

    <p>Nombre: {{$persona->nombre }}</p>
    <p>Apellidos: {{$persona->apellidos }}</p>
    <p>Telefono: {{$persona->telefono }}</p>
    <p>Estrella:
        @if ($persona->estrella == 1)
            <img src='/img/estrella_llena.png' style='width: 25px'>
        @else
            <img src='/img/estrella_vacia.png' style='width: 25px'>
        @endif</p>
    @foreach($categorias as $categoria)
        @if($persona->categoria_id == $categoria->id)
            <p>
                Categoria: {{$categoria->nombre}}
            </p>
        @endif
    @endforeach

    <form action='{{route('personas.update', $persona)}}' method='post'>
        @method('put')
    </form>

    <form action='{{route('personas.edit', $persona)}}' method='post'>
        @method('get')
        <input type='submit' value='Editar Persona'>
    </form>

    <form action='{{route('personas.destroy', $persona)}}' method='post'>
        @method('delete')
        <input type='submit'value='Eliminar Persona'>
    </form>

</x-base>


