<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        @vite('resources/css/navbar.css')
        @vite('resources/css/cuerpo.css')
        @vite('resources/css/footer.css')
        <link rel="shortcut icon" href="{{asset('logos-iconos/NeoNica-favico.png')}}">
        <title>NeoNica360°</title>
    </head>
    <body class="antialiased">

        <header>
            @yield('navbar')
        </header>
        
        <main>
            @yield('cuerpo')
        </main>

        <footer>
            @yield('footer')
        </footer>

        @vite('resources/js/jquery-3.6.0.min.js')
        @vite('resources/js/app.js')
        @vite('resources/js/navbar.js')
        @vite('resources/js/cuerpo.js')
    </body>
</html>
