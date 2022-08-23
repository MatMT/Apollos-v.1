@extends('layouts.shape1')

@section('title', 'Artista')

@section('fondo', 'muralArtista')

@section('header')
    <x-header title="Artista"></x-header>
@endsection


@section('content')

    @vite('resources/css/artista.css')

    <div class="muralArtist">
        <img src="{{ asset('assets/artistas-pic/shawn_mural.jpg') }}" alt="">
    </div>
    <main class="contenedor w-10/12 tablet_3:w-11/12 my-2 mx-auto p-5">
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
                <div class="popular-songs-artist w-9/12 mx-1">
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

                        <div class="fila-content text-lg">
                            <div class="num-song">1</div>
                            <div class="picture-song"><img src="{{ asset('assets/canciones_img/shawn-whenyoure.jpeg') }}" alt="No carga imagen" class="w-[45px] mx-auto rounded"></div>
                            <div class="name-song"><span>It'll be ok</span><i class="fi fi-rs-heart" id="fav"></i></div>
                            <div class="artists-song"></div>
                            <div class="dur-song font-titulo">3:42</div>
                        </div>
                        <div class="fila-content text-lg">
                            <div class="num-song">2</div>
                            <div class="picture-song"><img src="{{ asset('assets/canciones_img/shawn-whenyoure.jpeg') }}" alt="No carga imagen" class="w-[45px] mx-auto rounded"></div>
                            <div class="name-song"><span>It'll be ok</span><i class="fi fi-rs-heart" id="fav"></i></div>
                            <div class="artists-song"></div>
                            <div class="dur-song font-titulo">3:42</div>
                        </div>
                        <div class="fila-content text-lg">
                            <div class="num-song font-titulo">3</div>
                            <div class="picture-song"><img src="{{ asset('assets/canciones_img/shawn-whenyoure.jpeg') }}" alt="No carga imagen" class="w-[45px] mx-auto rounded"></div>
                            <div class="name-song"><span>It'll be ok</span><i class="fi fi-rs-heart" id="fav"></i></div>
                            <div class="artists-song"></div>
                            <div class="dur-song font-titulo">3:42</div>
                        </div>
                        <div class="fila-content text-lg">
                            <div class="num-song">1</div>
                            <div class="picture-song"><img src="{{ asset('assets/canciones_img/shawn-whenyoure.jpeg') }}" alt="No carga imagen" class="w-[45px] mx-auto rounded"></div>
                            <div class="name-song"><span>It'll be ok</span><i class="fi fi-rs-heart" id="fav"></i></div>
                            <div class="artists-song"></div>
                            <div class="dur-song font-titulo">3:42</div>
                        </div>
                        <div class="fila-content text-lg">
                            <div class="num-song">2</div>
                            <div class="picture-song"><img src="{{ asset('assets/canciones_img/shawn-whenyoure.jpeg') }}" alt="No carga imagen" class="w-[45px] mx-auto rounded"></div>
                            <div class="name-song"><span>It'll be ok</span><i class="fi fi-rs-heart" id="fav"></i></div>
                            <div class="artists-song"></div>
                            <div class="dur-song font-titulo">3:42</div>
                        </div>
                        <div class="fila-content text-lg">
                            <div class="num-song font-titulo">3</div>
                            <div class="picture-song"><img src="{{ asset('assets/canciones_img/shawn-whenyoure.jpeg') }}" alt="No carga imagen" class="w-[45px] mx-auto rounded"></div>
                            <div class="name-song"><span>It'll be ok</span><i class="fi fi-rs-heart" id="fav"></i></div>
                            <div class="artists-song"></div>
                            <div class="dur-song font-titulo">3:42</div>
                        </div>
                        <div class="fila-content text-lg">
                            <div class="num-song">2</div>
                            <div class="picture-song"><img src="{{ asset('assets/canciones_img/shawn-whenyoure.jpeg') }}" alt="No carga imagen" class="w-[45px] mx-auto rounded"></div>
                            <div class="name-song"><span>It'll be ok</span><i class="fi fi-rs-heart" id="fav"></i></div>
                            <div class="artists-song"></div>
                            <div class="dur-song font-titulo">3:42</div>
                        </div>
                        <div class="fila-content text-lg">
                            <div class="num-song font-titulo">3</div>
                            <div class="picture-song"><img src="{{ asset('assets/canciones_img/shawn-whenyoure.jpeg') }}" alt="No carga imagen" class="w-[45px] mx-auto rounded"></div>
                            <div class="name-song"><span>It'll be ok</span><i class="fi fi-rs-heart" id="fav"></i></div>
                            <div class="artists-song"></div>
                            <div class="dur-song font-titulo">3:42</div>
                        </div>
                        <div class="fila-content text-lg">
                            <div class="num-song">2</div>
                            <div class="picture-song"><img src="{{ asset('assets/canciones_img/shawn-whenyoure.jpeg') }}" alt="No carga imagen" class="w-[45px] mx-auto rounded"></div>
                            <div class="name-song"><span>It'll be ok</span><i class="fi fi-rs-heart" id="fav"></i></div>
                            <div class="artists-song"></div>
                            <div class="dur-song font-titulo">3:42</div>
                        </div>
                        <div class="fila-content text-lg">
                            <div class="num-song font-titulo">3</div>
                            <div class="picture-song"><img src="{{ asset('assets/canciones_img/shawn-whenyoure.jpeg') }}" alt="No carga imagen" class="w-[45px] mx-auto rounded"></div>
                            <div class="name-song"><span>It'll be ok</span><i class="fi fi-rs-heart" id="fav"></i></div>
                            <div class="artists-song"></div>
                            <div class="dur-song font-titulo">3:42</div>
                        </div>
                    </div>
                    <div class="see_more text-white font-cuerpo font-light cursor-pointer"><p id="mostrar">Ver más</p></div>    
                    <div class="see_more text-white font-cuerpo font-light cursor-pointer"><p id="ocultar">Ocultar</p></div>             
                </div>

                <!-- Canciones FAVORITAS prpias del artista --->

                <div class="extra-info w-1/4">
                    <h3 class="text-white font-cuerpo font-extrabold text-3xl">Tus Gustos</h3>
                    <div class="list-favoritos">
                        <div class="list-songs-fav">
                            <div class="song-fv">
                                <img src="{{ asset('assets/canciones_img/shawn-whenyoure.jpeg') }}" alt="no cargó la imagen">
                                <div class="info-song">
                                    <p class="text-lg font-bold max-w-[114px] min-w-[110px] max-h-[56px]">It will be Ok</p>
                                    <p class="font-light opacity-7 max-w-[114px]  max-h-[28px]">Shawn Mendes</p>
                                </div>
                            </div>
                            <div class="song-fv">
                                <img src="{{ asset('assets/canciones_img/shawn-whenyoure.jpeg') }}" alt="no cargó la imagen">
                                <div class="info-song">
                                    <p class="text-lg font-bold max-w-[114px] min-w-[110px] max-h-[56px]">It will be Ok</p>
                                    <p class="font-light opacity-7 max-w-[114px]  max-h-[28px]">Shawn Mendes</p>
                                </div>
                            </div>
                            <div class="song-fv">
                                <img src="{{ asset('assets/canciones_img/shawn-whenyoure.jpeg') }}" alt="no cargó la imagen">
                                <div class="info-song">
                                    <p class="text-lg font-bold max-w-[114px] min-w-[110px] max-h-[56px]">It will be Ok</p>
                                    <p class="font-light opacity-7 max-w-[114px]  max-h-[28px]">Shawn Mendes</p>
                                </div>
                            </div>
                            <div class="song-fv">
                                <img src="{{ asset('assets/canciones_img/shawn-whenyoure.jpeg') }}" alt="no cargó la imagen">
                                <div class="info-song">
                                    <p class="text-lg font-bold max-w-[114px] min-w-[110px] max-h-[56px]">It will be Ok</p>
                                    <p class="font-light opacity-7 max-w-[114px]  max-h-[28px]">Shawn Mendes</p>
                                </div>
                            </div>
                            <div class="song-fv">
                                <img src="{{ asset('assets/canciones_img/shawn-whenyoure.jpeg') }}" alt="no cargó la imagen">
                                <div class="info-song">
                                    <p class="text-lg font-bold max-w-[114px] min-w-[110px] max-h-[56px]">It will be Ok</p>
                                    <p class="font-light opacity-7 max-w-[114px]  max-h-[28px]">Shawn Mendes</p>
                                </div>
                            </div>
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