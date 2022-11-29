<x-base>

    <x-slot:titulo>Editar Persona:</x-slot:titulo>

    <form action='{{route('personas.update', $persona) }}' method='post'>
        @method('put')
        <p>
            <label for='nombre'>Nombre</label>
            <input id='nombre' name='nombre' type='text' value='{{$persona->nombre}}'/>
        </p>
        <p>
            <label for='apellidos'>Apellidos</label>
            <input id='apellidos' name='apellidos' type='text' value='{{$persona->apellidos}}'/>
        </p>
        <p>
            <label for='telefono'>Telefono</label>
            <input id='telefono' name='telefono' type='text' value='{{$persona->telefono}}'/>
        </p>

        <p>
            <label for='estrella'>Estrella</label>
            <select name='estrella'>
                <optgroup label='favorito'>
                    <option value='0'> Nop </option>
                    <option value='1'> Sip </option>
                </optgroup>
            </select>
        </p>

        <p>
            <label for='categoria_id'>Categoria Id</label>
            <input id='categoria_id' name='categoria_id' type='text' value='{{$persona->categoria_id}}'/>
        </p>

        <button type='submit'> Actualizar</button>
    </form>

    <form action='{{route('personas.destroy', $persona)}}' method='post'>
        @method('delete')
        <input type='submit'value='Eliminar'/>
    </form>

</x-base>


