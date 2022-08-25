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

                <div class="list-pic float-left rounded-3xl overflow-hidden mr-5 ml-5">
                    <img src="{{ asset('storage') . '/uploads/imagenes/' . $album->image }}"
                        alt="Imagen de la canción {{ $album->name_album }}">
                </div>

                <div class="list-info text-lg ml-5">
                    <h1 class="list-type">
                        Álbum
                    </h1>

                    <h1 class="name-album first-letter:uppercase font-titulo_2 text-7xl ">
                        {{ $album->name_album }}
                    </h1>

                    <div class="list-author-date flex">
                        <span class="author mr-1">
                            <h1>{{ $user->username }}</h1>
                        </span>
                        <span class="text-center point">⚬</span>
                        <span class="date ml-1">
                            <h1>2022</h1>
                        </span>
                    </div>

                    <div class="timer-songs flex ">
                        <span class="timer mr-1">
                            <h1>1 hora</h1>
                        </span>
                        <span class="text-center point">⚬</span>
                        <span class="counter ml-1">
                            <h1>{{ $album->songs->count() }} canciones</h1>
                        </span>
                    </div>

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
                                            <h1 class='likes-tab text-center opacity-70'>Me gusta</h1>
                                        </div>
                                    </div>
                                    @foreach ($album->songs as $song)
                                        <div class="song-container flex items-center justify-center mt-2">
                                            {{-- Se mapea automaticamente la ruta por cada song en su url --}}

                                            <!-- <a class="song-info inline-flex items-center justify-center"
                                                href="{{ route('song.show', ['song' => $song->id, 'user' => $user->id]) }}"> -->
                                                <h1 class="id-song">{{ $displayList = $displayList + 1 }}</h1>
                                                <span class="title-author">
                                                    <h1 class="song-title font-bold text-center">{{ $song->name_song }}</h1>
                                                </span>
                                                <h1 class='counter-time text-center'>999</h1>
                                                <h1 class='likes text-center'>999 Me gusta</h1>
                                                <span class="like-ico"><img src='{{ asset('assets/icons/likedIcon.png') }}'
                                                        class="like-icon liked"></span>
                                            <!-- </a> -->
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
