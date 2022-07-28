<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/favicon.png" type="image/x-icon">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('css/session.css') }}">
    <title>Inicia sesión | Apollo's</title>
</head>

<body class="text-base text-white">
    
    <div class="body h-full w-full min-h-screen">

        <div class="content min-h-screen max-w-screen">
            <div class="signup-container min-h-screen w-full">
                <div class="center-form flex items-center justify-center min-h-screen">

                    <div class="form-work my-10 p-6 rounded-md">
                        <div class="logo flex justify-center items-center">
                            <img src="{{ asset('assets/apolloLogoCompleteWht.svg') }}" class=" block text-center">
                        </div> {{-- logo --}}

                        <h1 class="mt-4 font-titulo text-lg font-semibold text-center">¡Bienvenido de nuevo!</h1>

                        <div class="session-form-container flex justify-center">
                            <form action="{{ route('login.store') }}" method="post" class="session-form" novalidate>
                                @csrf

                                @if ($errors->any())
                                <div class="errors text-red-600 px-3 py-2 rounded mb-3">
                                    <ul>
                                        <span class="inline"><img src="{{ asset('assets/icons/errorIcon.png') }}" class="h-4 inline m-2"><strong class="font-bold">¡Oops! Algo salió mal</strong></span>
                                        @foreach ($errors->all() as $error)
                                        <li class="list-disc pl-7 list-inside">
                                            {{ $error }}
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif

                                <div class="input-container">
                                    <span class="icon"><img src="{{ asset('assets/icons/mailIconWht.png') }}"></span>
                                    <input type="email" name="email" id="login-email" class="form-input" required value="{{ old('email') }}" autocomplete="off" placeholder="Correo electrónico">
                                </div> {{-- input-container --}}

                                <div class="input-container">
                                    <span class="icon"><img src="{{ asset('assets/icons/lockIconWht.png') }}"></span>
                                    <input type="password" name="password" id="login-PW" class="form-input" required autocomplete="off" placeholder="Contraseña">
                                </div> {{-- input-container --}}

                                <div class="button-center flex items-center justify-center">
                                    <input type="submit" class="submit font-titulo" value="Iniciar sesión">
                                </div> {{-- button-center --}}

                                <h2 class="block text-center mt-5 text-gray-900">¿No tienes una cuenta?<a href="{{ route('signup') }}" class=" block"> <span class="font-bold hover:text-slate-50 transition all">Regístrate</span></a></h2>

                            </form>
                        </div> {{-- session-form-container --}}
                    </div> {{-- form-work --}}

                </div> {{-- center-form --}}
            </div> {{-- signup-container --}}
        </div> {{-- content --}}
    </div> {{-- body --}}

</body>

</html>
