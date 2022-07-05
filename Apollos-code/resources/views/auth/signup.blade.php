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
    <style>
        /* Hacer invisible el elemento */
        /* .vHidden {
            visibility: hidden;
        } */
    </style>
</head>

<body>
    <!-- Generar o remover el input para el nombre del artista -->
    <script>
        function viewFunction() {
            var nameArtistInput = document.querySelector('#inputArtist');
            nameArtistInput.classList.toggle('vHidden');
        }
    </script>

    {{-- Delimitación de fecha de nacimiento --}}
    @php
        $actualDate = date('Y-m-d');
        $lastDate = strtotime('-13 year', strtotime($actualDate));
        $lastDate = date('Y-m-d', $lastDate);
    @endphp

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
                        <form action="{{ route('signup.store') }}" method="post" class="signup-form"
                            name="registroForm">
                            @csrf
                            <label>
                                <input type="text" name="name" id="signup-name" value="{{ old('name') }}"
                                    class="form-input" placeholder="Nombre">
                            </label>
                            @error('name')
                                <p>{{ $message }}</p>
                            @enderror
                            <label>
                                <input type="text" name="lastname" id="signup-lastname"
                                    value="{{ old('lastname') }}" class="form-input" placeholder="Apellido">
                            </label>
                            @error('lastname')
                                <p>{{ $message }}</p>
                            @enderror
                            <label>
                                <input type="email" name="email" id="signup-email" value="{{ old('email') }}"
                                    class="form-input" placeholder="Correo electrónico">
                            </label>
                            @error('email')
                                <p>{{ $message }}</p>
                            @enderror
                            <label>
                                <input type="password" name="password" id="signup-PW" class="form-input"
                                    placeholder="Contraseña">
                            </label>
                            @error('password')
                                <p>{{ $message }}</p>
                            @enderror
                            <label>
                                <input type="radio" name="gender" value="male"> Masculino
                                <input type="radio" name="gender" value="female"> Femenino
                            </label>
                            <label>
                                Fecha de nacimiento
                                <input type="date" name="nacimiento" id="date" max="{{ $lastDate }}"
                                    value="{{ old('nacimiento') }}" class="form-input">
                            </label>
                            <label>
                                <input type="checkbox" name="artista" value="Artist" onclick="viewFunction()">
                                Artista
                            </label>
                            <!-- Agregado para el nombre artistico -->
                            <div id="inputArtist" class="vHidden">
                                <label>
                                    <input type="text" name="name_artist" value="{{ old('name_artist') }}"
                                        class="form-input" placeholder="Nombre Artistico">
                                </label>
                            </div>
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
