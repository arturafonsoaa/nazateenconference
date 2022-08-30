<!doctype html>
<html class='sm:min-w-full'>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 sm: bg-blue">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    @yield('content')

    @yield('js')
</body>

</html>
