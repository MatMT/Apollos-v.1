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

    <!-- ================== Barra ========================== -->

    <div class="p-1.5 md:flex justify-center items-center">
        <div class="w-full md:w-1/6">
            <span class="font-bold block text-center">{{ $user->name }}</span>
            {{-- Librería "Carbon" que formatea fechas --}}
            <p class="text-sm text-center text-gray-500"> {{ $song->created_at->diffForHumans() }}</p>
        </div> <!-- Información -->

        <div class="flex flex-wrap md:flex-nowrap w-full md:w-4/6 gap-1 justify-center items-center">
            <div class="w-full md:w-3/4">
                <audio controls class="w-full">
                    <source src="{{ asset('storage') . '/uploads/canciones/' . $song->url }}">
                </audio>
            </div> <!-- Audio -->
            <div class="p-3 w-full md:w-1/4 flex justify-center items-center gap-3">
                @auth

                    @if ($song->checkLike(auth()->user()))
                        <form action="{{ route('song.likes.destroy', $song) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <div class="my-4">
                                <button type="submit">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="black" viewBox="0 0 24 24"
                                        stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                    </svg>
                                </button>
                            </div> <!-- Botón -->
                        </form> <!-- YA en favoritos -->
                    @else
                        <form action="{{ route('song.likes.store', $song) }}" method="POST">
                            @csrf
                            <div class="my-4">
                                <button type="submit">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                    </svg>
                                </button>
                            </div> <!-- Botón -->
                        </form> <!-- Agregar a favoritos -->
                    @endif
                @endauth

                <p class="font-bold text-center text-sm">
                    {{ $song->likes->count() }} <span class="font-normal"> Likes </span>
                </p>
            </div> <!-- Favoritos -->
        </div> <!-- Reproductor -->

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
