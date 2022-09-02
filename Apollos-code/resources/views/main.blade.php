@extends('layouts.shape1')

@section('title', 'Home ')

@section('header')
    <x-header title="Home" active="this"></x-header>
@endsection

@section('fondonegro', 'no')

@section('content')

    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>

    <div class="contenido_main">

        <div class="box-views w-4/5 p-1 m-auto my-1">

            <div class="post_1 w-full justify-around items-center">

                <div class="title-post w-3/5 laptop:w-4/5 anim">
                    <h1 class="font-titulo_2 text-7xl my-8 leading-tight text-white desktop:text-6xl">
                        {{ __('Discover a new world of music') }}</h1>
                    <div class="line w-28 h-0.5 bg-white mb-5"></div>
                    <div class="line w-28 h-0.5 mb-1"></div>

                    <a
                        class="font-cuerpo font-thin text-3xl laptop_2:text-2xl bg-morado_1 px-6 pt-1 pb-2 rounded-full drop-shadow-2xl mt-3 text-slate-300 cursor-default"><span
                            id="saludo"></span> {{ Auth::user()->name }}!</a>
                </div>

                {{-- <div class="w-2/5 bg-planetas h-9/10 bg-cover mx-16 relative">
                    <div class="austronauta bg-austro h-56 w-60 bg-cover absolute top-9 left-20"
                        style="animation: 2s ease-in-out 0s infinite alternate none running flotaraustro;"></div>
                </div> --}}

            </div>

        </div>

        <main class="principal w-6/7 m-auto mt-12 pt-5 font-cuerpo">

            <!--contenedor-carousel ALBUMS FAVORITOS --->
            @if ($F_Albums->count())
                <div class="main-content text-white anim">

                    <h2 class="text-white text-2xl font-bold">{{ __('Albums as you like them') }}</h2>

                    <div class="contenedor-principal">

                        <button rolle="button" id="flecha-izquierda"><i class="fi fi-rr-angle-left"></i></button>

                        <div class="contenedor-carousel">
                            <div class="carousel albums">
                                {{-- FAVORITOS --}}
                                @if ($Fav)
                                    <div class="card drop-shadow-xl">
                                        <a
                                            href="{{ route('song.favorites.show', ['user' => $Fav->InfoArtista($Fav), 'song' => $Fav]) }}">
                                            <div class="imagen albums">
                                                <img src="{{ asset('storage/uploads/imagenes/favoritos.webp') }}"
                                                    alt="Imagen de favoritos">
                                            </div>
                                            <div class="title">
                                                <div class="name font-titulo font-bold text-lg desktop_2:text-base">
                                                    Favoritos</div>
                                            </div>
                                        </a>
                                    </div>
                                @endif

                                @foreach ($F_Albums as $album)
                                    <div class="card drop-shadow-xl">
                                        <a
                                            href="{{ route('album.index', ['user' => $name->obtenerArtist($album->user_id), 'album' => $album->id]) }}">
                                            <div class="imagen albums">
                                                <img src="{{ asset('storage') . '/uploads/imagenes/' . $album->image }} "
                                                    alt="Imagen de {{ $album->name_album }}">
                                            </div>
                                            <div class="title">
                                                <div class="name font-titulo font-bold text-lg desktop_2:text-base">
                                                    {{ $album->name_album }}</div>
                                                <div
                                                    class="type font-cuerpo text-lg font-thin text-slate-300 desktop_2:text-base">
                                                    {{ $name->obtenerArtist($album->user_id)->username }}</div>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <!--contenedor-carousel --->
                        <button rolle="button" id="flecha-derecha"><i class="fi fi-rr-angle-right"></i></button>
                    </div>
                </div>
            @endif

            <!-- ARTISTAS GENERALES -->
            <div class="main-content text-white anim">

                <h2 class="text-white text-2xl font-bold">{{ __('Artist would you like it') }}</h2>

                <div class="contenedor-principal ">

                    <button rolle="button" id="flecha-izquierda-2"><i class="fi fi-rr-angle-left"></i></button>

                    <div class="contenedor-carousel slider-2 artistas">

                        <!--contenedor-carousel --->

                        <div class="carousel">

                            @foreach ($artists as $user)
                                <div class="card card-2 drop-shadow-xl">
                                    <a href="{{ route('profile.index', $user->name_artist) }}">
                                        <div class="imagen">
                                            <img src="{{ asset('storage') . '/uploads/pfp/' . $user->image }}"
                                                alt="Imagen de {{ $user->name }}">
                                        </div>
                                        <div class="title">
                                            <div class="name font-titulo font-bold text-base desktop_2:text-sm">
                                                {{ $user->name }}
                                            </div>
                                            <div class="type text-base font-thin text-slate-300 desktop_2:text-base">
                                                {{ __('Artist') }}
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach

                        </div>

                    </div>


                    <button rolle="button" id="flecha-derecha-2"><i class="fi fi-rr-angle-right"></i></button>


                </div>

            </div>

            <!--contenedor-carousel NUEVOS ARTISTAS --->


            <div class="main-content text-white anim">

                {{-- NUEVOS ARTISTAS --}}
                @if ($new_artists->count())
                    <div>
                        <h2 class="text-white text-2xl font-bold">{{ __('¡New users in Apollos!') }}</h2>

                        <div class="contenedor-principal ">

                            <button rolle="button" id="flecha-izquierda-3"><i class="fi fi-rr-angle-left"></i></button>

                            <div class="contenedor-carousel slider-3 artistas">

                                <!-- carousel con Datos Volatiles-->
                                <div class="carousel">

                                    @foreach ($new_artists as $user)
                                        <div class="card card-3 drop-shadow-xl">
                                            <a href="{{ route('profile.index', $user->name_artist) }}">
                                                <div class="imagen">
                                                    <img src="{{ asset('storage') . '/uploads/pfp/' . $user->image }}"
                                                        alt="Imagen de {{ $user->name }}">
                                                </div>
                                                <div class="title">
                                                    <div class="name font-titulo text-base desktop_2:text-base">
                                                        {{ $user->name }}
                                                    </div>
                                                    <div
                                                        class="type text-base font-thin text-slate-300 desktop_2:text-base">
                                                        {{ __('Artist') }}
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    @endforeach
                                </div>
                                <!--contenedor-carousel --->
                            </div>

                            <button rolle="button" id="flecha-derecha-3"><i class="fi fi-rr-angle-right"></i></button>

                        </div>
                    </div>
                @endif
            </div>

            {{-- <div class="contenedor-principal slider-3"></div> --}}

            @vite('resources/js/carrucel.js')

            <script>
                var lugar = document.getElementById("saludo");

                let datatime = new Date();
                let hour = parseInt(datatime.getHours());

                if (hour >= 5 && hour <= 11) {
                    //Escribir en html
                    lugar.innerHTML = "¡Buenos días";
                } else {
                    if (hour >= 12 && hour <= 18) {
                        lugar.innerHTML = "¡Buenas tardes";
                    } else {
                        lugar.innerHTML = "¡Buenas noches";
                    }
                }
            </script>

        </main>


    </div>

@endsection
