<div>
    <div class="lista-canciones w-full">
        @php
            $i = 1;
            $nextSong = $actuallysong->id + 1;
        @endphp
        @foreach ($othersongs as $song)
            <a href="{{ route('song.playlist.show', ['playlist' => $playlist, 'song' => $song]) }}"
                @if ($song->id == $nextSong) id="{{ 'song_' . $i }}" @endif>
                <div class="lista-canciones w-full flex gris-blur p-2">
                    <div class="w-1/2">
                        <p class="text-white">{{ $song->name_song }}</p>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
</div>
