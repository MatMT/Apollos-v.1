@extends('layouts.shape1')

@section('js')
    @vite(['resources/js/configPrfl.js'])
@endsection

@section('header')
    <x-header></x-header>
@endsection
<link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

@section('css')
    <style>
        header.sticky,
        header {
            position: fixed !important;
        }

        .desactive {
            display: none;
        }

        .IMPORTANTactive {
            display: inline !important;
        }

        .IMPORTANTnormal {
            font-weight: normal !important;
        }

        li {
            cursor: pointer;
        }

        .minH {
            min-height: 558px;
        }

        .full-container {
            -webkit-box-shadow: -10px 0px 13px -7px #000000, 10px 0px 13px -7px #000000, 5px 5px 15px 5px rgba(0, 0, 0, 0);
            box-shadow: -10px 0px 13px -7px #000000, 10px 0px 13px -7px #000000, 5px 5px 15px 5px rgba(0, 0, 0, 0);
        }

        input:focus {
            outline: none;
            background-color: rgb(229 229 229);
            transition: all 0.5s ease-out;
        }

        .aside-div,
        .submit-bttn {
            background-color: #131313;

            filter: drop-shadow(0 10px 8px rgb(0 0 0 / 0.04)) drop-shadow(0 4px 3px rgb(0 0 0 / 0.1));
        }

        .player {
            display: none;
        }

        .input-file {
            width: 0.1px;
            height: 0.1px;
            opacity: 0;
            overflow: hidden;
            position: absolute;
            z-index: -1;
        }

        .foo {
            width: 100%;
            cursor: pointer;
            border: 0;
            /* height: 60px; */
            border-radius: 5px;
            outline: 0;
            transition: 200ms all ease;
            border-bottom: 3px solid rgba(0, 0, 0, .2);
            background: #1d1e22;
            text-shadow: 0 2px 0 rgba(0, 0, 0, .2);
            color: #fff;
            font-size: 20px;
            text-align: center;
            line-height: 60px;
            border-radius: 5px;

            text-overflow: ellipsis;
            overflow: hidden;
            white-space: nowrap;
        }

        .foo:hover {
            background: #75ea96;
        }

        .photo-ico {
            z-index: 2;
        }
    </style>
@endsection

@section('title')
    {{ __('Edit profile') }}
@endsection

