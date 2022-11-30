@if($value == 'values')
    <p>
        <label for='nombre'>Nombre</label>
        <input id='nombre' name='nombre' type='text' value=''/>
    </p>
    <p>
        <label for='apellidos'>Apellidos</label>
        <input id='apellidos' name='apellidos' type='text' value=''/>
    </p>
    <p>
        <label for='telefono'>Telefono</label>
        <input id='telefono' name='telefono' type='text' value=''/>
    </p>
    <p>
        <label for='estrella'>Estrella</label>
        <select name='estrella'>
            <option value='0'>★</option>
            <option value='1'>☆</option>
        </select>
    </p>

    <p>
        <label for='categoria_id'>Categoria</label>
        <select id='categoria_id' name='categoria_id'>
            <option value='1' selected disabled>Selecciona..</option>
            @foreach($categorias as $categoria)
                <option value='{{$categoria->id}}'>
                    {{$categoria->nombre}}
                </option>
            @endforeach
        </select>
    </p>
    @else
    <p>Error al llamar</p>
@endif
