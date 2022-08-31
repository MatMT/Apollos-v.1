<div>
    <div class="lista-canciones w-full">
        @foreach ($othersongs as $song)
            <a href="{{ route('song.favorites.show', ['user' => $song->InfoArtista($song), 'song' => $song]) }}">
                <div class="lista-canciones w-full flex gris-blur p-2">
                    <div class="w-1/2">
                        <p class="text-white">{{ $song->name_song }}</p>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
</div>
