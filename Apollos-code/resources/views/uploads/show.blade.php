@extends('partials.nav_bar')

@section('titulo')
    {{ $song->name_song }}
@endsection

@section('contenido')
    <div class="container mx-auto flex">
        <div class="md:w-1/2 bg-black">

        </div>
        <div class="md:w-1/2">
            <img class="w-full" src="{{ asset('storage') . '/uploads/imagenes/' . $song->image }}"
                alt="Imagen de la canción {{ $song->name_song }}">
        </div>
    </div>
    <div class="bg-slate-400 flex justify-center items-center">
        <div class="w-1/4">
            <span class=" block text-center">{{ $song->user->name }}</span>
        </div>
        <div class="w-3/4">
            <audio controls class="w-full">
                <source src="{{ asset('storage') . '/uploads/canciones/' . $song->url }}">
            </audio>
        </div>

    </div>
@endsection
