<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="shortcut icon" href="./assets/favicon.png" type="image/x-icon">
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> --}}
    {{-- <script src="{{ asset('js/sessionScript.js') }}"></script> --}}
    <title>Inicia sesión | Apollo's</title>
</head>

<body>
    <div class="body">
        <div class="content">
            <div class="login">
                <div class="form-work">
                    <div class="tabs">
                        <h3 class="login-tab"><a href="{{ route('login') }}" class="active"><span>Ingresar</span></a>
                        </h3>
                        <h3 class="signup-tab"><a href="{{ route('signup') }}"><span>Registrarse</span></a></h3>
                    </div>
                    <div class="forms">
                        {{-- Formulario de registro --}}
                        <div class="active" id="signup-tab">
                            <!-- Establecemos la ruta del controlador por medio de su action con el metodo route -->
                            <form action="{{ route('registro.store') }}" method="post" class="signup-form">
                                @csrf
                                <label>
                                    <input type="text" name="name" id="signup-name" class="form-input"
                                        autocomplete="off" placeholder="Nombre">
                                </label>
                                <label>
                                    <input type="text" name="lastname" id="signup-lastname" class="form-input"
                                        autocomplete="off" placeholder="Apellido">
                                </label>
                                <label>
                                    <input type="email" name="email" id="signup-email" class="form-input"
                                        autocomplete="off" placeholder="Correo electrónico">
                                </label>
                                <label>
                                    <input type="password" name="password" id="signup-PW" class="form-input"
                                        autocomplete="off" placeholder="Contraseña">
                                </label>
                                <label>
                                    <input type="radio" name="gender" value="male"> Masculino
                                    <input type="radio" name="gender" value="female"> Femenino
                                </label>
                                <label>
                                    <input type="date" name="nacimiento" id="date" class="form-input">
                                </label>
                                <label>
                                    <input type="checkbox" name="artista" value="Artist"> Artista
                                </label>
                                <div class="button-center">
                                    <input type="submit" class="submit" value="Registrarse">
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
