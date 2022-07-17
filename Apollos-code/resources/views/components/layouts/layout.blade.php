<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Prueba' }}</title>


    @vite('resources/css/app.css')
    

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Montserrat+Alternates:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Righteous&display=swap" rel="stylesheet">
    
    <link href="https://fonts.googleapis.com/css2?family=Paytone+One&display=swap" rel="stylesheet">

    @vite('resources/css/styles.css')
    @vite('resources/css/home.css')

    <link href="{{ asset('css/uicons-regular-straight/css/uicons-regular-straight.css') }}" rel="stylesheet">

</head>

<body class="bg-black bg-no-repeat bg-cover">

    {{-- se utliza $slot para incluir contenido propio de un página web, y las etiquetas x-"demás" para involucrar componentes --}}

    <header class="py-3 px-8 text-white ">

        <div class="box-header w-full h-28 flex items-center justify-between py-4 px-5">

            <a href="#" class="font-logo mx-8 text-3xl tablet_5:mx-5 tablet_5:text-2xl">Apollo's</a>

            <ul class="flex my-10 mx-10 text-base items-center font-cuerpo text-center tablet_5:mx-auto">

                <li
                    class="mx-8 {{ $active_2 ?? 'font-normal' }} {{ $active ?? 'normal' }} {{ $active_bg ?? '' }}  ">
                    <a href="{{ route('main') }}"><i class="fi fi-rs-home"></i><span class="tablet_3:hidden">Home</span></a>
                </li>
                <li class="mx-8 text-stone-300"><a href="{{ route('biblioteca') }}"><i class="fi fi-rs-apps"></i></i><span class="tablet_3:hidden">Tu Biblioteca</span></a></li>
                <li class="mx-8 text-stone-300"><a href=""><i class="fi fi-rs-music"></i><span class="tablet_3:hidden">Crear PlayList</span></a></li>
                <li class="mx-8 text-stone-300"><a href="{{ route('artista') }}"><i class="fi fi-rs-search"></i><span class="tablet_3:hidden">Buscar</span></a></li>
            </ul>

            <div class="profile flex h-3/4 items-center mx-5 ">
                <a href="{{ route('posts.index', auth()->user()) }}"class="font-titulo mr-5 w-28 text-right laptop:hidden">{{ Auth::user()->name }}</a>
                <a href="" class="h-11"><img src="{{ asset('assets/img/profile.jpg') }}" alt="img"class="h-11 min-w-[44px]  rounded-full border-slate-400"></a>
            </div>


        </div>
    </header>


    <div class="reproductor">

    </div>

</body>

</html>
