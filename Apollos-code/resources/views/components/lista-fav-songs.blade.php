<div>
    <div class="lista-canciones w-full">
        {{-- @foreach ($othersongs as $song)
            
        @endforeach --}}

        @php
            $i = 0;
        @endphp

        @foreach ($othersongs as $song)
            {{ ++$i }}

            {{-- @if ($song->id > $actuallysong->id)
                <p class="bg-white">
                    {{ 'song_' . $i }}
                </p>
            @endif --}}

            {{-- <p class="bg-white">{{ ++$i }}</p> --}}
            <a href="{{ route('song.favorites.show', ['user' => $song->InfoArtista($song), 'song' => $song]) }} 
                "
                id="@if ($song->id > $actuallysong->id) {{ 'song_' . $i }} @endif">
                <div class="lista-canciones
                w-full flex gris-blur p-2">
                    <div class="w-1/2">
                        <p class="text-white">{{ $song->name_song }}</p>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
</div>
