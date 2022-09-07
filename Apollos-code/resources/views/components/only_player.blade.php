<div>
    <!-- Life is available only in the present moment. - Thich Nhat Hanh -->

    <footer class="">
        <div class="player activer" id="player">
            
            <!-- Etiqueta de Audio -->

            <audio preload="auto" autoplay="yes" id="audio" preload>
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
                <div class="line-time" id="down">
                    <div class="line-progress" id="up"></div>
                </div>
                <div class="time-num flex justify-between opacity-60 text-sm w-19/20 mt-2">
                    <span id="current">0:50</span><span>3:15</span>
                </div>
            </div>
            <div class="controles">

                <div class="like-vol flex ">
                    <livewire:like-song :song="$actuallysong" />
                    <i class="fi fi-rr-volume mx-2 text-lg opacity-70 transition-all ease-in-out hover:opacity-100"></i>
                </div>
                

                <!-- PLay and Pause -->
                <div class="controladores">
                    <i class="fi fi-rr-angle-double-small-left text-2xl mr-4" id="back"></i>
                    <div class="rombo">
                        <i class="fi fi-sr-play text-2xl hidden" id="play"></i>
                        <i class="fi fi-sr-pause text-2xl hidden" id="pause"></i>
                    </div>

                    <i class="fi fi-rr-angle-double-small-right text-2xl ml-4" id="next"></i>
                </div>

            </div>
        </div>
    </footer>
</div>