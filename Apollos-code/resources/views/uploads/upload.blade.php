@extends('partials.nav_bar')

@section('titulo')
    ¿Qué tipo de contenido vas a subir?
@endsection

@section('contenido')
    <div class="md:flex md:items-center gap-4">


        <div class="hover:scale-95 md:w-1/2 p-5 bg-white rounded-lg shadow mt-10 md:mt-0">
            <a href="{{ route('posts.create') }}">
                <div class="md:h-1/2">
                    <img src="{{ asset('storage/uploads/imagenes/default-song.png') }}" alt="" class="m-auto">
                    <p class="pt-4 font-black text-2xl text-center">Sencillo</p>
                </div> <!-- Sencillo -->
            </a>
        </div> <!-- Subir archivos -->



        <div class="hover:scale-95 md:w-1/2 p-5 bg-white rounded-lg shadow mt-10 md:mt-0">
            <a href="{{ route('upload.album_1') }}">
                <div class="md:h-1/2">
                    <img src="{{ asset('storage/uploads/imagenes/default-album.png') }}" alt="" class="m-auto">
                    <p class="pt-4 font-black text-2xl text-center">Album</p>
                </div> <!-- Album -->
            </a>

        </div> <!-- Rellenar información -->


    </div> <!-- div general -->
@endsection
