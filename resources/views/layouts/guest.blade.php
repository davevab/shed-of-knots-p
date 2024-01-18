<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Shed of Knots</title>

    @vite(['resources/css/app.css', 'resources/js/script.js', 'resources/js/app.js'])


</head>
<body class="bg-bodyBg">

@yield('content')

</body>
</html>
