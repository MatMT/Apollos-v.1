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
                    <h1 class="font-titulo_2 text-7xl my-8 leading-tight text-white desktop:text-6xl">Descubre un mundo nuevo
                        de Música</h1>
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

            <div class="main-content text-white anim">

                {{-- MIS ARTISTAS --}}
                @if ($F_artists->count())
                    <div>
                        <h2 class="text-white text-2xl font-bold">Tus Artistas</h2>

                        <div class="contenedor-principal slider-1">

                            <button rolle="button" id="flecha-izquierda"><i class="fi fi-rr-angle-left"></i></button>

                            <div class="contenedor-carousel artistas">

                                <!-- carousel con Datos Volatiles-->
                                <div class="carousel">

                                    @foreach ($F_artists as $user)
                                        <div class="card drop-shadow-xl">
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
                                                        Artista
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    @endforeach
                                </div>
                                <!--contenedor-carousel --->
                            </div>

                            <button rolle="button" id="flecha-derecha"><i class="fi fi-rr-angle-right"></i></button>

                        </div>
                    </div>
                @endif



                <!-- ARTISTAS GENERALES -->

                <div class="main-content text-white anim">

                    <h2 class="text-white text-2xl font-bold">Artistas que te gustarán</h2>

                    <div class="contenedor-principal slider-2">

                        <button rolle="button" id="flecha-izquierda"><i class="fi fi-rr-angle-left"></i></button>

                        <div class="contenedor-carousel artistas">

                            <div class="carousel">

                                @foreach ($artists as $user)
                                    <div class="card drop-shadow-xl">
                                        <a href="{{ route('profile.index', $user->name_artist) }}">
                                            <div class="imagen">
                                                <img src="{{ asset('storage') . '/uploads/pfp/' . $user->image }}"
                                                    alt="Imagen de {{ $user->name }}">
                                            </div>
                                            <div class="title">
                                                <div class="name font-titulo text-base desktop_2:text-base">
                                                    {{ $user->name }}
                                                </div>
                                                <div class="type text-base font-thin text-slate-300 desktop_2:text-base">
                                                    Artista
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                            <!--contenedor-carousel --->
                        </div>

                        <!-- Datos estáticos -->
                        {{-- <div class="card drop-shadow-xl">
                                <a href="">
                                    <div class="imagen">
                                        <img src="{{ asset('assets/artistas-pic/ed_sheeran.jpg') }} "
                                            alt="Había una Imagen xD">
                                    </div>
                                    <div class="title">
                                        <div class="name font-titulo_2 text-lg desktop_2:text-base">Ed Sheeran</div>
                                        <div class="type text-lg font-thin text-slate-300 desktop_2:text-base">Artista</div>
                                    </div>
                                </a>
                            </div>
                            <div class="card drop-shadow-xl">
                                <a href="{{ route('artista') }}">
                                    <div class="imagen">
                                        <img src="{{ asset('assets/artistas-pic/Shawn_Mendez.jpg') }} "
                                            alt="Había una Imagen xD">
                                    </div>
                                    <div class="title">
                                        <div class="name font-titulo_2 text-lg desktop_2:text-base">Shawn Mendez</div>
                                        <div class="type text-lg font-thin text-slate-300 desktop_2:text-base">Artista</div>
                                    </div>
                                </a>
                            </div>
                            <div class="card drop-shadow-xl">
                                <a href="">
                                    <div class="imagen">
                                        <img src="{{ asset('assets/artistas-pic/The_weekend.jpg') }} "
                                            alt="Había una Imagen xD">
                                    </div>
                                    <div class="title">
                                        <div class="name font-titulo_2 text-lg desktop_2:text-base">The Weeknd</div>
                                        <div class="type text-lg font-thin text-slate-300 desktop_2:text-base">Artista</div>
                                    </div>
                                </a>
                            </div>
                            <div class="card drop-shadow-xl">
                                <a href="">
                                    <div class="imagen">
                                        <img src="{{ asset('assets/artistas-pic/charlie_p.jpg') }} "
                                            alt="Había una Imagen xD">
                                    </div>
                                    <div class="title">
                                        <div class="name font-titulo_2 text-lg desktop_2:text-base">Charlie Puth</div>
                                        <div class="type text-lg font-thin text-slate-300 desktop_2:text-base">Artista</div>
                                    </div>
                                </a>
                            </div>
                            <div class="card drop-shadow-xl">
                                <a href="">
                                    <div class="imagen">
                                        <img src="{{ asset('assets/artistas-pic/ed_sheeran.jpg') }} "
                                            alt="Había una Imagen xD">
                                    </div>
                                    <div class="title">
                                        <div class="name font-titulo_2 text-lg desktop_2:text-base">Ed Sheeran</div>
                                        <div class="type text-lg font-thin text-slate-300 desktop_2:text-base">Artista</div>
                                    </div>
                                </a>
                            </div>
                            <div class="card drop-shadow-xl">
                                <a href="">
                                    <div class="imagen">
                                        <img src="{{ asset('assets/artistas-pic/Shawn_Mendez.jpg') }} "
                                            alt="Había una Imagen xD">
                                    </div>
                                    <div class="title">
                                        <div class="name font-titulo_2 text-lg desktop_2:text-base">Shawn Mendez</div>
                                        <div class="type text-lg font-thin text-slate-300 desktop_2:text-base">Artista</div>
                                    </div>
                                </a>
                            </div>
                            <div class="card drop-shadow-xl">
                                <a href="">
                                    <div class="imagen">
                                        <img src="{{ asset('assets/artistas-pic/The_weekend.jpg') }} "
                                            alt="Había una Imagen xD">
                                    </div>
                                    <div class="title">
                                        <div class="name font-titulo_2 text-lg desktop_2:text-base">The Weeknd</div>
                                        <div class="type text-lg font-thin text-slate-300 desktop_2:text-base">Artista</div>
                                    </div>
                                </a>
                            </div>
                            <div class="card drop-shadow-xl">
                                <a href="">
                                    <div class="imagen">
                                        <img src="{{ asset('assets/artistas-pic/charlie_p.jpg') }} "
                                            alt="Había una Imagen xD">
                                    </div>
                                    <div class="title">
                                        <div class="name font-titulo_2 text-lg desktop_2:text-base">Charlie Puth</div>
                                        <div class="type text-lg font-thin text-slate-300 desktop_2:text-base">Artista
                                        </div>
                                    </div>
                                </a>
                            </div> --}}
                        <!-- Datos estáticos -->

                        <button rolle="button" id="flecha-derecha"><i class="fi fi-rr-angle-right"></i></button>


                    </div>
                    <!--contenedor-carousel --->


                </div>

            </div>


            @if ($F_Albums->count())
                <div class="main-content text-white anim">

                    <h2 class="text-white text-2xl font-bold">Álbumes como a ti te gustan</h2>

                    <div class="contenedor-principal slider-2">

                        <button rolle="button" id="flecha-izquierda"><i class="fi fi-rr-angle-left"></i></button>

                        <div class="contenedor-carousel">

                            <div class="carousel albums">
                                @foreach ($F_Albums as $album)
                                    <div class="card drop-shadow-xl">
                                        <a
                                            href="{{ route('album.index', ['user' => $name->obtenerArtist($album->user_id), 'album' => $album->id]) }}">
                                            <div class="imagen albums">
                                                <img src="{{ asset('storage') . '/uploads/imagenes/' . $album->image }} "
                                                    alt="Imagen de {{ $album->name_album }}">
                                            </div>
                                            <div class="title">
                                                <div class="name font-titulofont-bold text-lg desktop_2:text-base">
                                                    {{ $album->name_album }}</div>
                                                <div
                                                    class="type font-cuerpo text-lg font-thin text-slate-300 desktop_2:text-base">
                                                    {{ $name->obtenerArtist($album->user_id)->username }}</div>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach

                                <!-- Datos estáticos -->

                                {{-- <div class="card drop-shadow-xl">
                                <a href="">
                                    <div class="imagen albums">
                                        <img src="{{ asset('assets/artistas-pic/house.png') }} " alt="Había una Imagen xD">
                                    </div>
                                    <div class="title">
                                        <div class="name font-titulofont-bold text-lg desktop_2:text-base">Harry's
                                            House</div>
                                        <div class="type font-cuerpo text-lg font-thin text-slate-300 desktop_2:text-base">
                                            Harry Styles</div>
                                    </div>
                                </a>
                            </div> --}}

                                {{-- <div class="card drop-shadow-xl">
                                <a href="">
                                    <div class="imagen albums">
                                        <img src="{{ asset('assets/artistas-pic/fantasia.jpg') }} "
                                            alt="Había una Imagen xD">
                                    </div>
                                    <div class="title">
                                        <div class="name font-titulo font-bold text-lg desktop_2:text-base">Fantasía
                                        </div>
                                        <div class="type font-cuerpo text-lg font-thin text-slate-300 desktop_2:text-base">
                                            Sebastian Yatra</div>
                                    </div>
                                </a>
                            </div> --}}

                            </div>
                        </div>
                        <!--contenedor-carousel --->
                        <button rolle="button" id="flecha-derecha"><i class="fi fi-rr-angle-right"></i></button>
                    </div>
                </div>
            @endif

            <div class="contenedor-principal slider-3"></div>

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
