
<x-layouts.layout title="Home" active_3="font-bold" active="this" active_bg="bg-active_1">

    <h1 class="text-3xl font-bold underline text-white">
        Hello world!
    </h1>    
</x-layouts>

<link rel="stylesheet" href="{{ asset('css/home.css') }}">

<!-- ... -->

<div class="box-views w-full font-titulo text-white p-20">

    <div class="post_1 flex w-full justify-center">
        <div class="title-post">
            <h1 class="font-bold text-3xl">Buenas Noches Mateo</h1>
            <h1 class="font-black text-7xl ">Un Nuevo Mundo</h1>
            <h1 class="font-thin text-4xl">Para una nueva Aventura</h1>
        </div>
        <img src="{{asset('assets/img/austro.png') }}" alt="hola" loading="lazy" class="h-40">
    </div>

</div>


