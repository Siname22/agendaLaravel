<x-base>

    <x-slot:titulo>Nueva Persona</x-slot:titulo>

    <form action='{{route('personas.store')}}' method='post'>
        @method('post')
        <x-personas_create value='values' :categorias='$categorias'/>
        <button type='submit'>Crear</button>
    </form>

</x-base>




