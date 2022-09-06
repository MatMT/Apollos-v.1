<!DOCTYPE html>
<html lang="es" id="screen">

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

    @livewireStyles

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
    
    
    {{-- BUSCADOR --}}
    <div class="overway_2" id="overlay_2">
        <div class="buscador" id="popup_2">
            <div class="btn-close"><i class="fi fi-rr-cross" id="btn-close"></i> </div>
            <h2 class="text-xl font-cuerpo font-bold mb-7 text-center">{{__('Discover something new')}}</h2>
            {{-- Buscador Reactivo --}}
            <livewire:buscador-resultados />
        </div>
    </div>

    @stack('script_end')

    @livewireScripts
</body>

@vite('resources/js/menu.js')
@vite('resources/js/popup-buscador.js')

</html>
