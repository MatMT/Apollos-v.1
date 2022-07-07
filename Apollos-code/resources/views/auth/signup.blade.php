<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('css/session.css') }}">
    <title>Regístrate | Apollo's</title>
</head>

<body class="text-base">
    {{-- Delimitación de fecha de nacimiento --}}
    @php
        $actualDate = date('Y-m-d');
        $lastDate = strtotime('-13 year', strtotime($actualDate));
        $lastDate = date('Y-m-d', $lastDate);
    @endphp

    <div class="body h-full w-full min-h-screen">
        <div class="content h-screen w-screen bg-slate-600">
            <div class="aside float-left h-screen w-5/12">
                {{-- <p>Hi</p> --}}
            </div>

            <div class="signup-container float-right min-h-screen w-7/12 bg-slate-200">
                <div class="center-form flex items-center justify-center h-screen">
                    <div class="form-work">
                        <div class="logo flex justify-center items-center">
                            <img src="{{ asset('assets/apolloLogoComplete.png') }}" class="brightness-0 block text-center">
                        </div>

                        <h1 class="mt-4 font-titulo text-lg font-semibold">¡Regístrate y disfruta de tu música favorita!</h1>

                        <div class="session-form-container flex justify-center">
                            <form action="{{ route('signup.store') }}" method="post" class="session-form" name="registroForm">
                                @csrf

                                <ul class="bg-red-100 border border-red-400 text-red-700 px-3 py-2 rounded mb-3">
                                    <span class="inline"><img src="{{ asset('assets/icons/errorIcon.png') }}" class="h-4 inline m-2"><strong class="font-bold">¡Oops! Algo salió mal</strong></span>
                                    
                                    <li class="list-disc pl-7 list-inside">Error 1</li>
                                    <li class="list-disc pl-7 list-inside">Error 2</li>
                                    <li class="list-disc pl-7 list-inside">Error 3</li>
                                </ul>

                                @if ($errors->any())
                                    <div class="errors">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>
                                                    {{ $error }}
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <div class="input-container">
                                    <span class="icon"><img src="{{ asset('assets/icons/userIconWht.png') }}"></span>
                                    <input type="text" name="name" id="signup-name" value="{{ old('name') }}" class="form-input" placeholder="Nombre" autocomplete="off">
                                    <input type="text" name="lastname" id="signup-lastname" value="{{ old('lastname') }}" class="form-input" placeholder="Apellido" autocomplete="off">
                                </div>

                                <div class="input-container">
                                    <span class="icon"><img src="{{ asset('assets/icons/mailIconWht.png') }}"></span>
                                    <input type="email" name="email" id="signup-email" value="{{ old('email') }}" class="form-input" placeholder="Correo electrónico" autocomplete="off">
                                </div>

                                <div class="input-container">
                                    <span class="icon"><img src="{{ asset('assets/icons/lockIconWht.png') }}"></span>
                                    <input type="password" name="password" id="signup-PW" class="form-input" placeholder="Contraseña" autocomplete="off">
                                </div>

                                {{-- <div class="gender-container">
                                    <input type="radio" name="gender" value="male"> Masculino
                                    <input type="radio" name="gender" value="female"> Femenino
                                </div> --}}

                                <div class="input-container">
                                    {{-- <label>Fecha de nacimiento</label> --}}
                                    <span class="icon"><img src="{{ asset('assets/icons/calendarIconWht.png') }}"></span>
                                    <input type="text" name="nacimiento" id="date" max="{{ $lastDate }}" value="{{ old('nacimiento') }}" class="form-input" placeholder="Fecha de nacimiento" onfocus="(this.type = 'date')">
                                </div>

                                {{-- <label> Artista
                                    <input type="checkbox" name="artista" value="Artist">
                                </label> --}}

                                <!-- Agregado para el nombre artistico -->
                                <div class="input-container">
                                    <span class="icon"><img src="{{ asset('assets/icons/musicIconWht.png') }}"></span>
                                    <input type="text" name="name_artist" value="{{ old('name_artist') }}" class="form-input" placeholder="Nombre artistico" autocomplete="off">
                                </div>
                                
                                <input type="submit" class="submit font-titulo" value="Registrarse">
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</body>

</html>
