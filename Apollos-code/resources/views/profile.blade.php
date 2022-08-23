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
                        <h1 class="songs inline-block"> {{$CounterSongs}} {{ $CounterSongs === 1 ? "Canción" : "Canciones" }}</h1> | <h1 class="albums inline-block">
                            {{ $albums->count() }} {{ $albums->count() === 1 ? "Álbum" : "Álbumes" }}
                        </h1>
                    @endif

                    @if (auth()->user()->name == $user->name)
                        <div class="auth-user flex gap-2">
                            <a href="{{ route('settings.index', $user) }}" class="artist-bttn mt-5 ">
                                <div class="flex gap-1 items-center">
                                    <p>Editar perfil</p>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path
                                            d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                                    </svg>
                                </div>
                            </a>

                            <a href="{{ route('upload.select') }}" class="artist-bttn mt-5">
                                <div class="flex gap-1 items-center">
                                    <p>Subir contenido</p>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path
                                            d="M18 3a1 1 0 00-1.196-.98l-10 2A1 1 0 006 5v9.114A4.369 4.369 0 005 14c-1.657 0-3 .895-3 2s1.343 2 3 2 3-.895 3-2V7.82l8-1.6v5.894A4.37 4.37 0 0015 12c-1.657 0-3 .895-3 2s1.343 2 3 2 3-.895 3-2V3z" />
                                    </svg>
                                </div>
                            </a>
                        </div>
                    @else
                        <div class="user-follow flex">
                            {{-- FUTURO IF SEGUIR --}}
                            <div class="follow mt-5 flex items-center gap-2 mr-2">
                                Seguir
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                                </svg>
                            </div>
                            <div class="follow mt-5 flex items-center gap-2">
                                Siguiendo
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
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
            <h1 class='public-albums text-white font-titulo text-3xl font-bold mb-5 anim2'>Álbumes publicados</h1>
            <div class="box-1 active anim2" id="caja-1">
                <div class="content flex items-center justify-center">
                    
                    @if ($albums->count())
                        @foreach ($albums as $album)
                            
                                <div class="playList">
                                    <!-- LINK -->
                                    {{-- Se mapea automaticamente la ruta por cada song en su url --}}
                                    <a href="{{ route('albums.index', ['user' => $user, 'album' => $album->id]) }}">
                                    <!-- IMG -->
                                    <img src="{{ asset('storage') . '/uploads/imagenes/' . $album->image }}"
                                        alt="Imagen del album {{ $album->name_album }}">
    
                                        <h2 class="font-cuerpo font-bold mt-4 text-lg text-center">{{ $album->name_album }}</h2>
                                    </a>
                                </div>
                        @endforeach

                        @else 
                            <div class="song-container-tabs mt-2 mb-5 leading-3">
                                <span class="disc-ico"><img src="{{ asset('assets/icons/discIconWht.png') }}"></span>
                                <h1 class='text-white font-cuerpo text-3xl font-bold mb-5 anim2 text-center'>{{auth()->user()->name == $user->name ? '¡Sube tu primer álbum!' : 'Todavía no sube contenido...'}}</h1>
                                <h1 class='if-subtitle text-slate-500 font-cuerpo text-3xl font-bold mb-5 anim2 text-center'>{{auth()->user()->name == $user->name ? 'Y muestra tu talento ' : '¡Espera su primer álbum!'}}</h1>
                            </div>
                    @endif
                </div>
            </div>

            <!-- ============================================================================== -->
            <h1 class='public-songs text-white font-titulo text-3xl font-bold mb-5 anim2'>Canciones publicadas</h1>

            <div class="box-2 active anim2" id="caja-2">
                <div class="content">
                    <div class="song-list-container ">

                         @if ($HaySencillos)
                                <div class="song-container-tabs flex items-center justify-center mt-2 mb-5 ">
                                    <div class="song-info-tab inline-flex items-center justify-center pb-2 border-b border-white">
                                        <h1 class="id-song-tab"> # </h1>
                                        <span class="song-pic-tab"><img src='{{ asset('assets/icons/imageIconWht.png') }}'></span>
                                        <span class="title-author-tab">
                                            <h1 class="song-title text-center">Nombre de la canción</h1>
                                        </span>
                                        <h1 class='counter-time-tab text-center'><img
                                                src='{{ asset('assets/icons/timerIconWht.png') }}'></h1>
                                        <h1 class='likes-tab text-center'>Me gusta</h1>
                                    </div>
                                </div>
                            @foreach ($sencillos as $sencillo)
                                {{-- Se mapea automaticamente la ruta por cada song en su url --}}

                                <div class="song-container flex items-center justify-center mt-2">
                                    <div class="song-info inline-flex items-center justify-center">
                                        <h1 class="id-song">{{ $displayList = $displayList + 1 }}</h1>
                                        <span class="song-pic"><img
                                                src="{{ asset('storage') . '/uploads/imagenes/' . $sencillo->image }}"></span>
                                        <span class="title-author">
                                            <h1 class="song-title font-bold text-center">{{ $sencillo->name_song }}</h1>
                                        </span>
                                        <h1 class='counter-time text-center'>{{ $sencillo->time }}</h1>
                                        <h1 class='likes text-center'>999 Me gusta</h1>
                                        <span class="like-ico"><img src='{{ asset('assets/icons/likedIcon.png') }}'
                                                class="like-icon liked"></span>
                                    </div>
                                </div>
                            @endforeach
                        @else 
                                <div class="content flex items-center justify-center">
                                    <div class="song-container-tabs mt-2 mb-5 leading-3">
                                        <span class="disc-ico"><img src="{{ asset('assets/icons/discIconWht.png') }}"></span>
                                        <h1 class='text-white font-cuerpo text-3xl font-bold mb-5 anim2 text-center'>{{auth()->user()->name == $user->name ? '¡Sube tu primera canción!' : 'Todavía no sube contenido...'}}</h1>
                                        <h1 class='if-subtitle text-slate-500 font-cuerpo text-3xl font-bold mb-5 anim2 text-center'>{{auth()->user()->name == $user->name ? 'Y muestra tu talento ' : '¡Espera su primera canción!'}}</h1>
                                    </div>
                                </div>
                                
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
