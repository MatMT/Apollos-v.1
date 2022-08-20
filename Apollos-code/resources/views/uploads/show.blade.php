@extends('partials.nav_bar')

@section('titulo')
    {{ $song->name_song }}
@endsection

@section('contenido')
    <div class="container mx-auto md:flex">
        <div class="md:w-1/2 p-2">
            <div class="shadow bg-white p-5 mb-5">
                <p class="text-xl font-bold text-center mb-4">Lista de reproducción</p>
            </div>
        </div>
        <div class="md:w-1/2 p-3">
            <img class="w-full" src="{{ asset('storage') . '/uploads/imagenes/' . $song->image }}"
                alt="Imagen de la canción {{ $song->name_song }}">
        </div>
    </div>

    <!-- Barra -->

    <div class="p-1.5 md:flex justify-center items-center">
        <div class="w-full md:w-1/6">
            <span class="font-bold block text-center">{{ $user->name }}</span>
            {{-- Librería "Carbon" que formatea fechas --}}
            <p class="text-sm text-center text-gray-500"> {{ $song->created_at->diffForHumans() }}</p>
        </div> <!-- Información -->

        <div class="w-full md:w-4/6 flex">
            <audio controls class="w-full md:w-3/4">
                <source src="{{ asset('storage') . '/uploads/canciones/' . $song->url }}">
            </audio>
            <div class="p-3 w-1/4">
                <p class=" text-center text-sm">0 Likes</p>
            </div>
        </div> <!-- Información -->

        <!-- Edición/Eliminación -->

        @auth {{-- Autentificado --}}
            @if ($user->id == auth()->user()->id)
                {{-- Artista dueño de la canción --}}
                <div class="1/6 flex justify-center items-center gap-2">
                    <form action="">
                        <input type="submit" value="Editar canción" name="" id=""
                            class="bg-blue-500 hover:bg-blue-600 p-2 rounded text-white font-bold cursor-pointer">
                    </form>
                    <form action="{{ route('song.destroy', ['user' => $user, 'song' => $song]) }}" method="POST">
                        {{-- METODO SPOOFING - Laravel permite agregar otro tipo de peticiones --}}
                        @method('DELETE')
                        @csrf
                        <input type="submit" value="Eliminar canción" name="" id=""
                            class="bg-red-500 hover:bg-red-600 p-2 rounded text-white font-bold cursor-pointer">
                    </form>
                </div>
            @endif
        @endauth

    </div> <!-- Barra inferior -->
@endsection
