
@extends('layouts.shape1')

@section('title', 'Tu Biblioteca ')

@section('header')
    <x-header title="Biblioteca" activeli="this" ></x-header>
@endsection


@section('content')
    
    <main class="w-10/12 p-6 mt-40 mx-auto">
        
        <!--- Tttulo de Biblioteca  -->    
        <div class="title">
            <h2 class="font-titulo text-6xl font-bold text-white text-left my-3">Biblioteca</h2>
            <h4 class="font-titulo text-white opacity-80 text-3xl text-left">Hecha un vistazo a tu colección</h4>
        </div>


        <!--- Parte del contenido  --> 

        <div class="contenido">
            <div class="pestanias">

                <ul class="opciones text-2xl font-cuerpo">
                    <li class="opcion active-opcion" id="op1">Listas</li>
                    <li class="opcion albums-opcion remove" id="op2">Albums</li>
                    <li class="opcion artistas-opcion remove" id="op3">Artistas</li>
                    <li class="opcion favoritos-opcion remove" id="op4">Favoritos</li>
                </ul>

                <div class="line-1"></div>
            </div>

            <div class="contenedores">
                <div class="box-1 active anim2" id="caja-1">
                    <div class="content">
                        <div class="playList">
                            <img src="{{ asset('assets/artistas-pic/spider.jpg') }} " alt="Había una Imagen xD">
                            <h2 class= "font-cuerpo font-bold mt-4 text-lg">SpiderLove</h2>
                            <p class="description text-gray-400 font-cuerpo text-sm text-ellipsis">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus minima recusandae eaque similique, fuga, laboriosam adipisci debitis deserunt doloremque vel facilis inventore exercitationem eligendi molestiae perferendis, atque omnis! Perspiciatis, inventore!</p>
                        </div>
                        <div class="playList">
                            <img src="{{ asset('assets/artistas-pic/spider.jpg') }} " alt="Había una Imagen xD">
                            <h2 class= "font-cuerpo font-bold mt-4 text-lg">SpiderLove</h2>
                            <p class="description text-gray-400 font-cuerpo text-sm text-ellipsis">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus minima recusandae eaque similique, fuga, laboriosam adipisci debitis deserunt doloremque vel facilis inventore exercitationem eligendi molestiae perferendis, atque omnis! Perspiciatis, inventore!</p>
                        </div>
                        <div class="playList">
                            <img src="{{ asset('assets/artistas-pic/spider.jpg') }} " alt="Había una Imagen xD">
                            <h2 class= "font-cuerpo font-bold mt-4 text-lg">SpiderLove</h2>
                            <p class="description text-gray-400 font-cuerpo text-sm text-ellipsis">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus minima recusandae eaque similique, fuga, laboriosam adipisci debitis deserunt doloremque vel facilis inventore exercitationem eligendi molestiae perferendis, atque omnis! Perspiciatis, inventore!</p>
                        </div>
                        <div class="playList">
                            <img src="{{ asset('assets/artistas-pic/spider.jpg') }} " alt="Había una Imagen xD">
                            <h2 class= "font-cuerpo font-bold mt-4 text-lg">SpiderLove</h2>
                            <p class="description text-gray-400 font-cuerpo text-sm text-ellipsis">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus minima recusandae eaque similique, fuga, laboriosam adipisci debitis deserunt doloremque vel facilis inventore exercitationem eligendi molestiae perferendis, atque omnis! Perspiciatis, inventore!</p>
                        </div>
                        <div class="playList">
                            <img src="{{ asset('assets/artistas-pic/spider.jpg') }} " alt="Había una Imagen xD">
                            <h2 class= "font-cuerpo font-bold mt-4 text-lg">SpiderLove</h2>
                            <p class="description text-gray-400 font-cuerpo text-sm text-ellipsis">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus minima recusandae eaque similique, fuga, laboriosam adipisci debitis deserunt doloremque vel facilis inventore exercitationem eligendi molestiae perferendis, atque omnis! Perspiciatis, inventore!</p>
                        </div>
                        
                    </div>
                </div>

                <div class="box-2 anim2" id="caja-2">
                    <div class="content">
                        <div class="info albums">
                            <img src="{{ asset('assets/artistas-pic/house.png') }}"  alt="Había una Imagen xD">
                            <h2 class= "font-cuerpo font-bold mt-4 text-lg">Ed Sheeran</h2>
                            <p class="description text-gray-400 font-cuerpo text-sm text-ellipsis">Artista</p>
                        </div>
                        
                    </div>
                </div>

                <div class="box-3 anim2" id="caja-3">
                    <div class="content">
                        <div class="info artista">
                            <img src="{{ asset('assets/artistas-pic/ed_sheeran.jpg') }} " class="rounded-full" alt="Había una Imagen xD">
                            <h2 class= "font-cuerpo font-bold mt-4 text-lg">Ed Sheeran</h2>
                            <p class="description text-gray-400 font-cuerpo text-sm text-ellipsis">Artista</p>
                        </div>
                        
                        
                    </div>
                </div>

                <div class="box-4 anim2" id="caja-4">
                    <div class="content">
                        <div class="info favoritos">
                            <img src="{{ asset('assets/artistas-pic/ed_sheeran.jpg') }} " class="rounded-full" alt="Había una Imagen xD">
                            <h2 class= "font-cuerpo font-bold mt-4 text-lg">Ed Sheeran</h2>
                            <p class="description text-gray-400 font-cuerpo text-sm text-ellipsis">Artista</p>
                        </div>
                        
                        
                    </div>
                </div>
            </div>

        </div>       
        



    </main>
    @vite('resources/js/biblioteca.js')
@endsection