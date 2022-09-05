@extends('layouts.shape1')

@section('title', 'Tu Biblioteca ')

@section('header')
    <x-header title="Biblioteca" activeli="this"></x-header>
@endsection


@section('content')

    <main class="lib w-10/12 p-6 mt-2 mx-auto">

        <!--- Tttulo de Biblioteca  -->
        <div class="title">
            <h2 class="font-titulo text-6xl font-bold text-white text-left my-3">{{ __('Library') }}</h2>
            <h4 class="font-titulo text-white opacity-80 text-3xl text-left desktop_2:text-2xl">
                {{ __('Check out your collection') }}</h4>
        </div>

        <!--- Parte del contenido  -->

        <div class="contenido">
            <div class="pestanias">

                <ul class="opciones text-2xl font-cuerpo desktop_2:text-xl">
                    <li class="opcion active-opcion" id="op1">{{ __('Favorites') }}</li>
                    <li class="opcion albums-opcion remove" id="op2">{{__('Albums')}}</li>
                    <li class="opcion artistas-opcion remove" id="op3">{{ __('Artists') }}</li>
                    <li class="opcion favoritos-opcion remove hidden" id="op4">{{__('Favorites')}}</li>
                </ul>

                <div class="line-1"></div>
            </div>

            <div class="contenedores">
                <div class="box-1 active anim2" id="caja-1">
                    <div class="content">

                        @if ($songsLikes->count())
                            @foreach ($songsLikes as $song)
                                <div class="info favoritos">
                                    <a
                                        href="{{ route('song.favorites.show', ['user' => $song->InfoArtista($song), 'song' => $song]) }}">
                                        <img src="
                            {{ asset('storage') . '/uploads/imagenes/' . $song->image }}"
                                            class="rounded-full" alt="Había una Imagen xD">
                                        <h2 class="font-cuerpo font-bold mt-4 text-lg">
                                            {{ $song->name_song }}</h2>
                                        <p class="description text-gray-400 font-cuerpo text-sm text-ellipsis">
                                            {{ $song->time }} |
                                            {{ $song->InfoArtista($song)->username }}</p>
                                    </a>
                                </div>
                            @endforeach
                        @endif

                    </div>
                </div>
            </div>

            <!--- Contenido Albums -->

            <div class="box-2 anim2" id="caja-2">
                <div class="content">
                    @if ($F_Albums->count())
                        @foreach ($F_Albums as $album)
                            <div class="info album">
                                <a
                                    href="{{ route('album.index', ['user' => $userLikes->obtenerArtist($album->user_id)->name_artist, 'album' => $album->id]) }}">

                                    <img src="{{ asset('storage') . '/uploads/imagenes/' . $album->image }}"
                                        alt="Imagen de {{ $album->name_album }}">
                                    <h2 class="font-cuerpo font-bold mt-4 text-lg">{{ $album->name_album }}
                                    </h2>
                                    <p class="description text-gray-400 font-cuerpo text-sm text-ellipsis">
                                        {{ $userLikes->obtenerArtist($album->user_id)->username }}</p>
                                </a>
                            </div>
                        @endforeach
                    @else
                        <p>Hola</p>
                    @endif
                </div>
            </div>

            <!--- Contenido Artistas -->

            <div class="box-3 anim2" id="caja-3">
                <div class="content">
                    @if ($F_artists->count())
                        @foreach ($F_artists as $artist)
                            <div class="info artista">

                                <a href="{{ route('profile.index', ['user' => $artist->name_artist]) }}">

                                    <img src="{{ asset('storage') . '/uploads/pfp/' . $artist->image }}"
                                        alt="Imagen de {{ $artist->name }}">
                                    <h2 class="font-cuerpo font-bold mt-4 text-lg">{{ $artist->name }}
                                    </h2>
                                    {{-- <p class="description text-gray-400 font-cuerpo text-sm text-ellipsis">
                                            {{ $userLikes->obtenerName($artist->user_id) }}</p> --}}

                                </a>
                            </div>
                        @endforeach
                    @else
                        <p>Hola</p>
                    @endif

                </div>
            </div>

            <!--- Contenido Favoritos -->
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

    </main>
    @vite('resources/js/biblioteca.js')
@endsection
