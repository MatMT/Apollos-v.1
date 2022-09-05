@extends('layouts.shape1')

@section('title', 'Artista')

@section('fondo', 'muralArtista')

@section('fondonegro', 'no')

@section('header')
    <x-header title="Artista"></x-header>
@endsection


@section('content')

    @vite('resources/css/artista.css')


    <div class="muralArtist">
        <img src="{{ asset('assets/artistas-pic/shawn_mural.jpg') }}" alt="">
    </div>
    <main class="contenedor w-22/25 tablet_3:w-11/12 my-2 mx-auto p-5">
        <div class="apollos-info-artist mt-20 text-white">
            <div class="name-artist">
                <h3 class="font-titulo text-4xl font-light">Artista</h3>
                <h2 class="font-titulo_2 text-7xl my-2">Shawn Mendes</h2>
            </div>
            <div class="followers-artist">
                <h3 class="font-titulo text-3xl font-light">Seguidores <span>46 k</span></h3>
                <button class="follow-artist-btm font-titulo font-light text-xl">Seguir</button>
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

             <!-- Otros Carruceles para la página del Artista  -->
             <div class="albums-artistas mt-20">
                <div class="main-content text-white anim">

                    <h2 class="text-white text-3xl font-bold">Albums de Shawn Mendez</h2>

                    <div class="contenedor-principal slider-2">

                        <button rolle="button" id="flecha-izquierda"><i class="fi fi-rr-angle-left"></i></button>

                        <div class="contenedor-carousel">

                            <div class="carousel albums">

                                <!-- Datos estáticos -->

                                <div class="card drop-shadow-xl">
                                    <a href="">
                                        <div class="imagen albums">
                                            <img loading="lazy" src="{{ asset('assets/artistas-pic/wonder.jpg') }} " alt="Había una Imagen xD">
                                        </div>
                                        <div class="title">
                                            <div class="name font-titulo_2 font-light text-lg desktop_2:text-base">Wonder</div>
                                            <div class="type font-cuerpo text-base font-light text-slate-300 desktop_2:text-base">2020 • Album</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="card drop-shadow-xl">
                                    <a href="">
                                        <div class="imagen albums">
                                            <img loading="lazy" src="{{ asset('assets/artistas-pic/shawn_album.jpg') }} "
                                                alt="Había una Imagen xD">
                                        </div>
                                        <div class="title">
                                            <div class="name font-titulo_2 font-light text-lg desktop_2:text-base">Shawn Mendez</div>
                                            <div
                                                class="type font-cuerpo text-lg font-base text-slate-300 desktop_2:text-base">
                                                2018 • Album</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="card drop-shadow-xl">
                                    <a href="">
                                        <div class="imagen albums">
                                            <img loading="lazy" src="{{ asset('assets/artistas-pic/illuminate.jpg') }} " alt="Había una Imagen xD">
                                        </div>
                                        <div class="title">
                                            <div class="name font-titulo_2 font-light text-lg desktop_2:text-base">Illuminate</div>
                                            <div class="type font-cuerpo text-base font-light text-slate-300 desktop_2:text-base">2017 • Album</div>
                                        </div>
                                    </a>
                                </div>

                                

                            </div>
                        </div>
                        <!--contenedor-carousel --->
                        <button rolle="button" id="flecha-derecha"><i class="fi fi-rr-angle-right"></i></button>
                    </div>
                </div>

            </div>
            <div class="sencillos-artistas"></div>  


        </div>
    </main>

    @vite('resources/js/paginaArtista.js')

@endsection
