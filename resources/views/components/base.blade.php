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
        <x-menu/>
    </body>
</html>
