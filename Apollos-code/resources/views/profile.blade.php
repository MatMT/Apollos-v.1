@extends('layouts.shape1')

@section('title')
    {{ $user->name }}
@endsection

@section('css')
    @vite('resources/css/profileStyles.css')
@endsection

@section('header')
    <x-header></x-header>
@endsection

@section('content')
    <div class="center-user-section flex items-center justify-center font-titulo">
        <div class="user-section rounded-bl-3xl rounded-br-3xl px-20">
            <div class="user-section-content mt-32 text-white">

                <div class="user-info text-lg">
                    <h1 class="user-type">
                        @if ($user->rol == 'artist')
                            <h1>Artista</h1>
                        @else
                            @if ($user->rol == 'user')
                                <h1>Usuario</h1>
                            @endif
                        @endif
                    </h1>

                    <h1 class="username first-letter:uppercase font-titulo text-7xl font-bold">
                        {{ $user->username }}
                    </h1>

                    <h1 class="followers">0 Seguidores</h1>

                    @if ($user->rol == 'artist')
                        <h1 class="songs inline-block"> {{ $CounterSongs }} Canciones</h1> | <h1 class="albums inline-block">
                            {{ $albums->count() }} Álbumes
                        </h1>
                    @endif

                    @if (auth()->user()->name == $user->name)
                        <div class="auth-user flex">
                            <a href="{{ route('NewPassword') }}" class="artist-bttn mt-5 inline-block">
                                Editar perfil
                            </a>

                            <a href="{{ route('upload.select') }}" class="artist-bttn mt-5 inline-block ml-5">Subir
                                contenido</a>
                        </div>
                    @else
                        <div class="user-follow flex">
                            <div class="follow mt-5">
                                Seguir
                            </div>
                        </div>
                    @endif
                </div>

                <div class="user-photo float-right rounded-full overflow-hidden"">
                    <img src="{{ asset('storage') . '/uploads/pfp/' . $user->image }}" alt="Imagen de usuario">
                </div>

            </div>


        </div> <!-- HEADER PERFIL -->
    </div>

    <!-- MAING -->
    <br>
    <br>
    <br>

    <div class="flex justify-around">
        <div class="contenedores">
            <div class="box-1 active anim2" id="caja-1">
                <div class="content">

                    @if ($albums->count())
                        @foreach ($albums as $album)
                            <div class="playList">
                                <!-- IMG -->
                                <img src="{{ asset('storage') . '/uploads/imagenes/' . $album->image }}"
                                    alt="Imagen del album {{ $album->name_album }}">

                                <!-- LINK -->
                                {{-- Se mapea automaticamente la ruta por cada song en su url --}}
                                <a href="{{ route('albums.index', ['user' => $user, 'album' => $album->id]) }}">
                                    <h2 class="font-cuerpo font-bold mt-4 text-lg">{{ $album->name_album }}</h2>
                                </a>

                                <p class="description text-gray-400 font-cuerpo text-sm text-ellipsis">Nuevos álbumes:D
                                </p>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>

            <!-- ============================================================================== -->
            <h1 class='public-songs text-white font-titulo text-3xl font-bold mb-5 anim2'>Canciones publicadas</h1>

            <div class="box-2 active anim2" id="caja-2">
                <div class="content">
                    <div class="song-list-container ">

                        <div class="song-container-tabs flex items-center justify-center mt-2 mb-5 ">
                            <div class="song-info-tab inline-flex items-center justify-center pb-2 border-b border-white">
                                <h1 class="id-song-tab"> # </h1>
                                <span class="song-pic-tab"><img src='{{asset('assets/icons/imageIconWht.png')}}'></span>
                                <span class="title-author-tab"><h1 class="song-title text-center">Nombre de la canción</h1></span>
                                <h1 class='counter-time-tab text-center'><img src='{{asset('assets/icons/timerIconWht.png')}}'></h1>
                                <h1 class='likes-tab text-center'>Me gusta</h1>
                            </div>
                        </div>

                        @if ('HaySencillos')
                            @foreach ($sencillos as $sencillo)
                                {{-- Se mapea automaticamente la ruta por cada song en su url --}}

                                    <div class="song-container flex items-center justify-center mt-2">
                                        <div class="song-info inline-flex items-center justify-center">
                                            <h1 class="id-song">{{ $sencillo->id }}</h1>
                                            <span class="song-pic"><img src="{{ asset('storage') . '/uploads/imagenes/' . $sencillo->image }}"></span>
                                            <span class="title-author"><h1 class="song-title font-bold text-center">{{ $sencillo->name_song }}</h1></span>
                                            <h1 class='counter-time text-center'>{{ $sencillo->time }}</h1>
                                            <h1 class='likes text-center'>999 Me gusta</h1>
                                            <span class="like-ico"><img src='{{asset('assets/icons/likedIcon.png')}}' class="like-icon liked"></span>
                                        </div>
                                    </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>

            <div class="box-3 anim2" id="caja-3">
                <div class="content">
                    <div class="info artista">
                        <img src="{{ asset('assets/artistas-pic/ed_sheeran.jpg') }} " class="rounded-full"
                            alt="Había una Imagen xD">
                        <h2 class="font-cuerpo font-bold mt-4 text-lg">Ed Sheeran</h2>
                        <p class="description text-gray-400 font-cuerpo text-sm text-ellipsis">Artista</p>
                    </div>


                </div>
            </div>

            <div class="box-4 anim2" id="caja-4">
                <div class="content">
                    <div class="info favoritos">
                        <img src="{{ asset('assets/artistas-pic/ed_sheeran.jpg') }} " class="rounded-full"
                            alt="Había una Imagen xD">
                        <h2 class="font-cuerpo font-bold mt-4 text-lg">Ed Sheeran</h2>
                        <p class="description text-gray-400 font-cuerpo text-sm text-ellipsis">Artista</p>
                    </div>


                </div>
            </div>
        </div>

    </div>

@endsection
