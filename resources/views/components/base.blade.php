<html>
<head>
    <title>{{ $titulo ?? 'Agenda' }}</title>
</head>
<body>
    <x-menu/>
    <h1>{{ $titulo ?? 'Agenda' }}</h1>
    <hr/>
    {{ $slot }}
</body>
</html>
