@extends('layouts.shape1')

@section('title', 'Tu Biblioteca ')

@section('header')
    <x-header title="Biblioteca" activeli="this"></x-header>
@endsection


@section('content')

    <main class="w-10/12 p-6 mt-2 mx-auto">

        <!--- Tttulo de Biblioteca  -->
        <div class="title">
            <h2 class="font-titulo text-6xl font-bold text-white text-left my-3">{{__('Library')}}</h2>
            <h4 class="font-titulo text-white opacity-80 text-3xl text-left desktop_2:text-2xl">{{__('Check out your collection')}}</h4>
        </div>


        <!--- Parte del contenido  -->

        <div class="contenido">
            <div class="pestanias">

                <ul class="opciones text-2xl font-cuerpo desktop_2:text-xl">
                    <li class="opcion active-opcion" id="op1">{{__('Favorites')}}</li>
                    <li class="opcion albums-opcion remove" id="op2">Albums</li>
                    <li class="opcion artistas-opcion remove" id="op3">{{__('Artist')}}</li>
                    <li class="opcion favoritos-opcion remove hidden" id="op4">Favoritos</li>
                </ul>

                <div class="line-1"></div>
            </div>

            <div class="contenedores">
                <div class="box-1 active anim2" id="caja-1">
                    <div class="content">

                        @if ($userLikes->obtenerFavs($userLikes->id)->count())
                            @foreach ($userLikes->obtenerFavs($userLikes->id) as $like)
                                <div class="info favoritos">
                                    <a
                                        href="{{ route('song.show', ['user' => $userLikes->obtenerArtistName($like->user_id), 'song' => $userLikes->obtenerSong($like->song_id)]) }}">
                                        <img src="
                            {{ asset('storage') . '/uploads/imagenes/' . $userLikes->obtenerSong($like->song_id)->image }}"
                                            class="rounded-full" alt="Había una Imagen xD">
                                        <h2 class="font-cuerpo font-bold mt-4 text-lg">
                                            {{ $userLikes->obtenerSong($like->song_id)->name_song }}</h2>
                                        <p class="description text-gray-400 font-cuerpo text-sm text-ellipsis">
                                            {{ $userLikes->obtenerSong($like->song_id)->time }} |
                                            {{ $userLikes->obtenerArtist($like->song_id) }}</p>

                                    </a>
                                </div>
                            @endforeach
                        @endif


                        {{-- <div class="playList">
                            <img src="{{ asset('assets/artistas-pic/spider.jpg') }} " alt="Había una Imagen xD">
                            <h2 class="font-cuerpo font-bold mt-4 text-lg">SpiderLove</h2>
                            <p class="description text-gray-400 font-cuerpo text-sm text-ellipsis">Lorem ipsum dolor sit
                                amet consectetur adipisicing elit. Possimus minima recusandae eaque similique, fuga,
                                laboriosam adipisci debitis deserunt doloremque vel facilis inventore exercitationem
                                eligendi molestiae perferendis, atque omnis! Perspiciatis, inventore!</p>
                        </div>
                        <div class="playList">
                            <img src="{{ asset('assets/artistas-pic/spider.jpg') }} " alt="Había una Imagen xD">
                            <h2 class="font-cuerpo font-bold mt-4 text-lg">SpiderLove</h2>
                            <p class="description text-gray-400 font-cuerpo text-sm text-ellipsis">Lorem ipsum dolor sit
                                amet consectetur adipisicing elit. Possimus minima recusandae eaque similique, fuga,
                                laboriosam adipisci debitis deserunt doloremque vel facilis inventore exercitationem
                                eligendi molestiae perferendis, atque omnis! Perspiciatis, inventore!</p>
                        </div>
                        <div class="playList">
                            <img src="{{ asset('assets/artistas-pic/spider.jpg') }} " alt="Había una Imagen xD">
                            <h2 class="font-cuerpo font-bold mt-4 text-lg">SpiderLove</h2>
                            <p class="description text-gray-400 font-cuerpo text-sm text-ellipsis">Lorem ipsum dolor sit
                                amet consectetur adipisicing elit. Possimus minima recusandae eaque similique, fuga,
                                laboriosam adipisci debitis deserunt doloremque vel facilis inventore exercitationem
                                eligendi molestiae perferendis, atque omnis! Perspiciatis, inventore!</p>
                        </div>
                        <div class="playList">
                            <img src="{{ asset('assets/artistas-pic/spider.jpg') }} " alt="Había una Imagen xD">
                            <h2 class="font-cuerpo font-bold mt-4 text-lg">SpiderLove</h2>
                            <p class="description text-gray-400 font-cuerpo text-sm text-ellipsis">Lorem ipsum dolor sit
                                amet consectetur adipisicing elit. Possimus minima recusandae eaque similique, fuga,
                                laboriosam adipisci debitis deserunt doloremque vel facilis inventore exercitationem
                                eligendi molestiae perferendis, atque omnis! Perspiciatis, inventore!</p>
                        </div>
                        <div class="playList">
                            <img src="{{ asset('assets/artistas-pic/spider.jpg') }} " alt="Había una Imagen xD">
                            <h2 class="font-cuerpo font-bold mt-4 text-lg">SpiderLove</h2>
                            <p class="description text-gray-400 font-cuerpo text-sm text-ellipsis">Lorem ipsum dolor sit
                                amet consectetur adipisicing elit. Possimus minima recusandae eaque similique, fuga,
                                laboriosam adipisci debitis deserunt doloremque vel facilis inventore exercitationem
                                eligendi molestiae perferendis, atque omnis! Perspiciatis, inventore!</p>
                        </div> --}}

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
                                    href="{{ route('album.index', ['user' => $userLikes->obtenerArtistName($album->user_id), 'album' => $album->id]) }}">

                                    <img src="{{ asset('storage') . '/uploads/imagenes/' . $album->image }}"
                                        alt="Imagen de {{ $album->name_album }}">
                                    <h2 class="font-cuerpo font-bold mt-4 text-lg">{{ $album->name_album }}
                                    </h2>
                                    <p class="description text-gray-400 font-cuerpo text-sm text-ellipsis">
                                        {{ $userLikes->obtenerName($album->user_id) }}</p>

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
                    {{-- <div class="info artista">
                            <img src="{{ asset('assets/artistas-pic/ed_sheeran.jpg') }} " class="rounded-full"
                                alt="Había una Imagen xD">
                            <h2 class="font-cuerpo font-bold mt-4 text-lg">Ed Sheeran</h2>
                            <p class="description text-gray-400 font-cuerpo text-sm text-ellipsis">Artista</p>
                        </div> --}}
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
