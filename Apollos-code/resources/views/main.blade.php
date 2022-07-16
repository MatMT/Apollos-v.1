<x-layouts.layout title="Home" active_3="font-bold text-white" active="this" active_bg="bg-active_1">

    <h1 class="text-3xl font-bold underline text-white">
        Hello world!
    </h1>

</x-layouts>

    @vite('resources/css/home.css')

    <div class="box-views w-4/5 p-2 m-auto my-2 mb-8">

        <div class="post_1 w-full justify-around items-center">
            
            <div class="title-post w-3/5">
                <h1 class="font-titulo_2 text-7xl my-8 leading-tight text-white">Descubre tu Musica en nuevo Universo </h1>
                <div class="line w-28 h-0.5 bg-white mb-5"></div>
                <div class="line w-28 h-0.5 mb-1"></div>

                <a class="font-cuerpo font-thin text-3xl bg-morado_1 px-6 pt-1 pb-2 rounded-full drop-shadow-2xl mt-3 text-slate-300">Buenas noches {{ Auth::user()->name }}</a>
            </div>
            <!-- <div class="w-2/5 bg-planetas h-9/10 bg-cover mx-16 relative">
                <div class="austronauta bg-austro h-56 w-60 bg-cover absolute top-9 left-20"
                    style="animation: 2s ease-in-out 0s infinite alternate none running flotaraustro;"></div>
            </div> -->


        </div>

    </div>

    <main class="principal w-6/7 m-auto mt-9 pt-16 font-cuerpo">

        <h2 class="text-white text-3xl font-bold">Artistas que pueden ser para ti</h2>
        <div class="carrusel text-white">
            @include('partials.navigation')
        </div>

        <div class="carrusel"></div>
        <div class="carrusel"></div>

    </main>
