@extends('layouts.shape1')

@section('title'){{ $user->name }} @endsection
@section('css') @vite('resources/css/profileStyles.css') @endsection

@section('header') <x-header></x-header> @endsection



@section('content')
    <div class="center-user-section flex items-center justify-center font-titulo">
        <div class="user-section rounded-bl-3xl rounded-br-3xl px-20">
            <div class="user-section-content mt-32 text-white">

                <div class="user-info text-lg">
                    <h1 class="user-type">
                        @if ($user->rol == 'artist')
                            <h1>Artista</h1>
                        @else
                            @if ($user->rol == 'user')
                                <h1>Usuario</h1>
                            @endif
                        @endif
                    </h1>
    
                    <h1 class="username first-letter:uppercase font-titulo text-7xl font-bold">
                        {{ $user->name_artist }}
                    </h1>
                    
                    <h1 class="followers">0 Seguidores</h1>
    
                    @if ($user->rol == 'artist')
                       <h1 class="songs inline-block">{{$songs->count()}} Canciones</h1> | <h1 class="albums inline-block">0 Álbumes</h1>     
                    @endif

                    @if (auth()->user()->name == $user->name)
                        <div class="auth-user flex">
                            <div class="artist-bttn mt-5 inline-block">
                                Editar perfil
                            </div>
                            <div class="artist-bttn mt-5 inline-block ml-5">
                                Subir una canción
                            </div>
                        </div>
                    @else
                        <div class="user-follow flex">
                            <div class="follow mt-5">
                                Seguir
                            </div>
                        </div>
                    @endif
                </div>

                <div class="user-photo float-right rounded-full overflow-hidden"">
                    <img src="{{ asset('assets/img/user.jpg') }}" alt="Imagen de usuario" >
                </div>

            </div>

            
        </div>
        
    </div>
@endsection
