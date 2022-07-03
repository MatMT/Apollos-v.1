<!DOCTYPE html>
<html lang="es" class="h-screen w-screen">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Prueba' }}</title>

    <link href="{{ asset('css/tailwind.css') }}" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Montserrat+Alternates:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Righteous&display=swap"
        rel="stylesheet">

    @vite('resources/css/app.css')

    <link href="{{ asset('css/uicons-regular-straight/css/uicons-regular-straight.css') }}" rel="stylesheet">

</head>

<body class="bg-blur-back_2 bg-[length:100%_100%] bg-no-repeat bg-cover">

    {{-- se utliza $slot para incluir contenido propio de un página web, y las etiquetas x-"demás" para involucrar componentes --}}

    <header class="p-5 text-white ">

        <div class="box-header w-full h-28 flex items-center justify-between p-5">

            <h1 class="font-logo mx-8 text-3xl">Apollo's</h1>

            <ul class="flex mx-10 text-lg items-center">

                <li
                    class="mx-8 {{ $active_2 ?? 'font-normal' }} {{ $active ?? 'normal' }} {{ $active_bg ?? '' }}">
                    <a href="{{ route('main') }}"><i class="fi fi-rs-home"></i>Home</a></li>
                <li class="mx-8"><a href="{{ route('biblioteca') }}"><i class="fi fi-rs-apps"></i></i>Tu
                        Biblioteca</a></li>
                <li class="mx-8"><a href=""><i class="fi fi-rs-music"></i>Crear PlayList</a></li>
                <li class="mx-8"><a href="{{ route('artista') }}"><i class="fi fi-rs-search"></i></i>Buscar</a></li>
            </ul>

            <div class="profile flex h-3/4 items-center mx-5">
                <h2 class="font-titulo w-32 border-r-2 border-zinc-50 mr-10">{{ Auth::user()->name }}</h2>
                <img src="{{ asset('assets/img/profile.jpg') }}" alt="img" class="h-full rounded-full">
            </div>


        </div>
    </header>

</body>

</html>
