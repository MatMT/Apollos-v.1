@extends('layouts.shape1')

@section('title', 'Playlist ')

{{-- @section('fondo', 'muralArtista') --}}

@section('fondonegro', 'no')

@section('header')
    <x-header title="Playlist"></x-header>
@endsection

@push('script_end')
    <script>
        @foreach ($songs as $song)
            @php
                $i++;
            @endphp
            var myform_{{ $i }} = document.getElementById("FormId_{{ $i }}");
            document.getElementById("ButtonId_{{ $i }}").addEventListener("click", function() {
                myform_{{ $i }}.submit();
            });
        @endforeach
    </script>
@endpush


@section('content')

    @vite('resources/css/artista.css')


    <div class="muralArtist">
        <img src="{{ asset('assets/artistas-pic/shawn_mural.jpg') }}" alt="">
    </div>
    <main class="contenedor w-22/25 tablet_3:w-11/12 my-2 mx-auto p-5">
        <div class="apollos-info-artist mt-20 text-white md:w-1/3">
            <div class="name-artist">
                <h3 class="font-titulo text-4xl font-light">Crea tu</h3>
                <h2 class="font-titulo_2 text-7xl my-2">Playlist</h2>
            </div>
            <div class="followers-artist flex">
                <div class="w-1/2">
                    <h3 class="font-titulo text-3xl font-light">Seguidores <span>#</span></h3>
                    <button class="follow-artist-btm font-titulo font-light text-xl">Guardar</button>
                </div>
                <div class="w-1/2 relative">
                    <h3 class="font-titulo text-xl text-right font-light absolute top-0 right-0 mt-3">
                        8:16
                    </h3>
                </div>
            </div>
        </div>
        <div class="content-music-artist w-full mt-10">
            <div class="section_1 w-full flex">

                <div class="popular-songs-artist w-9/12 mx-1 ">
                    <h3 class="font-cuerpo font-bold text-3xl text-white">Canciones</h3>
                    <div class="songs-list" id="lista-canciones">

                        <table class="title-table mt-8">
                            <tr class="fila-hight text-lg opacity-70">
                                <td class="num-song">#</td>
                                <td class="picture-song"></td>
                                <td class="name-song">NOMBRE</td>
                                <td class="artists-song"></td>
                                <td class="dur-song">DURACIÓN</td>
                            </tr>
                        </table>
                        <section class="line-table"></section>
                        {{-- @foreach ($songs as $song)
                            <div class="fila-content text-lg">
                                <div class="num-song">1</div>
                                <div class="picture-song"><img
                                        src="{{ asset('storage') . '/uploads/imagenes/' . $song->image }}"
                                        alt="Imagen de {{ $song->name_song }}" class="w-[45px] mx-auto rounded"></div>
                                <div class="name-song">{{ $song->name_song }}</span><i class="fi fi-rs-heart"
                                        id="fav"></i>
                                </div>
                                <div class="artists-song"></div>
                                <div class="dur-song font-titulo">3:42</div>
                            </div>
                        @endforeach --}}

                    </div>
                    <div class="see_more text-white font-cuerpo font-light cursor-pointer">
                        <p id="mostrar">Ver más</p>
                    </div>
                    <div class="see_more text-white font-cuerpo font-light cursor-pointer">
                        <p id="ocultar">Ocultar</p>
                    </div>
                </div>

                <!-- Canciones FAVORITAS prpias del artista --->

                <div class="extra-info w-1/4">

                    <div class="list-favoritos w-full">
                        <h3 class="text-white font-cuerpo font-extrabold text-3xl ml-3">Agrega</h3>
                        <div class="list-songs-fav">

                            @php
                                $i = 0;
                            @endphp
                            @foreach ($songs as $song)
                                @php
                                    $i++;
                                @endphp

                                {{-- AGREGAR PLAYLIST --}}
                                <form action="{{ route('playlist.store') }}" id="FormId_{{ $i }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="song_id" value="{{ $song->id }}">
                                </form>

                                <div class="song-fv" id="ButtonId_{{ $i }}">
                                    <img src="{{ asset('storage') . '/uploads/imagenes/' . $song->image }}"
                                        alt="Imagen de {{ $song->name_song }}">
                                    <div class="info-song">
                                        <p class="text-lg font-bold max-w-[114px] min-w-[110px] max-h-[56px]">
                                            {{ $song->name_song }}
                                        </p>
                                        <p class="font-light opacity-70 max-w-[114px]  max-h-[28px]">
                                            {{ $song->name_song }}
                                        </p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <div class="albums-artistas"></div>
            <div class="sencillos-artistas"></div>


        </div>
    </main>

    @vite('resources/js/paginaArtista.js')

@endsection