@section('content')
    <div class=" md:flex md:justify-center pt-40 pb-48 overflow-hidden anim2">
        <div class=" full-container justify-center md:w-3/4 flex shadow minH rounded-2xl overflow-hidden">
            <!-- Barra lateral | ESTÁTICA -->
            <aside class="w-1/4" aria-label="Sidebar md:w-1/4">
                <div class="aside-div h-full py-4 px-3 bg-gray-800">
                    <ul class="space-y-2 mt-5">
                        <!-- Mensajes -->
                        @if (session()->has('NoCambios'))
                            <li class="flex p-4 mb-4 text-sm rounded-lg bg-red-200 text-red-800" role="alert">
                                <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <p class="font-medium">{{ __('Invalid fields!') }}</p>
                            </li>
                        @endif
                        @if (session()->has('cambios'))
                            <li class="flex p-4 mb-4 text-sm rounded-lg bg-green-200 text-green-800" role="alert">
                                <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <p class="font-medium">{{ __('Updated fields!') }}</p>
                            </li>
                        @endif
                        <li id="opcion1"
                            class="flex items-center p-2 text-base font-normal rounded-lg text-white hover:bg-gray-700">
                            <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                class="flex-shrink-0 w-6 h-6 transition duration-75 text-gray-400 group-hover:text-white"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span class="flex-1 ml-3 @if (!session()->has('NoCambios')) font-bold @endif "
                                id="TitleSect1">{{ __('Profile information') }}</span>
                        </li>
                        <li id="opcion2"
                            class="flex items-center p-2 text-base font-normal rounded-lg text-white hover:bg-gray-700">

                            <svg xmlns="http://www.w3.org/2000/svg"
                                class=" flex-shrink-0 w-6 h-6 transition duration-75 text-gray-400 group-hover:text-white"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="flex-1 ml-3 @if (session()->has('NoCambios')) font-bold @endif"
                                id="TitleSect2">{{ __('Password') }}</span>
                        </li>
                        <a href="{{ route('profile.index', auth()->user()) }}"
                            class="flex items-center p-2 text-base font-normal rounded-lg text-white hover:bg-gray-700 padding-30px 70px gap-3">
                            <li id="return">

                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor"
                                    class=" flex-shrink-0 w-6 h-6 transition duration-75 text-gray-400 group-hover:text-white">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9 15L3 9m0 0l6-6M3 9h12a6 6 0 010 12h-3" />
                                </svg>


                            </li>
                            {{ __('Return') }}
                        </a>

                    </ul>
                </div>
            </aside>

            <!-- Contenido | DINÁMICO -->
            <div class="md:w-3/4 p-12 bg-slate-100">
                <!-- Contraseña -->
                <div id="password" class=" @if (!session()->has('NoCambios')) desactive @endif ">
                    <form action="{{ route('settings.store', $user) }}" class="mt-10 md:mt-0" method="POST">
                        @csrf
                        <!-- Contraseña actual -->
                        <div class="mb-5">

                            <label for="password_actual"
                                class="mb-2 block uppercase text-gray-500 font-bold">{{ __('Actual password') }}</label>
                            <input type="password" name="password_actual"
                                class="border p-3 w-full rounded-lg @error('titulo') border-red-500 @enderror">
                            @error('password_actual')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>
                        <!-- Nueva Contraseña -->
                        <div class="mb-5">

                            <label for="new_password"
                                class="mb-2 block uppercase text-gray-500 font-bold">{{ __('New password') }}</label>
                            <input type="password" name="password"
                                class="border p-3 w-full rounded-lg @error('titulo') border-red-500 @enderror">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>
                        <!-- Confirmar nueva contraseña -->
                        <div class="mb-5">

                            <label for="confirm_password"
                                class="mb-2 block uppercase text-gray-500 font-bold">{{ __('Confirm new password') }}</label>
                            <input type="password" name="confirm_password"
                                class="border p-3 w-full rounded-lg @error('titulo') border-red-500 @enderror">
                            @error('confirm_password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>
                        <!-- Enviar -->
                        <div>
                            <input type="submit" value="{{ __('Save changes') }}"
                                class="submit-bttn bg-slate-800 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg" />
                        </div>
                    </form>
                </div>
                <!-- Datos de perfil -->
                <div id="info" class="@if (session()->has('NoCambios')) desactive @endif">
                    <form action="{{ route('settings.store', $user) }}" class="mt-10 md:mt-0" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <!-- Nombre de Usuario -->
                        <div class="mb-5">
                            <label for="username"
                                class="mb-2 block uppercase text-gray-500 font-bold">{{ __('Username') }}</label>
                            <input type="text" id="username" name="username"
                                placeholder="{{ Auth::user()->username }}" value=""
                                class="border p-3 w-full rounded-lg @error('username') border-red-500 is-invalid @enderror">
                            @error('username')
                                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}
                                </p>
                            @enderror
                        </div>
                        <!-- Nombre -->
                        <div class="mb-5">
                            <label for="new_name"
                                class="mb-2 block uppercase text-gray-500 font-bold">{{ __('Name') }}</label>
                            <input type="text" id="new_name" name="new_name" placeholder="{{ Auth::user()->name }}"
                                value=""
                                class="border p-3 w-full rounded-lg @error('new_name') border-red-500 is-invalid @enderror">
                            @error('new_name')
                                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}
                                </p>
                            @enderror
                        </div>
                        <!-- Apellido -->
                        <div class="mb-5">
                            <label for="new_lastname"
                                class="mb-2 block uppercase text-gray-500 font-bold">{{ __('Last name') }}</label>
                            <input type="text" id="new_lastname" name="new_lastname"
                                placeholder="{{ Auth::user()->last_name }}" value=""
                                class="border p-3 w-full rounded-lg @error('new_lastname') border-red-500 is-invalid @enderror">
                            @error('new_lastname')
                                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}
                                </p>
                            @enderror
                        </div>
                        <!-- Imagen de Perfil -->
                        <div class="mb-5">
                            <label for=""
                                class="mb-2 block uppercase text-gray-500 font-bold">{{ __('Profile pic') }}</label>

                            <input type="file" id="image" name="image" accept=".jpg, .jpeg, .png"
                                class="input-file" class="material-symbols-outlined">
                            <label for="image" class="foo flex items-center justify-center p-3">
                                <span class="material-symbols-outlined photo-ico inline-block px-2">
                                    add_a_photo
                                </span>

                                <h3 id="file-upload-filename" class="text-ellipsis overflow-hidden whitespace-nowrap">
                                    <!-- Selected file will get here -->
                                </h3>

                            </label>
                        </div>

                        <!-- Enviar -->
                        <input type="submit" value="{{ __('Save changes') }}"
                            class="submit-bttn bg-slate-800 transition-colors cursor-pointer uppercase font-bold w-full p-3  text-white rounded-lg" />
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        var input = document.getElementById('image');
        var infoArea = document.getElementById('file-upload-filename');

        input.addEventListener('change', showFileName);

        function showFileName(event) {

            var input = event.srcElement;

            var fileName = input.files[0].name;

            infoArea.textContent = fileName;
        }
    </script>
@endsection
