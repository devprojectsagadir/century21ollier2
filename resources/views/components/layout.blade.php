<html>
    <head>
        <title>{{ $title ?? 'Century 21 ollier - Maroc' }}</title>
        @Vite('resources/js/app.js')
        @vite('resources/css/app.css')
    </head>
    <body class="">
       {{ $slot }}
    </body>
</html>
