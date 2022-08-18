@extends('partials.nav_bar')

@section('titulo')
    {{ $song->name_song }}
@endsection

@section('contenido')
    <div class="container mx-auto flex">
        <div class="md:w-1/2 p-3">
            <div class="shadow bg-white p-5 mb-5">
                <p class="text-xl font-bold text-center mb-4">Lista de reproducción</p>
            </div>
        </div>
        <div class="md:w-1/2 p-3">
            <img class="w-full" src="{{ asset('storage') . '/uploads/imagenes/' . $song->image }}"
                alt="Imagen de la canción {{ $song->name_song }}">
        </div>
    </div>

    <div class=" p-1.5 flex justify-center items-center">
        <div class="w-1/4">
            <span class="font-bold block text-center">{{ $user->name }}</span>
            {{-- Librería "Carbon" que formatea fechas --}}
            <p class="text-sm text-center text-gray-500"> {{ $song->created_at->diffForHumans() }}</p>
        </div> <!-- Información -->

        <div class="w-3/4 flex">
            <audio controls class="w-3/4">
                <source src="{{ asset('storage') . '/uploads/canciones/' . $song->url }}">
            </audio>
            <div class="p-3 w-1/4">
                <p>0 Likes</p>
            </div>
        </div> <!-- Información -->
    </div> <!-- Barra inferior -->
@endsection
