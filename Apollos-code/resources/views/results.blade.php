@extends('layouts.shape1')

@section('title', 'Home ')

@section('css')
    @vite('resources/css/results.css')
@endsection

@section('header')
    <x-header title="Home" active="this"></x-header>
@endsection

@section('content')
<div class="divisor_titulo mx-1 anim">
    <h3 class="font-cuerpo font-bold text-3xl text-white">Canciones</h3>
    </div>
    <div class="contenedor_lista">
        <div class="cancion_todo text-lg">
            <div class="imagen_cancion"><img loading="lazy" src="http://127.0.0.1:8000/assets/artistas-pic/shawn_album.jpg" alt="No carga imagen" class="w-[55px]  rounded min-w-[40px]"></div>
            <div class="nombre_cancion"><span>In My Blood</span></div>
            <div class="nombre_artista"><span>Shawn Mendez</span></div>
            <div class="sencillo"><span>Sencillo</span></div>
            <div class="tiempo_cancion">3:42</div>
        </div>
        <div class="cancion_todo text-lg">
            <div class="imagen_cancion"><img loading="lazy" src="http://127.0.0.1:8000/assets/artistas-pic/shawn_album.jpg" alt="No carga imagen" class="w-[55px]  rounded min-w-[40px]"></div>
            <div class="nombre_cancion"><span>In My Blood</span></div>
            <div class="nombre_artista"><span>Shawn Mendez</span></div>
            <div class="sencillo"><span>Sencillo</span></div>
            <div class="tiempo_cancion">3:42</div>
        </div>
        <div class="cancion_todo text-lg">
            <div class="imagen_cancion"><img loading="lazy" src="http://127.0.0.1:8000/assets/artistas-pic/shawn_album.jpg" alt="No carga imagen" class="w-[55px]  rounded min-w-[40px]"></div>
            <div class="nombre_cancion"><span>In My Blood</span></div>
            <div class="nombre_artista"><span>Shawn Mendez</span></div>
            <div class="sencillo"><span>Sencillo</span></div>
            <div class="tiempo_cancion">3:42</div>
        </div>
    </div>
    <div class="divisor_titulo mx-1 anim">
        <h3 class="font-cuerpo font-bold text-3xl text-white">Albums</h3>
        </div>
        <div class="contenedor_lista">
            <div class="album_todo text-lg">
                <div class="imagen_album"><img loading="lazy" src="http://127.0.0.1:8000/assets/artistas-pic/shawn_album.jpg" alt="No carga imagen" class="w-[55px]  rounded min-w-[40px]"></div>
                <div class="nombre_album"><span>In My Blood</span></div>
                <div class="nombre_artista"><span>Shawn Mendez</span></div>
                <div class="album"><span>Sencillo</span></div>
                <div class="tiempo_album">3:42</div>
            </div>
