<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="shortcut icon" href="./assets/favicon.png" type="image/x-icon">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="{{ asset('js/sessionScript.js') }}"></script>
    <title>Inicia sesión | Apollo's</title>
</head>

<body>
    <div class="body">
        <div class="content">
            <div class="login">
                <div class="form-work">
                    <div class="tabs">
                        <h3 class="login-tab"><a href="#login-tab" class="active"><span>Ingresar</span></a></h3>
                        <h3 class="signup-tab"><a href="#signup-tab"><span>Registrarse</span></a></h3>
                    </div>
                    <div class="forms">
                        <div class="active" id="login-tab">
                            {{-- Formulario de inicio --}}
                            <form class="login-form" method="POST">
                                @csrf
                                <label>
                                    <input type="email" name="email" id="login-email" class="form-input"
                                        autocomplete="off" placeholder="Correo electrónico">
                                </label>
                                <label>
                                    <input type="password" name="password" id="login-PW" class="form-input"
                                        autocomplete="off" placeholder="Contraseña">
                                </label>
                                <div class="button-center">
                                    <input type="submit" class="submit" value="Iniciar sesión">
                                </div>
                            </form>
                        </div>

                        <div id="signup-tab">
                            {{-- Formulario de registro --}}
                            <form action="" method="post" class="signup-form">
                                @csrf
                                <input type="email" id="signup-email" class="form-input" autocomplete="off"
                                    placeholder="Correo electrónico">
                                <input type="password" id="signup-PW" class="form-input" autocomplete="off"
                                    placeholder="Contraseña">
                                <input type="password" id="repeat-PW" class="form-input" autocomplete="off"
                                    placeholder="Repetir contraseña">

                                <div class="button-center">
                                    <input type="submit" class="submit" value="Registrarse">
                                </div>
                            </form>
                        </div>
                    </div>
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
            </div>
        </div>

    </div>
</body>

</html>
