<html>
<head>
    <title>{{ $titulo ?? 'Agenda' }}</title>
</head>
<body>
    <h1>{{ $titulo ?? 'Agenda' }}</h1>
    <hr/>
    {{ $slot }}
    <x-menu/>
</body>
</html>
