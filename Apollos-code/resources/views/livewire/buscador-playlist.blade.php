<div>
    <livewire:buscador-p>
        <div class="resultados">
            <div>
                <div class="list-songs-choose text-white font-cuerpo">
                    @foreach ($songs as $song)
                        @if (!$song->AlreadyAdded($song->id))
                            <div class="song-found">
                                <img src="{{ asset('storage') . '/uploads/imagenes/' . $song->image }}"
                                    alt="Imagen de {{ $song->name_song }}">
                                <div class="info-song">
                                    <p class="text-sm font-bold max-w-[114px] min-w-[110px] max-h-[56px]">
                                        {{ $song->name_song }}</p>
                                    <p class="font-light opacity-70 max-w-[114px]  max-h-[28px] text-sm">
                                        {{ $song->sencillo ? __('Single') : __('Album') }}
                                    </p>
                                </div>

                                <a onclick="event.preventDefault(); document.getElementById('FormId_{{ $song->id }}').submit()"
                                    href="#">
                                    <form action="{{ route('playlist.store') }}" id="FormId_{{ $song->id }}"
                                        method="POST">
                                        @csrf
                                        <input type="hidden" name="song_id" value="{{ $song->id }}">
                                    </form>
                                    <button class="font-cuerpo">{{ __('Add') }}</button>
                                    </form>
                                </a>

                            </div>
                        @endif
                    @endforeach

                    <div class="line w-full h-0.5 bg-white mx-3 mt-5 mb-5"></div>

                    @foreach ($songs as $song)
                        @if ($song->AlreadyAdded($song->id) && $song->visibility == true)
                            <div class="song-found">
                                <img src="{{ asset('storage') . '/uploads/imagenes/' . $song->image }}"
                                    alt="Imagen de {{ $song->name_song }}" class="mr-2">
                                <div class="info-song">
                                    <p class="text-sm font-bold max-w-[114px] min-w-[110px] max-h-[56px]">
                                        {{ $song->name_song }}</p>
                                    <p class="font-light opacity-70 max-w-[114px]  max-h-[28px]">
                                        {{ $song->sencillo ? __('Single') : __('Album') }}
                                    </p>
                                </div>

                                <button class="font-cuerpo">{{ __('Added') }}</button>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>

</div>
