{{-- @extends('partials.nav_bar')

@section('titulo')
    Album: 
@endsection --}}

@extends('layouts.shape1')

@section('title')
    {{ $album->name_album }}
@endsection

@section('css')
    @vite('resources/css/profileStyles.css')
    @vite('resources/css/listDisplayStyles.css')
    <style>
        header,
        header.sticky {
            position: sticky !important;
        }
    </style>
@endsection

@section('header')
    <x-header></x-header>
@endsection

@section('content')

    <div class="center-list-section flex items-center justify-center font-titulo anim2">
        <div class="list-section px-20 ">
            <div class="list-section-content mt-8 text-white flex items-center justify-center">

                @if (!$album->sencillo)
                    <div class="list-pic float-left rounded-3xl overflow-hidden mr-5 ml-5">
                        <img src="{{ asset('storage') . '/uploads/imagenes/' . $album->image }}"
                            alt="Imagen de la canción {{ $album->name_album }}">
                    </div>
                @endif

                <div class="list-info text-lg ml-5">
                    <h1 class="list-type">
                        @if (!$album->sencillo)
                            Álbum
                        @else
                            Colección
                        @endif
                    </h1>

                    <h1 class="name-album first-letter:uppercase font-titulo_2 text-7xl ">
                        {{ $album->name_album }}
                    </h1>

                    <div class="flex">
                        <div class="w-1/2">
                            <div class="list-author-date flex">
                                <span class="author mr-1">
                                    <h1>
                                        <a href="{{ route('profile.index', $user->name_artist) }}" class="hover:underline">
                                            {{ $user->username }}
                                        </a>
                                    </h1>
                                </span>
                                <span class="text-center point">⚬</span>
                                <span class="date ml-1">
                                    <h1>2022</h1>
                                </span>
                            </div>
                            <div class="timer-songs flex">
                                @if (!$album->sencillo)
                                    <span class="timer mr-1">
                                        <h1>{{ $album->duration }}</h1>
                                    </span>
                                    <span class="text-center point">⚬</span>
                                @endif
                                <span class="counter @if (!$album->sencillo) ml-1 @endif">
                                    <h1>{{ $album->songs->count() }} canciones</h1>
                                </span>
                            </div>
                        </div> <!-- Información -->
                        <div class="w-1/2 flex items-center">
                            @if (!$album->sencillo)
                                @if ($album->checkLike(auth()->user()))
                                    <form action="{{ route('album.likes.destroy', $album) }}" method="POST" class="mt-2">
                                        @method('DELETE')
                                        @csrf
                                        <div>
                                            <button type="submit">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="white"
                                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                                </svg>
                                            </button>
                                        </div> <!-- Botón -->
                                    </form> <!-- YA en favoritos -->
                                @else
                                    <form action="{{ route('album.likes.store', $album) }}" method="POST" class="mt-2">
                                        @csrf
                                        <div>
                                            <button type="submit">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                                </svg>
                                            </button>
                                        </div> <!-- Botón -->
                                    </form> <!-- Agregar a favoritos -->
                                @endif
                            @endif
                        </div> <!-- Like -->

                    </div>

                    @if (!$album->sencillo)
                        @auth {{-- Autentificado --}}
                            @if ($user->id == auth()->user()->id)
                                {{-- Artista dueño de la canción --}}
                                <div class="1/6 flex justify-center items-center gap-2">
                                    {{-- Editar album --}}
                                    <form action="{{ route('album.config.index', ['user' => $user, 'album' => $album->id]) }}">
                                        <input type="submit" value="Editar álbum" name="" id=""
                                            class="bg-blue-500 hover:bg-blue-600 p-2 rounded text-white font-bold cursor-pointer">
                                    </form>

                                    {{-- <a href="{{ route('album.settings.index', [$user, $album]) }}" class="bg-blue-500 hover:bg-blue-600 p-2 rounded text-white font-bold cursor-pointer">
                                    Sexo
                                </a> --}}

                                    <form action="{{ route('album.destroy', [$user, $album]) }}" method="POST">
                                        {{-- METODO SPOOFING - Laravel permite agregar otro tipo de peticiones --}}
                                        @method('DELETE')
                                        @csrf
                                        <input type="submit" value="Eliminar álbum" name="" id=""
                                            class="bg-red-500 hover:bg-red-600 p-2 rounded text-white font-bold cursor-pointer">
                                    </form>
                                </div>
                            @endif
                        @endauth
                    @endif
                </div>

            </div>
        </div> <!-- HEADER PERFIL -->
    </div>

    <div class="flex justify-around pb-20">
        <div class="contenedores">
            {{-- <h1 class='public-albums text-white font-titulo text-3xl font-bold mb-5 anim2'>Contenido</h1> --}}

            <div class="box-2 active anim2" id="caja-1">
                <div class="content flex items-center justify-center">
                    @if ($album->songs->count())
                        <div class="box-2 active anim2" id='caja-2'>
                            <div class="content">
                                <div class="song-list-container">
                                    <div class="song-container-tabs flex items-center justify-center mt-2 mb-5 ">
                                        <div
                                            class="song-info-tab inline-flex items-center justify-center pb-2 border-b border-white">
                                            <h1 class="id-song-tab opacity-70"> # </h1>
                                            <span class="title-author-tab">
                                                <h1 class="song-title text-center opacity-70">Nombre de la canción</h1>
                                            </span>
                                            <h1 class='counter-time-tab text-center opacity-70'><img
                                                    src='{{ asset('assets/icons/timerIconWht.png') }}'></h1>
                                            <h1 class='likes-tab text-center opacity-70'>Me gustas</h1>
                                        </div>
                                    </div>
                                    @foreach ($album->songs as $song)
                                        <div class="song-container flex items-center justify-center mt-1">
                                            {{-- Se mapea automaticamente la ruta por cada song en su url --}}
                                            <a class="song-info inline-flex items-center justify-center gap-9"
                                                href="{{ route('song.show', ['song' => $song->id, 'user' => $user]) }}">

                                                <h1 class="id-song">{{ $displayList = $displayList + 1 }}</h1>
                                                <span class="title-author">
                                                    <h1 class="song-title font-bold text-center">{{ $song->name_song }}
                                                    </h1>
                                                </span>
                                                <h1 class='counter-time text-center'>{{ $song->time }}</h1>
                                                <h1 class='likes text-center'>{{ $song->likes->count() }}</h1>
                                                @if ($song->checkLike(auth()->user()))
                                                    <form action="{{ route('song.likes.destroy', $song) }}" method="POST">
                                                        @method('DELETE')
                                                        @csrf
                                                        <div class="my-4">
                                                            <button type="submit">
                                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                                                    fill="white" viewBox="0 0 24 24" stroke="currentColor"
                                                                    stroke-width="2">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                                                </svg>
                                                            </button>
                                                        </div> <!-- Botón -->
                                                    </form> <!-- YA en favoritos -->
                                                @else
                                                    <form action="{{ route('song.likes.store', $song) }}" method="POST">
                                                        @csrf
                                                        <div class="my-4">
                                                            <button type="submit">
                                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                                                    fill="none" viewBox="0 0 24 24"
                                                                    stroke="currentColor" stroke-width="2">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                                                </svg>
                                                            </button>
                                                        </div> <!-- Botón -->
                                                    </form> <!-- Agregar a favoritos -->
                                                @endif
                                                {{-- <span class="like-ico"><img src='{{ asset('assets/icons/likedIcon.png') }}'
                                                        class="like-icon liked"></span> --}}

                                            </a>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
