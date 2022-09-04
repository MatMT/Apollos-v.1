<div>
    <div class="play-list-container mx-1 anim">

        <h3 class="font-cuerpo font-bold text-3xl text-white">Lista de reproducción</h3>
    
        <div class="songs-list" id="lista-canciones">
    
            <table class="title-table-v mt-8 w-full text-white opacity-70">
                <tr class="fila-hight-v text-lg">
                    <td class="num-song">#</td>
                    <td class="picture-song"></td>
                    <td class="name-song">NOMBRE</td>
                    <td class="artists-song"></td>
                    <td class="dur-song">DURACIÓN</td>
                </tr>
            </table>
            <section class="line-table"></section>
    
            @php
            $i = 1;
            $nextSong = $actuallysong->id + 1;
            @endphp
    
           @foreach ($othersongs as $song)
                    <div class="song flex items-center justify-around">
                        <a href="{{ route('song.show', ['song' => $song->id, 'user' => $user]) }}">
                            
                                            
                            <div class="fila-content-v text-lg" href="" id="song">
                                <div class="num-song font-titulo">{{ $i++ }}</div>
                                <div class="picture-song"><img loading="lazy"
                                        src="{{ asset('storage') . '/uploads/imagenes/' . $song->image }}""
                                        alt="{{ $song->name_song }}" class="w-[45px] mx-auto rounded"></div>
                                <div class="name-song"><span>{{ $song->name_song }}</div>
                                <div class="artists-song font-cuerpo">{{ $user->username }}</div>
                                <div class="dur-song font-titulo">{{ $song->time }}</div>
                            </div>
    
                        </a>
                    </div>
             @endforeach
    
        </div>
    
    </div>
</div>
