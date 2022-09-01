<div>
    <livewire:buscador-p>
        <div class="resultados">
            <div>
                @php
                    $i = 0;
                @endphp
                @foreach ($songs as $song)
                    @php
                        $i++;
                    @endphp
                    {{-- AGREGAR PLAYLIST --}}
                    <form action="{{ route('playlist.store') }}" id="FormId_{{ $i }}" method="POST">
                        @csrf
                        <input type="hidden" name="song_id" value="{{ $song->id }}">
                    </form>
                @endforeach

                <div class="list-songs-choose text-white font-cuerpo">

                    @php
                        $i = 0;
                    @endphp

                    @foreach ($songs as $song)
                        @php
                            $i++;
                        @endphp
                        <div class="song-found">
                            <img src="{{ asset('storage') . '/uploads/imagenes/' . $song->image }}"
                                alt="Imagen de {{ $song->name_song }}">
                            <div class="info-song">
                                <p class="text-lg font-bold max-w-[114px] min-w-[110px] max-h-[56px]">
                                    {{ $song->name_song }}</p>
                                <p class="font-light opacity-70 max-w-[114px]  max-h-[28px]">
                                    {{ $song->name_song }}
                                </p>
                            </div>

                            @if ($song->AlreadyAdded($song))
                                <button class="font-cuerpo" id="ButtonId_{{ $i }}">Añadida</button>
                            @else
                                <button class="font-cuerpo" id="ButtonId_{{ $i }}">Añadir</button>
                            @endif

                        </div>
                    @endforeach
                </div>

            </div>
            <div class="line h-px w-full bg-white opacity-25 rounded"></div>
        </div>
</div>
