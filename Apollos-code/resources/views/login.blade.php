<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/favicon.png" type="image/x-icon">
    @vite('resources/css/app.css')
    <link rel="shortcut icon" href="./assets/favicon.png" type="image/x-icon">
    {{-- Script desfasado
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="{{ asset('js/sessionScript.js') }}"></script> --}}
    <title>Inicia sesión | Apollo's</title>
</head>

<body>
    <div class="body">
        <div class="content">
            <div class="login">
                <div class="form-work">
                    <div class="tabs">
                        <h3 class="login-tab"><a href="{{ route('login') }}"><span>Ingresar</span></a></h3>
                        <!-- Link hacia el registro -->
                        <h3 class="signup-tab"><a href="{{ route('signup') }}"><span>Registrarse</span></a></h3>
                    </div>

                    <!-- Si existe algún error de validación se imprimen -->
                    {{-- @if ($errors->any())
                        <div class="errores">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>
                                        {{ $error }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif --}}

                    <div class="forms">
                        <div class="active" id="login-tab">
                            {{-- Formulario de inicio --}}
                            <form class="login-form" method="POST" action="{{ route('login.index') }}" novalidate>
                                @csrf
                                <label>
                                    {{-- En caso de fallar se restaura el antiguo valor ingresado con old --}}
                                    <input type="email" name="email" id="login-email" class="form-input" required
                                        value="{{ old('email') }}" autocomplete="off"
                                        placeholder="Correo electrónico">
                                </label>
                                @error('email')
                                    <p>{{ $message }}</p>
                                @enderror
                                <label>
                                    <input type="password" name="password" id="login-PW" class="form-input" required
                                        autocomplete="off" placeholder="Contraseña">
                                </label>
                                @error('password')
                                    <p>{{ $message }}</p>
                                @enderror
                                <label>
                                    <input type="checkbox" name="remember"> Recuerda mi sesión
                                </label>
                                <div class="button-center">
                                    <input type="submit" class="submit" value="Iniciar sesión">
                                </div>
                            </form>
                        </div>

                    </div> <!-- forms -->
                </div>
            </div>

            <div class="aside">
                <div class="aside-content">
                    <div class="logo-phrase">
                        <div class="logo"><span><img src="{{ asset('assets/apolloLogoComplete.png') }}"></span>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, voluptatem!</p>

                            @if (session('status'))
                                <p>{{ session('status') }}</p>
                            @endif

                            {{-- Accedemos a la parte creada como plantilla --}}
                            @include('partials.navigation')

                        </div>
                    </div>
                </div>
            </div> <!-- aside --->
        </div>

    </div>
</body>

</html>
