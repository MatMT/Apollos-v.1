@extends('layouts.shape1')

@section('title', 'Home')

@section('header')
    <x-header title="Home" active_3="font-bold text-white" active="this" active_bg="bg-active_1">
        <h1 class="text-3xl font-bold underline text-white">
            Hello world!
        </h1>
    </x-header>
@endsection

@section('content')

    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>

    <div class="contenido_main">
        
        <div class="box-views w-4/5 p-2 m-auto  mb-8">

            <div class="post_1 w-full justify-around items-center">
                
                <div class="title-post w-3/5 laptop:w-4/5 anim2">
                    <h1 class="font-titulo_2 text-7xl my-8 leading-tight text-white desktop:text-6xl">Descubre tu Musica en nuevo Universo </h1>
                    <div class="line w-28 h-0.5 bg-white mb-5"></div>
                    <div class="line w-28 h-0.5 mb-1"></div>

                    <a class="font-cuerpo font-thin text-3xl laptop_2:text-2xl bg-morado_1 px-6 pt-1 pb-2 rounded-full drop-shadow-2xl mt-3 text-slate-300 cursor-default"><span id="saludo"></span> {{ Auth::user()->name }}!</a>
                </div>
                <!-- <div class="w-2/5 bg-planetas h-9/10 bg-cover mx-16 relative">
                    <div class="austronauta bg-austro h-56 w-60 bg-cover absolute top-9 left-20"
                        style="animation: 2s ease-in-out 0s infinite alternate none running flotaraustro;"></div>
                </div> -->


            </div>

        </div>

        <main class="principal w-6/7 m-auto mt-9 pt-16 font-cuerpo">

            <div class="main-content text-white anim2">
                <h2 class="text-white text-3xl font-bold">Artistas que pueden ser para ti</h2>

                <div class="contenedor-principal">
                    
                    <button rolle="button" id="flecha-izquierda"><i class="fi fi-rr-angle-left"></i></button>
                    
                    <div class="contenedor-carousel">
                        
                        <div class="carousel">
                            <div class="card drop-shadow-xl">
                                <a href="">
                                    <div class="imagen">
                                        <img src="{{ asset('assets/artistas-pic/ed_sheeran.jpg') }} " alt="Había una Imagen xD">
                                    </div>
                                    <div class="title">
                                        <div class="name font-titulo_2 text-lg desktop_2:text-base">Ed Sheeran</div>
                                        <div class="type text-lg font-thin text-slate-300 desktop_2:text-base">Artista</div>
                                    </div>
                                </a>
                            </div>
                            <div class="card drop-shadow-xl">
                                <a href="">
                                    <div class="imagen">
                                        <img src="{{ asset('assets/artistas-pic/Shawn_Mendez.jpg') }} " alt="Había una Imagen xD">
                                    </div>
                                    <div class="title">
                                        <div class="name font-titulo_2 text-lg desktop_2:text-base">Shawn Mendes</div>
                                        <div class="type text-lg font-thin text-slate-300 desktop_2:text-base">Artista</div>
                                    </div>
                                    
                                </a>
                            </div>
                            <div class="card drop-shadow-xl">
                                <a href="">
                                    <div class="imagen">
                                        <img src="{{ asset('assets/artistas-pic/The_weekend.jpg') }} " alt="Había una Imagen xD">
                                    </div>
                                    <div class="title">
                                        <div class="name font-titulo_2 text-lg desktop_2:text-base">The Weeknd</div>
                                        <div class="type text-lg font-thin text-slate-300 desktop_2:text-base">Artista</div>
                                    </div>
                                    
                                </a>
                            </div>
                            <div class="card drop-shadow-xl">
                                <a href="">
                                    <div class="imagen">
                                        <img src="{{ asset('assets/artistas-pic/charlie_p.jpg') }} " alt="Había una Imagen xD">
                                    </div>
                                    <div class="title">
                                        <div class="name font-titulo_2 text-lg desktop_2:text-base">Charlie Puth</div>
                                        <div class="type text-lg font-thin text-slate-300 desktop_2:text-base">Artista</div>
                                    </div>
                                    
                                </a>
                            </div>
                            <div class="card drop-shadow-xl">
                                <a href="">
                                    <div class="imagen">
                                        <img src="{{ asset('assets/artistas-pic/ed_sheeran.jpg') }} " alt="Había una Imagen xD">
                                    </div>
                                    <div class="title">
                                        <div class="name font-titulo_2 text-lg desktop_2:text-base">Ed Sheeran</div>
                                        <div class="type text-lg font-thin text-slate-300 desktop_2:text-base">Artista</div>
                                    </div>
                                    
                                </a>
                            </div>

                            <div class="card drop-shadow-xl">
                                <a href="">
                                    <div class="imagen">
                                        <img src="{{ asset('assets/artistas-pic/Shawn_Mendez.jpg') }} " alt="Había una Imagen xD">
                                    </div>
                                    <div class="title">
                                        <div class="name font-titulo_2 text-lg desktop_2:text-base">Shawn Mendes</div>
                                        <div class="type text-lg font-thin text-slate-300 desktop_2:text-base">Artista</div>
                                    </div>
                                    
                                </a>
                            </div>
                            <div class="card drop-shadow-xl">
                                <a href="">
                                    <div class="imagen">
                                        <img src="{{ asset('assets/artistas-pic/The_weekend.jpg') }} " alt="Había una Imagen xD">
                                    </div>
                                    <div class="title">
                                        <div class="name font-titulo_2 text-lg desktop_2:text-base">The Weeknd</div>
                                        <div class="type text-lg font-thin text-slate-300 desktop_2:text-base">Artista</div>
                                    </div>
                                    
                                </a>
                            </div>
                            <div class="card drop-shadow-xl">
                                <a href="">
                                    <div class="imagen">
                                        <img src="{{ asset('assets/artistas-pic/charlie_p.jpg') }} " alt="Había una Imagen xD">
                                    </div>
                                    <div class="title">
                                        <div class="name font-titulo_2 text-lg desktop_2:text-base">Charlie Puth</div>
                                        <div class="type text-lg font-thin text-slate-300 desktop_2:text-base">Artista</div>
                                    </div>
                                    
                                </a>
                            </div>
                        </div>
                    
                    </div>
                    
                    <button rolle="button" id="flecha-derecha"><i class="fi fi-rr-angle-right"></i></button>
                    
                </div>

            </div>

            

            <div class="carrusel"></div>
            <div class="carrusel"></div>
            
            @vite('resources/js/carrucel.js')

            <script>
                var lugar = document.getElementById("saludo");
                
                let datatime = new Date();
                let hour = parseInt(datatime.getHours()); 
                
                if(hour >= 5 && hour <=11){
                    //Escribir en html
                    lugar.innerHTML = "¡Buenos días";
                }else{
                    if(hour >= 12 && hour <=18){
                        lugar.innerHTML = "¡Buenas tardes";
                    }else{
                        lugar.innerHTML = "¡Buenas noches";
                    }
                }

            </script>

        </main>


    </div>
   
@endsection


