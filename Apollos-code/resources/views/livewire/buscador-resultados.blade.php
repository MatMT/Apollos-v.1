<div>
    <livewire:buscador>

        <div class="resultados">
            <div class="lista-canciones w-full">
                @foreach ($songs as $song)
                    <a href="{{ route('song.show', ['song' => $song->id, 'user' => $song->InfoArtista($song)]) }}">
                        <div class="lista-canciones w-full flex gris-blur p-2">
                            <div class="w-1/2">
                                <p class="text-white">{{ $song->name_song }}</p>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
</div>
