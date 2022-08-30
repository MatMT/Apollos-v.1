<!DOCTYPE html>
<html lang="en" id="screen">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Montserrat+Alternates:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Righteous&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Paytone+One&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="{{ asset('css/uicons-regular-straight/css/uicons-regular-straight.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('assets/favicon.png') }}" type="image/x-icon">


    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-bold-rounded/css/uicons-bold-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-solid-rounded/css/uicons-solid-rounded.css'>
    @vite('resources/css/app.css')
    @vite('resources/css/styles.css')
    @vite('resources/css/home.css')
    @vite('resources/css/library.css')
    @vite('resources/js/header.js')

    @yield('css', '')
    @yield('js', '')
    @stack('script')

    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>

    <title>@yield('title')| Apollo's</title>
</head>

<body class="" id="section-scroll">

    <div class="@yield('fondo', 'background')"></div>

    <div class="@yield('fondonegro', 'black-cover')"></div>

    {{-- Se incluirá la Barra del MENU --}}

    @yield('header')

    {{-- Se incluirá el contenido de la página en particular --}}

    @yield('content')

    {{-- Mi reproductor de música --}}

    <footer>
        <div class="lista-reproduccion" id="list">
            <div class="space-content" id="canciones-lista">
                <div class="song-playing">
                    <img src="{{ asset('assets/artistas-pic/house.png') }} " alt="Canción" class="">
                </div>
                <div class="songs-list-then">
                    <h2 class="text-white text-left text-xl font-bold ml-3 mb-4">Lista de Reproducción</h2>
                    
                    <div class="line-white w-19/20 h-[1px] bg-white mt-2 opacity-50"></div>
                    
                    <div class="lista-canciones w-full mx-1 anim">
                        
                        <div class="songs-list-r">
                            
                            <table class="title-table w-19/20 mt-8">
                                <tr class="fila-hight-r text-lg opacity-70">
                                    <td class="num-song">#</td>
                                    <td class="picture-song"></td>
                                    <td class="name-song">NOMBRE</td>
                                    <td class="artists-song"></td>
                                    <td class="dur-song">DURACIÓN</td>
                                </tr>
                            </table>

                            <div class="fila-content-l text-lg" href="" id="song">
                                <div class="num-song font-titulo">1</div>
                                <div class="picture-song"><img loading="lazy" src="{{ asset('assets/artistas-pic/illuminate.jpg') }}" alt="No carga imagen" class="w-[45px] mx-auto rounded min-w-[40px]"></div>
                                <div class="name-song"><span>There's Nothing Holdin' Me Back</span><i class="fi fi-rs-heart" id="fav"></i></div>
                                <div class="artists-song"></div>
                                <div class="dur-song font-titulo">3:42</div>
                            </div>
                            <div class="fila-content-l text-lg">
                                <div class="num-song font-titulo">2</div>
                                <div class="picture-song"><img loading="lazy" src="{{ asset('assets/canciones_img/shawn-whenyoure.jpeg') }}" alt="No carga imagen" class="w-[45px] mx-auto rounded min-w-[40px]"></div>
                                <div class="name-song"><span>When You're gone</span><i class="fi fi-rs-heart" id="fav"></i></div>
                                <div class="artists-song"></div>
                                <div class="dur-song font-titulo">3:42</div>
                            </div>
                            <div class="fila-content-l text-lg">
                                <div class="num-song font-titulo">3</div>
                                <div class="picture-song"><img loading="lazy" src="{{ asset('assets/artistas-pic/illuminate.jpg') }}" alt="No carga imagen" class="w-[45px] mx-auto rounded min-w-[40px] min-w-[40px]"></div>
                                <div class="name-song"><span>Treat You better</span><i class="fi fi-rs-heart" id="fav"></i></div>
                                <div class="artists-song"></div>
                                <div class="dur-song font-titulo">3:42</div>
                            </div>
                            <div class="fila-content-l text-lg">
                                <div class="num-song font-titulo">4</div>
                                <div class="picture-song"><img loading="lazy" src="{{ asset('assets/canciones_img/shawn-whenyoure.jpeg') }}" alt="No carga imagen" class="w-[45px] mx-auto rounded min-w-[40px]"></div>
                                <div class="name-song"><span>Summer of Love</span><i class="fi fi-rs-heart" id="fav"></i></div>
                                <div class="artists-song"></div>
                                <div class="dur-song font-titulo">3:42</div>
                            </div>
                            <div class="fila-content-l text-lg">
                                <div class="num-song font-titulo">5</div>
                                <div class="picture-song"><img loading="lazy" src="{{ asset('assets/artistas-pic/shawn_album.jpg') }}" alt="No carga imagen" class="w-[45px] mx-auto rounded min-w-[40px]"></div>
                                <div class="name-song"><span>Señorita</span><i class="fi fi-rs-heart" id="fav"></i></div>
                                <div class="artists-song"></div>
                                <div class="dur-song font-titulo">3:42</div>
                            </div>
                            <div class="fila-content-l text-lg">
                                <div class="num-song font-titulo">6</div>
                                <div class="picture-song"><img loading="lazy" src="{{ asset('assets/canciones_img/shawn-whenyoure.jpeg') }}" alt="No carga imagen" class="w-[45px] mx-auto rounded min-w-[40px]"></div>
                                <div class="name-song"><span>Mercy</span><i class="fi fi-rs-heart" id="fav"></i></div>
                                <div class="artists-song"></div>
                                <div class="dur-song font-titulo">3:42</div>
                            </div>
                            <div class="fila-content-l text-lg">
                                <div class="num-song font-titulo">7</div>
                                <div class="picture-song"><img loading="lazy" src="{{ asset('assets/canciones_img/shawn-whenyoure.jpeg') }}" alt="No carga imagen" class="w-[45px] mx-auto rounded min-w-[40px]"></div>
                                <div class="name-song"><span>It'll be ok</span><i class="fi fi-rs-heart" id="fav"></i></div>
                                <div class="artists-song"></div>
                                <div class="dur-song font-titulo">3:42</div>
                            </div>
                            <div class="fila-content-l text-lg">
                                <div class="num-song font-titulo">8</div>
                                <div class="picture-song"><img loading="lazy" src="{{ asset('assets/canciones_img/shawn-whenyoure.jpeg') }}" alt="No carga imagen" class="w-[45px] mx-auto rounded min-w-[40px]"></div>
                                <div class="name-song"><span>KESI - Remix</span><i class="fi fi-rs-heart" id="fav"></i></div>
                                <div class="artists-song"></div>
                                <div class="dur-song font-titulo">3:42</div>
                            </div>
                            <div class="fila-content-l text-lg">
                                <div class="num-song font-titulo">9</div>
                                <div class="picture-song"><img loading="lazy" src="{{ asset('assets/artistas-pic/shawn_album.jpg') }}" alt="No carga imagen" class="w-[45px] mx-auto rounded min-w-[40px]"></div>
                                <div class="name-song"><span>In My Blood</span><i class="fi fi-rs-heart" id="fav"></i></div>
                                <div class="artists-song"></div>
                                <div class="dur-song font-titulo">3:42</div>
                            </div>
                            <div class="fila-content-l text-lg">
                                <div class="num-song font-titulo">8</div>
                                <div class="picture-song"><img loading="lazy" src="{{ asset('assets/canciones_img/shawn-whenyoure.jpeg') }}" alt="No carga imagen" class="w-[45px] mx-auto rounded min-w-[40px]"></div>
                                <div class="name-song"><span>KESI - Remix</span><i class="fi fi-rs-heart" id="fav"></i></div>
                                <div class="artists-song"></div>
                                <div class="dur-song font-titulo">3:42</div>
                            </div>
                            <div class="fila-content-l text-lg">
                                <div class="num-song font-titulo">9</div>
                                <div class="picture-song"><img loading="lazy" src="{{ asset('assets/artistas-pic/shawn_album.jpg') }}" alt="No carga imagen" class="w-[45px] mx-auto rounded min-w-[40px]"></div>
                                <div class="name-song"><span>In My Blood</span><i class="fi fi-rs-heart" id="fav"></i></div>
                                <div class="artists-song"></div>
                                <div class="dur-song font-titulo">3:42</div>
                            </div>

                        </div>            
                    </div>
                </div>
            </div>
        </div>
        <div class="player" id="player">
        
            <button rolle="button" id="show" class="show-list-btn"><i class="fi fi-rr-angle-left"></i></button>
            <button rolle="button" id="hidde" class="hidde-list-btn hidden"><i class="fi fi-rr-angle-right"></i></button>
            <div class="cancion">
                
                <span class="white-circule"></span>
                <img src="{{ asset('assets/artistas-pic/house.png') }} " alt="Canción" class="">
            </div>
            <div class="info-cancion">
                <h2 class="font-cuerpo font-bold text-lg">Late Night Talking</h2>
                <h3 class="font-cuerpo font-light opacity-60">Harry Styles</h3>
            </div>
            <div class="line-time-song hidden">
                <div class="line-time">
                    <div class="line-progress"></div>
                </div>
                <div class="time-num flex justify-between opacity-60 text-sm w-19/20 mt-2">
                    <span>0:50</span><span>3:15</span>
                </div>
            </div>
            <div class="controles">
                
                <i class="fi fi-rr-heart text-xl opacity-50 transition-all hover:opacity-100"></i>
                <i class="fi fi-sr-heart text-xl text-red-400 hidden "></i>

                <!-- PLay and Pause -->
                <div class="controladores">
                    <i class="fi fi-rr-angle-double-small-left text-2xl mr-2"></i>
                    <div class="rombo">
                        <i class="fi fi-sr-play text-xl hidden"></i>
                        <i class="fi fi-sr-pause text-xl "></i>
                    </div>
                    <i class="fi fi-rr-angle-double-small-right text-2xl ml-2"></i>
                </div>
                
            </div>
        </div>
    </footer>

    <div class="overway_2" id="overlay_2">
        <div class="buscador" id="popup_2">
            <div class="btn-close"><i class="fi fi-rr-cross" id="btn-close"></i> </div>
            <h2 class="text-xl font-cuerpo font-bold mb-7">Busca Algo</h2>
            <form action="">
                <div class="contenedor-input">
                    <i class="fi fi-rs-search text-xl mx-2 mr-4"></i>
                    <input type="text" name="" id="" placeholder="Buscar Artista, canción, álbum">
                </div>
            </form>
            <div class="resultados">No se han obtenido resultados</div>
        </div>
    </div>

    @stack('script_end')


</body>
@vite('resources/js/menu.js')
@vite('resources/js/popup-buscador.js')


</html>
