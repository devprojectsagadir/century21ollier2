<html>
    <head>
        <title>{{ $title ?? 'Century 21 ollier - Auth' }}</title>
        @Vite('resources/js/app.js')
    </head>
    <body>
        layout test
       {{ $slot }}
    </body>
</html>