<div class="divisor_titulo  mx-1 anim">
<h3 class="font-cuerpo font-bold text-3xl text-white">Artistas</h3>
</div>
<div class="contenedor-artista">
<div class="mini-contenedor">
                                    <a href="" class="perfil_boton">
                                        <div class="imagen_pefil">
                                            <img src="{{asset('assets/img/profile.jpg')}}" alt="Imagen de Omar">
                                        </div>
                                        <div class="titulo_pefil">
                                            <div class="name font-titulo font-bold text-base desktop_2:text-sm">
                                                Omar
                                            </div>
                                            <div class="type text-base font-thin text-slate-300 desktop_2:text-base">
                                                Artista
                                            </div>
                                        </div>
                                    </a>
                                    <a href="" class="perfil_boton">
                                        <div class="imagen_pefil">
                                            <img src="{{asset('assets/img/profile.jpg')}}" alt="Imagen de Omar">
                                        </div>
                                        <div class="titulo_pefil">
                                            <div class="name font-titulo font-bold text-base desktop_2:text-sm">
                                                Omar
                                            </div>
                                            <div class="type text-base font-thin text-slate-300 desktop_2:text-base">
                                                Artista
                                            </div>
                                        </div>
                                    </a>
                                    <a href="" class="perfil_boton">
                                        <div class="imagen_pefil">
                                            <img src="{{asset('assets/img/profile.jpg')}}" alt="Imagen de Omar">
                                        </div>
                                        <div class="titulo_pefil">
                                            <div class="name font-titulo font-bold text-base desktop_2:text-sm">
                                                Omar
                                            </div>
                                            <div class="type text-base font-thin text-slate-300 desktop_2:text-base">
                                                Artista
                                            </div>
                                        </div>
                                    </a>
                                    <a href="" class="perfil_boton">
                                        <div class="imagen_pefil">
                                            <img src="{{asset('assets/img/profile.jpg')}}" alt="Imagen de Omar">
                                        </div>
                                        <div class="titulo_pefil">
                                            <div class="name font-titulo font-bold text-base desktop_2:text-sm">
                                                Omar
                                            </div>
                                            <div class="type text-base font-thin text-slate-300 desktop_2:text-base">
                                                Artista
                                            </div>
                                        </div>
                                    </a>
                                    <a href="" class="perfil_boton">
                                        <div class="imagen_pefil">
                                            <img src="{{asset('assets/img/profile.jpg')}}" alt="Imagen de Omar">
                                        </div>
                                        <div class="titulo_pefil">
                                            <div class="name font-titulo font-bold text-base desktop_2:text-sm">
                                                Omar
                                            </div>
                                            <div class="type text-base font-thin text-slate-300 desktop_2:text-base">
                                                Artista
                                            </div>
                                        </div>
                                    </a>  
                                    <a href="" class="perfil_boton">
                                        <div class="imagen_pefil">
                                            <img src="{{asset('assets/img/profile.jpg')}}" alt="Imagen de Omar">
                                        </div>
                                        <div class="titulo_pefil">
                                            <div class="name font-titulo font-bold text-base desktop_2:text-sm">
                                                Omar
                                            </div>
                                            <div class="type text-base font-thin text-slate-300 desktop_2:text-base">
                                                Artista
                                            </div>
                                        </div>
                                    </a>  
                                    <a href="" class="perfil_boton">
                                        <div class="imagen_pefil">
                                            <img src="{{asset('assets/img/profile.jpg')}}" alt="Imagen de Omar">
                                        </div>
                                        <div class="titulo_pefil">
                                            <div class="name font-titulo font-bold text-base desktop_2:text-sm">
                                                Omar
                                            </div>
                                            <div class="type text-base font-thin text-slate-300 desktop_2:text-base">
                                                Artista
                                            </div>
                                        </div>
                                    </a>  
                                    <a href="" class="perfil_boton">
                                        <div class="imagen_pefil">
                                            <img src="{{asset('assets/img/profile.jpg')}}" alt="Imagen de Omar">
                                        </div>
                                        <div class="titulo_pefil">
                                            <div class="name font-titulo font-bold text-base desktop_2:text-sm">
                                                Omar
                                            </div>
                                            <div class="type text-base font-thin text-slate-300 desktop_2:text-base">
                                                Artista
                                            </div>
                                        </div>
                                    </a>  
                                    <a href="" class="perfil_boton">
                                        <div class="imagen_pefil">
                                            <img src="{{asset('assets/img/profile.jpg')}}" alt="Imagen de Omar">
                                        </div>
                                        <div class="titulo_pefil">
                                            <div class="name font-titulo font-bold text-base desktop_2:text-sm">
                                                Omar
                                            </div>
                                            <div class="type text-base font-thin text-slate-300 desktop_2:text-base">
                                                Artista
                                            </div>
                                        </div>
                                    </a>  
                                    <a href="" class="perfil_boton">
                                        <div class="imagen_pefil">
                                            <img src="{{asset('assets/img/profile.jpg')}}" alt="Imagen de Omar">
                                        </div>
                                        <div class="titulo_pefil">
                                            <div class="name font-titulo font-bold text-base desktop_2:text-sm">
                                                Omar
                                            </div>
                                            <div class="type text-base font-thin text-slate-300 desktop_2:text-base">
                                                Artista
                                            </div>
                                        </div>
                                    </a>  
                                    <a href="" class="perfil_boton">
                                        <div class="imagen_pefil">
                                            <img src="{{asset('assets/img/profile.jpg')}}" alt="Imagen de Omar">
                                        </div>
                                        <div class="titulo_pefil">
                                            <div class="name font-titulo font-bold text-base desktop_2:text-sm">
                                                Omar
                                            </div>
                                            <div class="type text-base font-thin text-slate-300 desktop_2:text-base">
                                                Artista
                                            </div>
                                        </div>
                                    </a>  
                                    <a href="" class="perfil_boton">
                                        <div class="imagen_pefil">
                                            <img src="{{asset('assets/img/profile.jpg')}}" alt="Imagen de Omar">
                                        </div>
                                        <div class="titulo_pefil">
                                            <div class="name font-titulo font-bold text-base desktop_2:text-sm">
                                                Omar
                                            </div>
                                            <div class="type text-base font-thin text-slate-300 desktop_2:text-base">
                                                Artista
                                            </div>
                                        </div>
                                    </a>  
                                    <a href="" class="perfil_boton">
                                        <div class="imagen_pefil">
                                            <img src="{{asset('assets/img/profile.jpg')}}" alt="Imagen de Omar">
                                        </div>
                                        <div class="titulo_pefil">
                                            <div class="name font-titulo font-bold text-base desktop_2:text-sm">
                                                Omar
                                            </div>
                                            <div class="type text-base font-thin text-slate-300 desktop_2:text-base">
                                                Artista
                                            </div>
                                        </div>
                                    </a>  
                                    
                                </div>
</div>
@endsection

