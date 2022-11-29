<html>
    <head>
        <title>{{ $titulo ?? 'Agenda' }}</title>
    </head>
    <body>
        <h1>{{ $titulo ?? 'Agenda' }}</h1>
        <hr/>
        <!--
        Contenido que hay en categorias_ ...
        -->
        {{ $slot }}
        <br>
        <x-menu/>
    </body>
</html>
