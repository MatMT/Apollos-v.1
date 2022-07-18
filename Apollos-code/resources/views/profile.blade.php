@extends('partials.nav_bar')

@section('titulo')
    Perfil: {{ $user->name }}
@endsection

@section('contenido')
    <div class="flex justify-center">
        <div class="w-full md:w-8/12 lg:w-6/12 flex flex-col items-center md:flex-row">
            <div class="w-8/12 lg:w-6/12 px-5">
                <img src="{{ asset('assets/img/usuario.svg') }}" alt="imagen de usuario">
            </div>
            <div class="md:8/12 lg:w-6/12 px-5 flex flex-col items-center md:justify-center md:items-start py-10 md:py-10">
                <p class="text-gray-700 text-2xl ">{{ $user->name_artist }}</p>

                <p class="text-gray-800 text-sm mb-3 font-bold mt-5">
                    0
                    <span class="font-normal">Seguidores</span>
                </p>
                <p class="text-gray-800 text-sm mb-3 font-bold">
                    0
                    <span class="font-normal">Canciones</span>
                </p>
                <p class="text-gray-800 text-sm mb-3 font-bold">
                    0
                    <span class="font-normal">Albumes</span>
                </p>
            </div>
        </div>
    </div>

    <section class="container mx-auto mt-10">
        <h2 class="text-4xl text-center font-black my-10">Canciones</h2>

        {{-- Imprimir canciones según el arreglo obtenido --}}
        <div class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            @foreach ($songs as $song)
                <div>
                    <a href="">
                        <img src="{{ asset('storage') . '/uploads/imagenes/' . $song->image }}"
                            alt="Imagen de la canción {{ $song->name_song }}">
                    </a>
                </div>
            @endforeach
        </div>
    </section>
@endsection
