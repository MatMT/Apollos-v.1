@extends('layouts.shape1')

@section('title', 'Playlist ')


@section('header')
    <x-header title="Playlist"></x-header>
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
                    <h2 class="font-titulo_2 text-6xl my-2 xl:text-7xl">Mi Playlist</h2>
                </div>
                <div class="followers-artist">
                    <h3 class="font-titulo text-2xl font-light xl:text-3xl">Seguidores <span>46 k</span></h3>
                    <button class="play-list-btm font-cuerpo font-light text-xl">Escuchar</button>
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

                        <div class="fila-content-v text-lg" href="" id="song">
                            <div class="num-song font-titulo">1</div>
                            <div class="picture-song"><img loading="lazy" src="{{ asset('assets/artistas-pic/illuminate.jpg') }}" alt="No carga imagen" class="w-[45px] mx-auto rounded"></div>
                            <div class="name-song"><span>There's Nothing Holdin' Me Back</span><i class="fi fi-rs-heart" id="fav"></i></div>
                            <div class="artists-song">Shawn Mendes</div>
                            <div class="dur-song font-titulo">3:42</div>
                        </div>
                        <div class="fila-content-v text-lg">
                            <div class="num-song font-titulo">2</div>
                            <div class="picture-song"><img loading="lazy" src="{{ asset('assets/canciones_img/shawn-whenyoure.jpeg') }}" alt="No carga imagen" class="w-[45px] mx-auto rounded"></div>
                            <div class="name-song"><span>When You're gone</span><i class="fi fi-rs-heart" id="fav"></i></div>
                            <div class="artists-song font">Shawn Mendes</div>
                            <div class="dur-song font-titulo">3:42</div>
                        </div>
                        <div class="fila-content-v text-lg">
                            <div class="num-song font-titulo">3</div>
                            <div class="picture-song"><img loading="lazy" src="{{ asset('assets/artistas-pic/illuminate.jpg') }}" alt="No carga imagen" class="w-[45px] mx-auto rounded"></div>
                            <div class="name-song"><span>Treat You better</span><i class="fi fi-rs-heart" id="fav"></i></div>
                            <div class="artists-song">Shawn Mendes</div>
                            <div class="dur-song font-titulo">3:42</div>
                        </div>
                        <div class="fila-content-v text-lg">
                            <div class="num-song font-titulo">4</div>
                            <div class="picture-song"><img loading="lazy" src="{{ asset('assets/canciones_img/shawn-whenyoure.jpeg') }}" alt="No carga imagen" class="w-[45px] mx-auto rounded"></div>
                            <div class="name-song"><span>Summer of Love</span><i class="fi fi-rs-heart" id="fav"></i></div>
                            <div class="artists-song">Shawn Mendes</div>
                            <div class="dur-song font-titulo">3:42</div>
                        </div>
                        <div class="fila-content-v text-lg">
                            <div class="num-song font-titulo">5</div>
                            <div class="picture-song"><img loading="lazy" src="{{ asset('assets/artistas-pic/shawn_album.jpg') }}" alt="No carga imagen" class="w-[45px] mx-auto rounded"></div>
                            <div class="name-song"><span>Señorita</span><i class="fi fi-rs-heart" id="fav"></i></div>
                            <div class="artists-song">Shawn Mendes</div>
                            <div class="dur-song font-titulo">3:42</div>
                        </div>
                        <div class="fila-content-v text-lg">
                            <div class="num-song font-titulo">6</div>
                            <div class="picture-song"><img loading="lazy" src="{{ asset('assets/canciones_img/shawn-whenyoure.jpeg') }}" alt="No carga imagen" class="w-[45px] mx-auto rounded"></div>
                            <div class="name-song"><span>Mercy</span><i class="fi fi-rs-heart" id="fav"></i></div>
                            <div class="artists-song">Shawn Mendes</div>
                            <div class="dur-song font-titulo">3:42</div>
                        </div>
                        <div class="fila-content-v text-lg">
                            <div class="num-song font-titulo">7</div>
                            <div class="picture-song"><img loading="lazy" src="{{ asset('assets/canciones_img/shawn-whenyoure.jpeg') }}" alt="No carga imagen" class="w-[45px] mx-auto rounded"></div>
                            <div class="name-song"><span>It'll be ok</span><i class="fi fi-rs-heart" id="fav"></i></div>
                            <div class="artists-song">Shawn Mendes</div>
                            <div class="dur-song font-titulo">3:42</div>
                        </div>
                        <div class="fila-content-v text-lg">
                            <div class="num-song font-titulo">8</div>
                            <div class="picture-song"><img loading="lazy" src="{{ asset('assets/canciones_img/shawn-whenyoure.jpeg') }}" alt="No carga imagen" class="w-[45px] mx-auto rounded"></div>
                            <div class="name-song"><span>KESI - Remix</span><i class="fi fi-rs-heart" id="fav"></i></div>
                            <div class="artists-song">Shawn Mendes</div>
                            <div class="dur-song font-titulo">3:42</div>
                        </div>
                        <div class="fila-content-v text-lg">
                            <div class="num-song font-titulo">9</div>
                            <div class="picture-song"><img loading="lazy" src="{{ asset('assets/artistas-pic/shawn_album.jpg') }}" alt="No carga imagen" class="w-[45px] mx-auto rounded"></div>
                            <div class="name-song"><span>In My Blood</span><i class="fi fi-rs-heart" id="fav"></i></div>
                            <div class="artists-song">Shawn Mendes</div>
                            <div class="dur-song font-titulo">3:42</div>
                        </div>

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
                        <div class="list-songs-choose text-white font-cuerpo">
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
    </main>
@endsection
