<div>
    <!-- Life is available only in the present moment. - Thich Nhat Hanh -->

    <footer class="">
        <div class="player activer" id="player">
            
            <!-- Etiqueta de Audio -->

            <audio preload="auto" id="audio" preload>
                <source src="{{ asset('storage') . '/uploads/canciones/' . $actuallysong->url }}"" type="">
            </audio>

            <div class="cancion">

                <span class="white-circule"></span>
                <img src="{{ asset('storage') . '/uploads/imagenes/' . $actuallysong->image }}" alt="Canción" class="">
            </div>
            <div class="info-cancion">
                <h2 class="font-cuerpo font-bold text-base ml-1 lg:text-lg">{{$actuallysong->name_song}}</h2>
                <h3 class="font-cuerpo font-light opacity-60 text-sm ml-1 lg:text-base">{{$user->username }}</h3>
            </div>
            <div class="line-time-song hidden">
                <div class="reproduccion">
                    <span class="material-icons change cursor-pointer" id="back">skip_previous</span>
                    <!-- PLay and Pause -->
                    <span class="material-icons control hidden cursor-pointer" id="play" >play_circle</span>
                    <span class="material-icons control hidden cursor-pointer" id="pause">pause_circle</span>
                    <span class="material-icons change cursor-pointer" id="next">skip_next</span>
                </div>
                <div class="line-time" id="down">
                    <div class="line-progress" id="up"></div>
                </div>
                <div class="time-num font-titulo flex justify-between opacity-60 text-xs mp:text-sm w-19/20 mt-2">
                    <span id="current">0:00</span><span>{{$actuallysong->time}}</span>
                </div>
            </div>
            <div class="controles">
                <livewire:like-song :song="$actuallysong" />
                <div class="sonido flex items-center w-1/3">
                    <i class="fi fi-rr-volume mx-2 text-lg opacity-70 transition-all ease-in-out hover:opacity-100" id="volumen"></i>
                    <div class="totalvol w-4/5 min-w-[3rem] h-[3px] bg-zinc-700 rounded hidden 2lg:flex cursor-pointer" id="volumen2">
                        <div class="vol h-0.5" id="vol"></div>
                    </div>
                </div>
                <i class="fi fi-bs-menu-dots text-lg"></i>               
            </div>
        </div>
    </footer>
</div>