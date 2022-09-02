<!doctype html>
<html class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 sm: bg-blue">
    <link rel="icon" type="image/png" href="{{ Vite::asset('resources/img/icon.png') }}">
    <title>Nazateen Conference 2022</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div id="site-container">
        @yield('content')
    </div>

    @yield('js')
</body>

</html>
