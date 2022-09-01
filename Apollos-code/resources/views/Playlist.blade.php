@extends('layouts.shape1')

@section('title', 'Playlist ')


@section('header')
    <x-header title="Playlist" activeplay="this"></x-header>
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
                        Mi PLayList
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
                                <button class="play-list-btm font-cuerpo font-light text-xl">Escuchar</button>
                            </a>
                        @endif
                        <i class="fi fi-rr-edit text-3xl mx-4 cursor-pointer" id="lapiz"></i>
                    </div>
                    
                </div>
            </div>
        </div>
        

        <div class="content-music-artist w-full mt-10">
            <div class="section_1 w-full">

            <div class="play-list-container mx-1 anim">
                    
                <h3 class="font-cuerpo font-bold text-3xl text-white">Mi lista:</h3>
                    
                <div class="songs-list" id="lista-canciones">
                        
                        <table class="title-table-v mt-8 w-full text-white opacity-70">
                            <tr class="fila-hight-v text-lg">
                                <td class="num-song">#</td>
                                <td class="picture-song"></td>
                                <td class="name-song">NOMBRE</td>
                                <td class="artists-song"></td>
                                <td class="dur-song">DURACIÓN</td>
                            </tr>
                        </table>
                        <section class="line-table"></section>

                        @php
                            $i = 1;
                        @endphp
                        

                        @if ($MySongs)
                            @foreach ($MySongs as $song)
                                <div class="1/2">
                                    <a href="{{ route('song.playlist.show', ['playlist' => $MyPlaylist, 'song' => $song]) }}">
                                        
                                        <div class="fila-content-v text-lg" href="" id="song">
                                            <div class="num-song font-titulo">{{ $i++ }}</div>
                                            <div class="picture-song"><img loading="lazy" src="{{ asset('storage') . '/uploads/imagenes/' . $song->image }}"" alt="{{ $song->name_song }}" class="w-[45px] mx-auto rounded"></div>
                                            <div class="name-song"><span>{{ $song->name_song }}</span><i class="fi fi-rs-heart" id="fav"></i></div>
                                            <div class="artists-song"></div>
                                            <div class="dur-song font-titulo">{{ $song->time }}</div>
                                        </div>

                                    </a>
                                </div>
                                
                            @endforeach
                        @endif

                        @if (!$MySongs)
                            <div class="fila-content-v text-lg">
                                <div class="num-song font-titulo"></div>
                                <div class="picture-song"></div>
                                <div class="name-song text-2xl font-cuerpo"><span>¡Busca canciones para agregar a tu lista!</span></div>
                                <div class="artists-song font"></div>
                                <div class="dur-song font-titulo"></div>
                            </div>
                        @endif
                        
                    </div>
                
                </div>

                <!-- Canciones FAVORITAS prpias del artista --->

                <div class="buscar-cancion w-full">

                    <div class="list-buscados w-full">
                        <h3 class="text-white font-cuerpo font-extrabold text-2xl ml-3 ">Escuentra algo para tu lista</h3>
                        <div class="form-buscador">
                            <form action="" method="post">
                                <div class="input-b">
                                    <i class="fi fi-rr-search mt-1"></i>
                                    <input type="text" name="" id="" placeholder="Buscar canciones" class="font-cuerpo">
                                </div>
                            </form>
                        </div>
                        @php
                            $i = 0;
                        @endphp
                        @foreach ($songs as $song)
                                @php
                                    $i++;
                                @endphp
                                {{-- AGREGAR PLAYLIST --}}
                                <form action="{{ route('playlist.store') }}" id="FormId_{{ $i }}"
                                    method="POST">
                                    @csrf
                                    <input type="hidden" name="song_id" value="{{ $song->id }}">
                                </form>
                        @endforeach

                        <div class="list-songs-choose text-white font-cuerpo">

                            @php
                                $i = 0;
                            @endphp

                            @foreach ($songs as $song)
                                @php
                                    $i++;
                                @endphp
                               

                                <div class="song-found">
                                    <img src="{{ asset('storage') . '/uploads/imagenes/' . $song->image }}"
                                        alt="Imagen de {{ $song->name_song }}">
                                    <div class="info-song">
                                        <p class="text-lg font-bold max-w-[114px] min-w-[110px] max-h-[56px]">{{ $song->name_song }}</p>
                                        <p class="font-light opacity-70 max-w-[114px]  max-h-[28px]">{{ $song->name_song }}</p>
                                    </div>
                                    <button class="font-cuerpo" id="ButtonId_{{ $i }}">Añadir</button>
                                </div>
                            @endforeach



                                <div class="song-found">
                                    <img src="{{ asset('assets/canciones_img/shawn-whenyoure.jpeg') }}"
                                        alt="no cargó la imagen">
                                    <div class="info-song">
                                        <p class="text-lg font-bold max-w-[114px] min-w-[110px] max-h-[56px]">It will be Ok</p>
                                        <p class="font-light opacity-70 max-w-[114px]  max-h-[28px]">Shawn Mendes</p>
                                    </div>
                                    <button class="font-cuerpo">Añadir</button>
                                </div>
                                <div class="song-found">
                                    <img src="{{ asset('assets/canciones_img/shawn-whenyoure.jpeg') }}"
                                        alt="no cargó la imagen">
                                    <div class="info-song">
                                        <p class="text-lg font-bold">It will be Ok</p>
                                        <p class="font-light opacity-70  max-h-[28px]">Shawn Mendes</p>
                                    </div>
                                    <button class="font-cuerpo">Añadir</button>
                                </div>
                                <div class="song-found">
                                    <img src="{{ asset('assets/canciones_img/shawn-whenyoure.jpeg') }}"
                                        alt="no cargó la imagen">
                                    <div class="info-song">
                                        <p class="text-lg font-bold max-w-[114px] min-w-[110px] max-h-[56px]">It will be Ok</p>
                                        <p class="font-light opacity-70 max-w-[114px]  max-h-[28px]">Shawn Mendes</p>
                                    </div>
                                    <button class="font-cuerpo">Añadir</button>
                                </div>
                                <div class="song-found">
                                    <img src="{{ asset('assets/canciones_img/shawn-whenyoure.jpeg') }}"
                                        alt="no cargó la imagen">
                                    <div class="info-song">
                                        <p class="text-lg font-bold max-w-[114px] min-w-[110px] max-h-[56px]">It will be Ok</p>
                                        <p class="font-light opacity-70 max-w-[114px]  max-h-[28px]">Shawn Mendes</p>
                                    </div>
                                    <button class="font-cuerpo">Añadir</button>
                                </div>
                                <div class="song-found">
                                    <img src="{{ asset('assets/canciones_img/shawn-whenyoure.jpeg') }}"
                                        alt="no cargó la imagen">
                                    <div class="info-song">
                                        <p class="text-lg font-bold max-w-[114px] min-w-[110px] max-h-[56px]">It will be Ok</p>
                                        <p class="font-light opacity-70 max-w-[114px]  max-h-[28px]">Shawn Mendes</p>
                                    </div>
                                    <button class="font-cuerpo">Añadir</button>
                                </div>                            
                        </div>
                    </div>
                </div>
            </div>


        </div>

        <!-- Popup Modificar PalyList -->

        <div class="overway_2" id="over">

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
                        <label for="subir-img" class="subir" id="subir"><i class="fi fi-rr-upload" onclick="comprobar()"></i>Subir Imagen</label>
                        <input type="file" id="subir-img" name="image" accept=".jpg, .jpeg, .png" class="border p-3 w-full rounded-lg">
                    </div>
                    <input type="submit" value="Modificar" class="btn-enviar-mod">
                </form>
            </div>
        </div>
    </main>
    @vite('resources/js/varios.js')
@endsection
