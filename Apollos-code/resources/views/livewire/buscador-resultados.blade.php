<div>
    <livewire:buscador>
        <div class="resultados">
            {{-- Álbumes --}}
            <div class="lista-canciones w-full flex justify-center gap-y-6 gap-x-10 h-38 flex-wrap pt-5 pb-10">
                <div class="w-full mx-5 anim">
                    <h3 class="font-cuerpo font-bold text-2xl text-white m-0 text-center xl:text-left">{{__('Artists')}}</h3>
                </div>
                @php
                    $i = 0;
                @endphp
                @foreach ($users as $user)
                    <a href="{{ route('profile.index', $user->name_artist) }}" class="w-48 p-2 rounded-md anim">
                        <div class="lista-canciones w-full gris-blur p-2 text-center">
                            <img src="{{ asset('storage') . '/uploads/pfp/' . $user->image }} "
                                alt="Imagen de {{ $user->name }}" class="rounded-full">
                            <div class="pt-3">
                                <p class="text-white">{{ $user->username }}</p>
                            </div>
                        </div>
                    </a>
                    {{-- Cortar resultados --}}
                    @if (++$i == 6)
                        @php
                            break;
                        @endphp
                    @endif
                @endforeach
            </div>
            <div class="line h-px w-full bg-white opacity-25 rounded anim"></div>

            {{-- Canciones --}}
            <div class="lista-canciones w-full flex justify-center gap-y-6 gap-x-10 h-38 flex-wrap pt-5 pb-10">
                <div class="w-full mx-5 anim">
                    <h3 class="font-cuerpo font-bold text-2xl text-white m-0">{{__('Songs')}}</h3>
                </div>
                @php
                    $i = 0;
                @endphp
                @foreach ($songs as $song)
                    <a href="{{ route('song.show', ['song' => $song->id, 'user' => $song->InfoArtista($song)]) }}"
                        style=" background-color:rgb(41, 40, 40);" class="w-48 p-2 rounded-md anim">
                        <div class="lista-canciones w-full gris-blur p-2 text-center">
                            <img src="{{ asset('storage') . '/uploads/imagenes/' . $song->image }} "
                                alt="Imagen de {{ $song->name_album }}" class="rounded-md">
                            <div class="pt-3">
                                <p class="text-white">{{ $song->name_song }}</p>
                            </div>
                        </div>
                    </a>
                    {{-- Cortar resultados --}}
                    @if (++$i == 6)
                        @php
                            break;
                        @endphp
                    @endif
                @endforeach
            </div>
            <div class="line h-px w-full bg-white opacity-25 rounded anim"></div>
            {{-- Usuarios --}}
            <div class="lista-canciones w-full flex justify-center gap-y-6 gap-x-10 h-38 flex-wrap pt-5 pb-10">
                <div class="w-full mx-5 anim">
                    <h3 class="font-cuerpo font-bold text-2xl text-white m-0">{{__('Albums')}}</h3>
                </div>

                @php
                    $i = 0;
                @endphp
                @foreach ($albumes as $album)
                    <a href="{{ route('album.index', ['user' => $album->checkArtist($album), 'album' => $album->id]) }}"
                        class="bg-cover bg-center w-48 p-2 rounded-md anim flex justify-center h-24"
                        style="background-image: url(@if ($album->image == null) {{ asset('storage') . '/uploads/imagenes/album_photo.png' }} 
                        @else {{ asset('storage') . '/uploads/imagenes/' . $album->image }} @endif)">
                        <div class="w-full flex items-end justify-center">
                            <div class="text-center bg-stone-900/80 rounded-md py-1 px-5 align-bottom">
                                <p class="font-bold text-white capitalize  m-0">
                                    {{ $album->name_album }}</p>
                            </div>
                        </div>
                    </a>
                    {{-- Cortar resultados --}}
                    @if (++$i == 6)
                        @php
                            break;
                        @endphp
                    @endif
                @endforeach
            </div>
        </div>
</div>
</div>
