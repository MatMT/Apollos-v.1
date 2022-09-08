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
        <div class="user-section rounded-bl-3xl rounded-br-3xl px-20 smd:max-h-[435px]">
                {{-- Componente de información LiveWire --}}
                <livewire:social-panel :user="$user" :countersongs="$CounterSongs" :albums="$albums">
        </div> <!-- HEADER PERFIL -->
    </div>

    <!-- MAING -->
    <br>
    <br>
    <br>


    <div class="flex justify-around pb-20">

        <div class="contenedores">
            @if ($user->rol == 'artist')
                <h1 class='public-albums text-white font-titulo text-3xl font-bold mb-5 anim2'>{{ __('Public albums') }}
                </h1>
                <div class="box-1 active anim2" id="caja-1">
                    <div class="content flex items-center justify-center">

                        @if ($albums->count())
                            @foreach ($albums as $album)
                                <div class="playList">
                                    <!-- LINK -->
                                    {{-- Se mapea automaticamente la ruta por cada song en su url --}}
                                    <a
                                        href="{{ route('album.index', ['user' => $user->name_artist, 'album' => $album->id]) }}">
                                        <!-- IMG -->
                                        <img src="{{ asset('storage') . '/uploads/imagenes/' . $album->image }}"
                                            alt="Imagen del album {{ $album->name_album }}">

                                        <h2 class="font-cuerpo font-bold mt-4 text-lg text-center">{{ $album->name_album }}
                                        </h2>
                                    </a>
                                </div>
                            @endforeach
                        @else
                            <div class="song-container-tabs mt-2 mb-5 leading-3">
                                <span class="disc-ico"><img src="{{ asset('assets/icons/discBrokenWht.png') }}"></span>
                                <h1 class='text-white font-cuerpo text-3xl font-bold mb-5 anim2 text-center'>
                                    {{ auth()->user()->name == $user->name ? __('Upload your first album!') : __('No content yet...') }}
                                </h1>
                                <h1
                                    class='if-subtitle text-slate-500 font-cuerpo text-3xl font-bold mb-5 anim2 text-center'>
                                    {{ auth()->user()->name == $user->name ? __('And show your talent') : __('Wait for their first album!') }}
                                </h1>
                            </div>
                        @endif
                    </div>
                    <!-- ============================================================================== -->

                </div>
                <h1 class='public-songs text-white font-titulo text-3xl font-bold mb-5 anim2'>{{ __('Public songs') }}
                </h1>

                <div class="box-2 active anim2" id="caja-2">
                    <div class="content">
                        <div class="song-list-container ">

                            @if ($HaySencillos && $sencillos->count())
                                <div class="song-container-tabs flex items-center justify-center mt-2 mb-5">
                                    <div
                                        class="song-info-tab inline-flex items-center justify-center pb-2 border-b border-white">
                                        <h1 class="id-song-tab opacity-70"> # </h1>
                                        <span class="song-pic-tab opacity-70"><img
                                                src='{{ asset('assets/icons/imageIconWht.png') }}'></span>
                                        <span class="title-author-tab">
                                            <h1 class="song-title text-center opacity-70">{{__('Name')}}</h1>
                                        </span>
                                        <h1 class='counter-time-tab text-center opacity-70'><img
                                                src='{{ asset('assets/icons/timerIconWht.png') }}'></h1>
                                        <h1 class='likes-tab text-center opacity-70'>{{__('Like')}}</h1>
                                    </div>
                                </div>
                                @foreach ($sencillos as $sencillo)
                                    <div class="song-container flex items-center justify-center mt-2">
                                        {{-- Se mapea automaticamente la ruta por cada song en su url --}}
                                        <a class="song-info inline-flex items-center justify-center"
                                            href="{{ route('song.show', ['song' => $sencillo, 'user' => $user]) }}">
                                            <div class="song-info inline-flex items-center justify-center">
                                                <h1 class="id-song">{{ $displayList = $displayList + 1 }}</h1>
                                                <span class="song-pic"><img
                                                        src="{{ asset('storage') . '/uploads/imagenes/' . $sencillo->image }}"></span>
                                                <span class="title-author">
                                                    <h1 class="song-title font-bold text-center">{{ $sencillo->name_song }}
                                                    </h1>
                                                </span>
                                                <h1 class='counter-time text-center'>{{ $sencillo->time }}</h1>
                                                <h1 class='likes text-center'>{{ $sencillo->likes->count() }}</h1>
                                                {{-- FAVORITOS --}}
                                                @if ($sencillo->checkLike(auth()->user()))
                                                    <form action="{{ route('song.likes.destroy', $sencillo) }}"
                                                        method="POST">
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
                                                    <form action="{{ route('song.likes.store', $sencillo) }}"
                                                        method="POST">
                                                        @csrf
                                                        <div class="my-4">
                                                            <button type="submit">
                                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                                    stroke-width="2">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                                                </svg>
                                                            </button>
                                                        </div> <!-- Botón -->
                                                    </form> <!-- Agregar a favoritos -->
                                                @endif
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                            @else
                                <div class="content flex items-center justify-center">
                                    <div class="song-container-tabs mt-2 mb-5 leading-3">
                                        <span class="disc-ico"><img
                                                src="{{ asset('assets/icons/discBrokenWht.png') }}"></span>
                                        <h1 class='text-white font-cuerpo text-3xl font-bold mb-5 anim2 text-center'>
                                            {{ auth()->user()->name == $user->name ? __('Upload your first song!') : __('No content yet...') }}
                                        </h1>
                                        <h1
                                            class='if-subtitle text-slate-500 font-cuerpo text-3xl font-bold mb-5 anim2 text-center'>
                                            {{ auth()->user()->name == $user->name ? __('And show your talent') : __('Wait for their first song!') }}
                                        </h1>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            @else
            <h1 class='public-albums text-white font-titulo text-3xl font-bold mb-5 anim2'>{{ __('Followed artists') }}</h1>                
                <div class="artist-cont anim2">
                    <div class="content">
                        @if ($followedArts->count() != 0)
                            @foreach ($followedArts as $followedArts)
                                <div class="info artista">
    
                                    <a href="{{ route('profile.index', ['user' => $followedArts->name_artist]) }}">
    
                                        <img src="{{ asset('storage') . '/uploads/pfp/' . $followedArts->image }}"
                                            alt="Imagen de {{ $followedArts->name }}">
                                        <h2 class="font-cuerpo font-bold mt-4 text-lg text-center">{{ $followedArts->username }}
                                        </h2>
                                    </a>
                                </div>
                            @endforeach
                        @else
                        <div class="content flex items-center justify-center">
                            <div class="song-container-tabs mt-2 mb-5 leading-3">
                                <span class="disc-ico"><img
                                        src="{{ asset('assets/icons/musicIconWht.png') }}"></span>
                                <h1 class='text-white font-cuerpo text-3xl font-bold mb-5 anim2 text-center'>
                                    {{ auth()->user()->name == $user->name ? __("You don't follow any artist yet...") : __('No followed artists yet...') }}
                                </h1>
                                <h1
                                    class='if-subtitle text-slate-500 font-cuerpo text-3xl font-bold mb-5 anim2 text-center'>
                                    {{ auth()->user()->name == $user->name ? __('Find your first favorite artist!') : __('It seems like this user does not follow any artist yet')}}
                                </h1>
                            </div>
                        </div>
                        @endif
                    </div>  
                </div>

            <h1 class='public-albums text-white font-titulo text-3xl font-bold mb-5 anim2'>{{ __('Favorite albums') }}</h1>
                <div class="artist-cont anim2">
                    <div class="content">
                        @if ($likedAlbums->count())
                            @foreach ($likedAlbums as $album)
                                <div class="info album">
                                    <a
                                        href="{{ route('album.index', ['user' => $user->obtenerArtist($album->user_id)->name_artist, 'album' => $album->id]) }}">
    
                                        <img src="{{ asset('storage') . '/uploads/imagenes/' . $album->image }}"
                                            alt="Imagen de {{ $album->name_album }}">
                                        <h2 class="font-cuerpo font-bold mt-4 text-lg">{{ $album->name_album }}
                                        </h2>
                                        <p class="description text-gray-400 font-cuerpo text-sm text-ellipsis">
                                            {{ $user->obtenerArtist($album->user_id)->username }}</p>
                                    </a>
                                </div>
                            @endforeach
                        @else
                        <div class="content flex items-center justify-center">
                            <div class="song-container-tabs mt-2 mb-5 leading-3">
                                <span class="disc-ico"><img
                                        src="{{ asset('assets/icons/discBrokenWht.png') }}"></span>
                                <h1 class='text-white font-cuerpo text-3xl font-bold mb-5 anim2 text-center'>
                                    {{ auth()->user()->name == $user->name ? __("You don't have favorites yet...") : __('No favorite albums yet...') }}
                                </h1>
                                <h1
                                    class='if-subtitle text-slate-500 font-cuerpo text-3xl font-bold mb-5 anim2 text-center'>
                                    {{ auth()->user()->name == $user->name ? __('Find your first favorite album!') : __('It seems like this user does not have any favorite album yet')}}
                                </h1>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
@endsection
