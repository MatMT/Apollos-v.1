<div>
    <livewire:buscador>
        <div class="resultados">
            {{-- Canciones --}}
            <div class="lista-canciones w-full">
                @php
                    $i = 0;
                @endphp
                @foreach ($songs as $song)
                    <a href="{{ route('song.show', ['song' => $song->id, 'user' => $song->InfoArtista($song)]) }}">
                        <div class="lista-canciones w-full flex gris-blur p-2">
                            <div class="w-1/2">
                                <p class="text-white">{{ $song->name_song }}</p>
                            </div>
                        </div>
                    </a>
                    {{-- Cortar resultados --}}
                    @if (++$i == 3)
                        @php
                            break;
                        @endphp
                    @endif
                @endforeach
            </div>
            <div class="line h-px w-full bg-white opacity-25 rounded"></div>
            {{-- Usuarios --}}
            <div class="lista-canciones w-full">
                @php
                    $i = 0;
                @endphp
                @foreach ($users as $user)
                    <a href="{{ route('profile.index', $user->name_artist) }}">
                        <div class="lista-canciones w-full flex gris-blur p-2">
                            <div class="w-1/2">
                                <p class="text-white">{{ $user->username }}</p>
                            </div>
                        </div>
                    </a>
                    {{-- Cortar resultados --}}
                    @if (++$i == 3)
                        @php
                            break;
                        @endphp
                    @endif
                @endforeach
                <div class="line h-px w-full bg-white opacity-25 rounded"></div>
                {{-- Álbumes --}}
                <div class="lista-canciones w-full">
                    @php
                        $i = 0;
                    @endphp
                    @foreach ($albumes as $album)
                        <a
                            href="{{ route('album.index', ['user' => $album->checkArtist($album), 'album' => $album->id]) }}">
                            <div class="lista-canciones w-full flex gris-blur p-2">
                                <div class="w-1/2">
                                    <p class="text-white">{{ $album->name_album }}</p>
                                </div>
                            </div>
                        </a>
                        {{-- Cortar resultados --}}
                        @if (++$i == 3)
                            @php
                                break;
                            @endphp
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
