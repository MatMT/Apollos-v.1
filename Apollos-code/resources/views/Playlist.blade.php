@extends('layouts.shape1')

@section('title', 'Playlist ')


@section('header')
    <x-header title="Playlist" activeplay="this"></x-header>
@endsection

@section('content')

    @vite('resources/css/varios.css')

    <main class="contenedor w-22/25 tablet_3:w-11/12 my-2 mx-auto p-5">

        <div class="info-play-list">

            <!--- Imagen de la PlayList -->
            <div class="img-play-list">
                <img src="{{ asset('assets/icons/music-alt-free-icon-font.svg') }}" alt="">
            </div>

            <div class="apollos-info-artist text-white">
                <div class="name-artist">
                    <h3 class="font-titulo text-3xl font-light xl:text-4xl">Playlist</h3>
                    <h2 class="font-titulo_2 text-6xl my-2 xl:text-7xl">
                        {{ __('My playlist') }}
                    </h2>
                </div>
                <div class="followers-artist">
                    <h3 class="font-titulo text-2xl font-light xl:text-3xl">
                        @if ($MyPlaylist && $MyPlaylist->duration != '0 Segundos')
                            {{ $MyPlaylist->duration }}
                        @endif
                    </h3>

                    <div class="box-icon">
                        @if ($Start)
                            <a href="{{ route('song.playlist.show', ['playlist' => $MyPlaylist, 'song' => $Start]) }}">
                                <button class="play-list-btm font-cuerpo font-light text-xl">{{ __('Play') }}</button>
                            </a>
                        @endif
                        {{-- <i class="fi fi-rr-edit text-3xl mx-4 cursor-pointer" id="lapiz"></i> --}}
                    </div>

                </div>
            </div>
        </div>


        <div class="content-music-artist w-full mt-10">
            <div class="section_1 w-full">

                <div class="play-list-container mx-1 anim">

                    <h3 class="font-cuerpo font-bold text-3xl text-white">{{ __('My list') }}:</h3>

                    <div class="songs-list" id="lista-canciones">

                        <table class="title-table-v mt-8 w-full text-white opacity-70">
                            <tr class="fila-hight-v text-lg">
                                <td class="num-song">#</td>
                                <td class="picture-song"></td>
                                <td class="name-song">{{ __('Name') }}</td>
                                <td class="artists-song"></td>
                                <td class="dur-song">{{ __('Duration') }}</td>
                            </tr>
                        </table>
                        <section class="line-table"></section>

                        @php
                            $i = 1;
                        @endphp

                        @if ($MySongs)
                            @foreach ($MySongs as $song)
                                <div class="song flex items-center justify-around">
                                    <a
                                        href="{{ route('song.playlist.show', ['playlist' => $MyPlaylist, 'song' => $song]) }}">

                                        <div class="fila-content-v text-lg" href="" id="song">
                                            <div class="num-song font-titulo">{{ $i++ }}</div>
                                            <div class="picture-song"><img loading="lazy"
                                                    src="{{ asset('storage') . '/uploads/imagenes/' . $song->image }}""
                                                    alt="{{ $song->name_song }}" class="w-[45px] mx-auto rounded"></div>
                                            <div class="name-song"><span>{{ $song->name_song }}</div>
                                            <div class="dur-song font-titulo">{{ $song->time }}</div>
                                        </div>

                                    </a>
                                    @foreach ($RegistSongs as $regist)
                                        @if ($regist->song_id == $song->id)
                                            <form
                                                action="{{ route('playlist.song.destroy', ['regist' => $regist, 'song' => $song->id]) }}"
                                                method="POST">
                                                {{-- METODO SPOOFING - Laravel permite agregar otro tipo de peticiones --}}
                                                @method('DELETE')
                                                @csrf
                                                <input type="submit" value="{{ __('Delete song') }}" name=""
                                                    id=""
                                                    class="bg-red-500 hover:bg-red-600 p-2 rounded text-white font-bold cursor-pointer">
                                            </form>
                                        @endif
                                    @endforeach
                                </div>
                            @endforeach
                        @endif

                        @if (!$MySongs)
                            <div class="fila-content-v text-lg">
                                <div class="num-song font-titulo"></div>
                                <div class="picture-song"></div>
                                <div class="name-song text-2xl font-cuerpo">
                                    <span>{{__("Let's find something for your platlist!")}}</span>
                                </div>
                                <div class="artists-song font"></div>
                                <div class="dur-song font-titulo"></div>
                            </div>
                        @endif

                    </div>

                </div>

                <!-- Canciones FAVORITAS prpias del artista --->

                <div class="buscar-cancion w-full">

                    <div class="list-buscados w-full">
                        <h3 class="text-white font-cuerpo font-extrabold text-2xl ml-3 ">
                            {{ __('Find something for your list') }}</h3>
                        <div class="form-buscador">
                            <livewire:buscador-playlist :mysongs="$MySongs" />
                        </div>
                    </div>
                </div>
            </div>


        </div>

        <!-- Popup Modificar PalyList -->

        {{-- <div class="overway_2" id="over">

            <div class="modify-list-a font-cuerpo" id="coverxd">
                <i class="fi fi-rr-cross btn-cerrar cursor-pointer" id="btn-close-2"></i>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="img-send">
                        <div class="img-play-list">
                            <img src="{{ asset('assets/icons/music-alt-free-icon-font.svg') }}" alt="">
                        </div>
                        <h3 class="font-titulo_2 text-center text-xl mt-3">Mi playList</h3>
                    </div>
                    <div class="modify-info">
                        <input type="text" name="" id="" value="Mi PLayList" placeholder="Nuevo Nombre">
                        <label for="subir-img" class="subir" id="subir"><i class="fi fi-rr-upload"
                                onclick="comprobar()"></i>Subir Imagen</label>
                        <input type="file" id="subir-img" name="image" accept=".jpg, .jpeg, .png"
                            class="border p-3 w-full rounded-lg">
                    </div>
                    <input type="submit" value="Modificar" class="btn-enviar-mod">
                </form>
            </div>
        </div> --}}
    </main>
    @vite('resources/js/varios.js')

@endsection
