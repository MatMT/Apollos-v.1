@extends('layouts.shape1')

@section('title', 'Playlist ')


@section('header')
    <x-header title="Playlist"></x-header>
@endsection



@section('content')

    @vite('resources/css/varios.css')

    <main class="contenedor w-22/25 tablet_3:w-11/12 my-2 mx-auto p-5">
        
        <div class="info-play-list">
            <div class="img-play-list">
                <img src="" alt="">
            </div>
            <div class="apollos-info-artist mt-10 text-white">
                <div class="name-artist">
                    <h3 class="font-titulo text-4xl font-light">Playlist</h3>
                    <h2 class="font-titulo_2 text-7xl my-2">Mi Playlist</h2>
                </div>
                <div class="followers-artist">
                    <h3 class="font-titulo text-3xl font-light">Seguidores <span>46 k</span></h3>
                    <button class="follow-artist-btm font-titulo font-light text-xl">Seguir</button>
                </div>
            </div>
        </div>
        

        <div class="content-music-artist w-full mt-10">
            <div class="section_1 w-full flex">

            <div class="popular-songs-artist w-7/10 mx-1 anim">
                    <h3 class="font-cuerpo font-bold text-3xl text-white">Populares</h3>
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

                        <div class="fila-content text-lg" href="" id="song">
                            <div class="num-song font-titulo">1</div>
                            <div class="picture-song"><img loading="lazy" src="{{ asset('assets/artistas-pic/illuminate.jpg') }}" alt="No carga imagen" class="w-[45px] mx-auto rounded"></div>
                            <div class="name-song"><span>There's Nothing Holdin' Me Back</span><i class="fi fi-rs-heart" id="fav"></i></div>
                            <div class="artists-song"></div>
                            <div class="dur-song font-titulo">3:42</div>
                        </div>
                        <div class="fila-content text-lg">
                            <div class="num-song font-titulo">2</div>
                            <div class="picture-song"><img loading="lazy" src="{{ asset('assets/canciones_img/shawn-whenyoure.jpeg') }}" alt="No carga imagen" class="w-[45px] mx-auto rounded"></div>
                            <div class="name-song"><span>When You're gone</span><i class="fi fi-rs-heart" id="fav"></i></div>
                            <div class="artists-song"></div>
                            <div class="dur-song font-titulo">3:42</div>
                        </div>
                        <div class="fila-content text-lg">
                            <div class="num-song font-titulo">3</div>
                            <div class="picture-song"><img loading="lazy" src="{{ asset('assets/artistas-pic/illuminate.jpg') }}" alt="No carga imagen" class="w-[45px] mx-auto rounded"></div>
                            <div class="name-song"><span>Treat You better</span><i class="fi fi-rs-heart" id="fav"></i></div>
                            <div class="artists-song"></div>
                            <div class="dur-song font-titulo">3:42</div>
                        </div>
                        <div class="fila-content text-lg">
                            <div class="num-song font-titulo">4</div>
                            <div class="picture-song"><img loading="lazy" src="{{ asset('assets/canciones_img/shawn-whenyoure.jpeg') }}" alt="No carga imagen" class="w-[45px] mx-auto rounded"></div>
                            <div class="name-song"><span>Summer of Love</span><i class="fi fi-rs-heart" id="fav"></i></div>
                            <div class="artists-song"></div>
                            <div class="dur-song font-titulo">3:42</div>
                        </div>
                        <div class="fila-content text-lg">
                            <div class="num-song font-titulo">5</div>
                            <div class="picture-song"><img loading="lazy" src="{{ asset('assets/artistas-pic/shawn_album.jpg') }}" alt="No carga imagen" class="w-[45px] mx-auto rounded"></div>
                            <div class="name-song"><span>Señorita</span><i class="fi fi-rs-heart" id="fav"></i></div>
                            <div class="artists-song"></div>
                            <div class="dur-song font-titulo">3:42</div>
                        </div>
                        <div class="fila-content text-lg">
                            <div class="num-song font-titulo">6</div>
                            <div class="picture-song"><img loading="lazy" src="{{ asset('assets/canciones_img/shawn-whenyoure.jpeg') }}" alt="No carga imagen" class="w-[45px] mx-auto rounded"></div>
                            <div class="name-song"><span>Mercy</span><i class="fi fi-rs-heart" id="fav"></i></div>
                            <div class="artists-song"></div>
                            <div class="dur-song font-titulo">3:42</div>
                        </div>
                        <div class="fila-content text-lg">
                            <div class="num-song font-titulo">7</div>
                            <div class="picture-song"><img loading="lazy" src="{{ asset('assets/canciones_img/shawn-whenyoure.jpeg') }}" alt="No carga imagen" class="w-[45px] mx-auto rounded"></div>
                            <div class="name-song"><span>It'll be ok</span><i class="fi fi-rs-heart" id="fav"></i></div>
                            <div class="artists-song"></div>
                            <div class="dur-song font-titulo">3:42</div>
                        </div>
                        <div class="fila-content text-lg">
                            <div class="num-song font-titulo">8</div>
                            <div class="picture-song"><img loading="lazy" src="{{ asset('assets/canciones_img/shawn-whenyoure.jpeg') }}" alt="No carga imagen" class="w-[45px] mx-auto rounded"></div>
                            <div class="name-song"><span>KESI - Remix</span><i class="fi fi-rs-heart" id="fav"></i></div>
                            <div class="artists-song"></div>
                            <div class="dur-song font-titulo">3:42</div>
                        </div>
                        <div class="fila-content text-lg">
                            <div class="num-song font-titulo">9</div>
                            <div class="picture-song"><img loading="lazy" src="{{ asset('assets/artistas-pic/shawn_album.jpg') }}" alt="No carga imagen" class="w-[45px] mx-auto rounded"></div>
                            <div class="name-song"><span>In My Blood</span><i class="fi fi-rs-heart" id="fav"></i></div>
                            <div class="artists-song"></div>
                            <div class="dur-song font-titulo">3:42</div>
                        </div>

                    </div>
                    <div class="see_more text-white font-cuerpo font-light cursor-pointer"><p id="mostrar">Ver más</p></div>    
                    <div class="see_more text-white font-cuerpo font-light cursor-pointer"><p id="ocultar">Ocultar</p></div>             
                </div>

                <!-- Canciones FAVORITAS prpias del artista --->

                <div class="extra-info w-1/4">

                    <div class="list-favoritos w-full">
                        <h3 class="text-white font-cuerpo font-extrabold text-3xl ml-3">Tus Gustos</h3>
                        <div class="list-songs-fav">
                            <div class="song-fv">
                                <img src="{{ asset('assets/canciones_img/shawn-whenyoure.jpeg') }}"
                                    alt="no cargó la imagen">
                                <div class="info-song">
                                    <p class="text-lg font-bold max-w-[114px] min-w-[110px] max-h-[56px]">It will be Ok</p>
                                    <p class="font-light opacity-70 max-w-[114px]  max-h-[28px]">Shawn Mendes</p>
                                </div>
                            </div>
                            <div class="song-fv">
                                <img src="{{ asset('assets/canciones_img/shawn-whenyoure.jpeg') }}"
                                    alt="no cargó la imagen">
                                <div class="info-song">
                                    <p class="text-lg font-bolt">It will be Ok</p>
                                    <p class="font-light opacity-70  max-h-[28px]">Shawn Mendes</p>
                                </div>
                            </div>
                            <div class="song-fv">
                                <img src="{{ asset('assets/canciones_img/shawn-whenyoure.jpeg') }}"
                                    alt="no cargó la imagen">
                                <div class="info-song">
                                    <p class="text-lg font-bold max-w-[114px] min-w-[110px] max-h-[56px]">It will be Ok</p>
                                    <p class="font-light opacity-70 max-w-[114px]  max-h-[28px]">Shawn Mendes</p>
                                </div>
                            </div>
                            <div class="song-fv">
                                <img src="{{ asset('assets/canciones_img/shawn-whenyoure.jpeg') }}"
                                    alt="no cargó la imagen">
                                <div class="info-song">
                                    <p class="text-lg font-bold max-w-[114px] min-w-[110px] max-h-[56px]">It will be Ok</p>
                                    <p class="font-light opacity-70 max-w-[114px]  max-h-[28px]">Shawn Mendes</p>
                                </div>
                            </div>
                            <div class="song-fv">
                                <img src="{{ asset('assets/canciones_img/shawn-whenyoure.jpeg') }}"
                                    alt="no cargó la imagen">
                                <div class="info-song">
                                    <p class="text-lg font-bold max-w-[114px] min-w-[110px] max-h-[56px]">It will be Ok</p>
                                    <p class="font-light opacity-70 max-w-[114px]  max-h-[28px]">Shawn Mendes</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </main>
@endsection
