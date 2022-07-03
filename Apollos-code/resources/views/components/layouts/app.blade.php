<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
</head>

<body>

    <header class="m-10 bg-red-400 p-10 rounded-xl shadow-lg">

        @yield('page')

        <h1 class="my-5">¡YA PUDE HACERLO!</h1>

        @include('partials.navegation')

    </header>

</body>

</html>
