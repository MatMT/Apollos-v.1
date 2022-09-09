<div class="play-list-container player2 mt-5 mx-1 anim">

    @php
        $i = 1;
        $j = 0;

        $soyActual = 0;

        foreach ($othersongs as $eachsong) {
            # code...
            if ($eachsong->id == $actuallysong->id) {
                # code...
                $soyActual = $j;
            }

            $j++;
        }

        $nextSong = $actuallysong->id + 1;
    @endphp
    
    <span id="cancion_actual" class="text-2xl text-white hidden">{{ $soyActual }}</span>
    <h3 class="font-cuerpo font-bold text-2xl text-white">{{__('Playlist')}}</h3>

    <div class="songs-list-l m-0" id="lista-canciones">

        <table class="title-table-v mt-8 w-full text-white opacity-70">
            <tr class="fila-hight-v text-lg">
                <td class="num-song">#</td>
                <td class="picture-song"></td>
                <td class="name-song">{{__('Name')}}</td>
                <td class="artists-song"></td>
                <td class="dur-song">{{__('Duration')}}</td>
            </tr>
        </table>
        <section class="line-table min-space"></section>

        
        <div class="canciones">
            @foreach ($othersongs as $song)
                <article href="{{ route('song.favorites.show', ['user' => $song->InfoArtista($song), 'song' => $song]) }}"></article>
                <div class="song flex items-center justify-around">
                    <a href="{{ route('song.favorites.show', ['user' => $song->InfoArtista($song), 'song' => $song]) }}" class="">
                        
                                        
                        <div class="fila-content-v text-lg" href="" id="song">
                            <div class="num-song font-titulo">{{ $i++ }}</div>
                            <div class="picture-song"><img loading="lazy"
                                    src="{{ asset('storage') . '/uploads/imagenes/' . $song->image }}"
                                    alt="{{ $song->name_song }}" class="w-[45px] mx-auto rounded"></div>
                            <div class="name-song"><span>{{ $song->name_song }}</div>
                            @php 
                                $infoUser = $song->InfoArtista($song);
                                $nameArtista = $infoUser->username;                            
                            @endphp
                            <div class="artists-song font-cuerpo">{{ $nameArtista }}</div>
                            <div class="dur-song font-titulo">{{ $song->time }}</div>
                        </div>
                    </a>
                </div>
         @endforeach
        </div>

    </div>

</div>