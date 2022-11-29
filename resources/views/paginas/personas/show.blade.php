<x-base>

    <x-slot:titulo>Ver Persona</x-slot:titulo>

    <p>Nombre: {{$persona->nombre }}</p>

    <form action='{{route('personas.update', $persona)}}' method='post'>
        @method('put')
    </form>

    <form action='{{route('personas.edit', $persona)}}' method='post'>
        @method('get')
        <input type='submit' value='Editar Categoria'>
    </form>

    <form action='{{route('personas.destroy', $persona)}}' method='post'>
        @method('delete')
        <input type='submit'value='Eliminar Persona'>
    </form>

</x-base>


