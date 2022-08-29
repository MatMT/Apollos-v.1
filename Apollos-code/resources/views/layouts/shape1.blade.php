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
        <div class="player activer" id="player">
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



</body>
@vite('resources/js/menu.js')
@vite('resources/js/popup-buscador.js')


</html>
