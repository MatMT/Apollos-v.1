@extends('partials.nav_bar')

@section('titulo')
    Album: {{ $album->name_album }}
@endsection

@section('contenido')
    <section class="container mx-auto mt-10">
        <h2 class="text-4xl text-center font-black my-10">Contenido</h2>

        {{-- Imprimir canciones según el arreglo obtenido gracias al MODELO --}}
        @if ($album->songs->count())
            <div class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                @foreach ($album->songs as $song)
                    <div>
                        {{-- Se mapea automaticamente la ruta por cada song en su url --}}
                        <a href="{{ route('song.show', ['song' => $song, 'user' => $user]) }}">
                            <img src="{{ asset('storage') . '/uploads/imagenes/' . $song->image }}"
                                alt="Imagen de la canción {{ $song->name_song }}">
                        </a>
                        <p class="text-gray-600 uppercase text-center font-bold">{{ $song->name_song }}</p>

                    </div>
                @endforeach
            </div>
        @else
            @if (auth()->user()->name == $user->name)
                @if ($user->rol == 'artist')
                    <p class="text-gray-600 uppercase text-center font-bold">¡Sube tu primera canción!</p>
                @else
                    <p class="text-gray-600 uppercase text-center font-bold">Busca nuevo contenido</p>
                @endif
            @else
                @if ($user->rol == 'user')
                    <p class="text-gray-600 uppercase text-center font-bold">Espera su próxima canción...</p>
                @else
                    <p class="text-gray-600 uppercase text-center font-bold">Aún no sigue contenido</p>
                @endif
            @endif
        @endif
    </section>
@endsection
