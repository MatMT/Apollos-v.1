<x-layouts.layout title="Home" active_3="font-bold" active="this" active_bg="bg-active_1">

    <h1 class="text-3xl font-bold underline text-white">
        Hello world!
    </h1>
    </x-layouts>

    <link rel="stylesheet" href="{{ asset('css/home.css') }}">

    <!-- ... -->

    <div class="box-views w-full font-titulo text-white p-10">

        <div class="post_1 flex w-full justify-center h-72 items-center">
            <div class="title-post">
                <a class="font-bold text-3xl border p-3 rounded-lg box-content w-auto">Buenas Noches Mateo</a>
                <h1 class="font-black text-7xl my-7">Un Nuevo Mundo</h1>
                <h1 class="font-thin text-4xl">Para una nueva Aventura</h1>
            </div>
            <div class=" h-full w-100">
                <div class="bg-planetas h-full w-full bg-cover mx-16 relative">
                    <div class="austronauta bg-austro h-56 w-60 bg-cover absolute top-9 left-20"
                        style="animation: 2s ease-in-out 0s infinite alternate none running flotaraustro;"></div>
                </div>
            </div>
        </div>
        @include('partials.navigation')

    </div>
