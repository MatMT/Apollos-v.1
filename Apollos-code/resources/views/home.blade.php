<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/favicon.png" type="image/x-icon">
    @vite('resources/css/app.css')
    <link rel="shortcut icon" href="./assets/favicon.png" type="image/x-icon">
    <title>Inicia sesión | Apollo's</title>
</head>

<body>
    <div class="body">
        <div class="content">
            <div class="aside">
                <div class="aside-content">
                    <div class="logo-phrase">
                        <div class="logo"><span><img src="{{ asset('assets/apolloLogoComplete.png') }}"></span>
                            <p>¡Bienvenido!</p>

                            {{-- Verificamos que existe la autentificación --}}
                            @if (session('status'))
                                <p>{{ session('status') }}</p>
                                <p>{{ Auth::user()->name }}</p>
                            @endif


                            {{-- Accedemos a la parte creada como plantilla --}}
                            @include('partials.navigation')

                        </div>
                    </div>
                </div>
            </div>

        </div>


    </div>
</body>

</html>
