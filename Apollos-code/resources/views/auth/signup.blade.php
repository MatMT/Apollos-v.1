<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/favicon.png" type="image/x-icon">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('css/session.css') }}">
    <title>Regístrate | Apollo's</title>
    <script>
        function uncheckRadio(rbutton) {
            rbutton.checked = (rbutton.checked) ? false : true;
        }
    </script>
</head>

<body class="text-base text-white">
    {{-- Delimitación de fecha de nacimiento --}}
    @php
        $actualDate = date('Y-m-d');
        $lastDate = strtotime('-13 year', strtotime($actualDate));
        $lastDate = date('Y-m-d', $lastDate);
    @endphp

    <div class="body h-full w-full min-h-screen">

        <div class="content min-h-screen max-w-screen">
            <div class="signup-container min-h-screen w-full">

                <div class="center-form flex items-center justify-center min-h-screen">

                    <div class="form-work my-10 p-6 rounded-md">
                        <div class="logo flex justify-center items-center">
                            <img src="{{ asset('assets/apolloLogoCompleteWht.svg') }}" class=" block text-center">
                        </div> {{-- logo --}}

                        <h1 class="mt-4 font-titulo text-lg font-semibold">¡Regístrate y disfruta de tu música favorita!
                        </h1>

                        <div class="session-form-container flex justify-center">
                            <form action="{{ route('signup.store') }}" method="post" class="session-form"
                                name="registroForm" id="registroForm">
                                @csrf

                                @if ($errors->any())
                                    <div class="errors text-red-600 px-3 py-2 rounded mb-3">
                                        <ul>
                                            <span class="inline"><img src="{{ asset('assets/icons/errorIcon.png') }}"
                                                    class="h-4 inline m-2"><strong class="font-bold">¡Oops! Algo salió
                                                    mal</strong></span>
                                            @foreach ($errors->all() as $error)
                                                <li class="list-disc pl-7 list-inside">
                                                    {{ $error }}
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <div class="input-container">
                                    <span class="icon"><img src="{{ asset('assets/icons/userIconWht.png') }}"></span>
                                    <input type="text" name="nombre" id="signup-name" value="{{ old('nombre') }}"
                                        class="form-input" placeholder="Nombre" autocomplete="off">
                                    <input type="text" name="apellido" id="signup-apellido"
                                        value="{{ old('apellido') }}" class="form-input" placeholder="Apellido"
                                        autocomplete="off">
                                </div> {{-- input-container --}}

                                <div class="input-container">
                                    <span class="icon"><img src="{{ asset('assets/icons/mailIconWht.png') }}"></span>
                                    <input type="email" name="email" id="signup-email" value="{{ old('email') }}"
                                        class="form-input" placeholder="Correo electrónico" autocomplete="off">
                                </div> {{-- input-container --}}

                                <div class="input-container">
                                    <span class="icon"><img src="{{ asset('assets/icons/lockIconWht.png') }}"></span>
                                    <input type="password" name="password" id="signup-PW" class="form-input"
                                        placeholder="Contraseña" autocomplete="off">
                                </div> {{-- input-container --}}

                                <div class="input-container">
                                    <span class="icon"><img
                                            src="{{ asset('assets/icons/calendarIconWht.png') }}"></span>
                                    <input type="text" name="nacimiento" id="date" max="{{ $lastDate }}"
                                        min="1920-01-01" value="{{ old('nacimiento') }}" class="form-input"
                                        placeholder="Fecha de nacimiento" onfocus="(this.type = 'date')">
                                </div> {{-- input-container --}}

                                <div class="input-container">
                                    <span class="icon"><img
                                            src="{{ asset('assets/icons/musicIconWht.png') }}"></span>
                                    <input type="text" name="usuario" value="{{ old('usuario') }}"
                                        class="form-input" placeholder="Nombre de usuario" autocomplete="off">
                                </div> {{-- input-container --}}

                                <div class="input-container">
                                    <span class="icon"><img src="{{ asset('assets/icons/starIconWht.png') }}"></span>
                                    <select name="user_type" id="user-type" form="registroForm"
                                        class="form-input text-gray-600">
                                        <option value="" selected disabled> Selecciona el tipo de cuenta </option>
                                        <option value="user" {{ old('user_type') == 'user' ? 'selected' : '' }}>
                                            Usuario</option>
                                        <option value="artist" {{ old('user_type') == 'artist' ? 'selected' : '' }}>
                                            Artista</option>
                                    </select>
                                </div> {{-- input-container --}}

                                <div class="gender-container">
                                    <label class="block font-titulo font-bold text-base">Género</label>

                                    <div class="gender-style flex items-center justify-center border-r-0">

                                        <div class="rad-cont">
                                            <input type="radio" name="gender" value="male" class='radio'
                                                id="M" />
                                            {{-- @if (old('gender')) checked @endif --}}
                                            <label class="gender-input rounded-l-md" for="M">
                                                <span><img src="{{ asset('assets/icons/mIcon.png') }}"></span>
                                            </label>
                                        </div> {{-- rad-cont --}}

                                        <div class="rad-cont">
                                            <input type="radio" name="gender" value="female" class='radio'
                                                id='F' />

                                            <label class="gender-input rounded-r-md" for="F">
                                                <span><img src="{{ asset('assets/icons/wIcon.png') }}"></span>
                                            </label>
                                        </div> {{-- rad-cont --}}
                                    </div> {{-- gender-style --}}
                                </div> {{-- gender-container --}}

                                <div class="button-center flex items-center justify-center">
                                    <input type="submit" class="submit font-titulo" value="Registrarse">
                                </div> {{-- button-center --}}

                                <h2 class="block text-center mt-5 text-gray-900">¿Ya tienes una cuenta?<a
                                        href="{{ route('login') }}" class="block"> <span
                                            class="font-bold hover:text-slate-50 transition all">Inicia
                                            sesión</span></a></h2>

                            </form>
                        </div> {{-- session-form-container --}}
                    </div> {{-- form-work --}}

                </div> {{-- center-form --}}
            </div> {{-- signup-container --}}
        </div> {{-- content --}}
    </div> {{-- body --}}

</body>

</html>
