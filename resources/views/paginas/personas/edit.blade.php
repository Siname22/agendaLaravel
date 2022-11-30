<x-base>

    <x-slot:titulo>Editar Persona:</x-slot:titulo>

    <form action='{{route('personas.update', $persona) }}' method='post'>
        @method('put')
        <x-personas_campos_edit value='values' :persona='$persona' :categorias='$categorias'/>
        <button type='submit'> Actualizar</button>
    </form>

    <form action='{{route('personas.destroy', $persona)}}' method='post'>
        @method('delete')
        <input type='submit'value='Eliminar'/>
    </form>

</x-base>


