<footer class="">
    <div class="player activer" id="player">

        <button rolle="button" id="show" class="show-list-btn"><i class="fi fi-rr-angle-left"></i></button>
        <button rolle="button" id="hidde" class="hidde-list-btn hidden"><i class="fi fi-rr-angle-right"></i></button>
        <div class="cancion">

            <span class="white-circule"></span>
            <img src="{{ asset('assets/artistas-pic/house.png') }} " alt="Canción" class="">
        </div>
        <div class="info-cancion">
            <h2 class="font-cuerpo font-bold text-lg">Late Night Talking</h2>
            <h3 class="font-cuerpo font-light opacity-60">Harry Styles</h3>
        </div>
        <div class="line-time-song hidden">
            <div class="line-time">
                <div class="line-progress"></div>
            </div>
            <div class="time-num flex justify-between opacity-60 text-sm w-19/20 mt-2">
                <span>0:50</span><span>3:15</span>
            </div>
        </div>
        <div class="controles">
            {{-- Interacción --}}
            <div>
                <div class="p-3 w-full md:w-1/4 justify-center items-center gap-3 bg-white flex">

                    {{-- COMPONENTE DE LIVEWIRE --}}
                    <livewire:like-song :song="$actuallysong" />
                    {{-- REPORTAR CANCIÓN --}}
                    {{-- {{ dd($ActuallySong) }} --}}
                    <form action="{{ route('report.mail.store', ['user' => $user, 'song' => $actuallysong]) }}"
                        method="POST">
                        @csrf
                        <input type="submit" name="Reportar" value="Reportar" id="">
                    </form>
                </div> <!-- Favoritos -->
            </div>
            <i class="fi fi-rr-heart text-xl opacity-50 transition-all hover:opacity-100"></i>
            <i class="fi fi-sr-heart text-xl text-red-400 hidden "></i>

            <!-- PLay and Pause -->
            <div class="controladores">
                <i class="fi fi-rr-angle-double-small-left text-2xl mr-2"></i>
                <div class="rombo">
                    <i class="fi fi-sr-play text-xl hidden"></i>
                    <i class="fi fi-sr-pause text-xl "></i>
                </div>
                <i class="fi fi-rr-angle-double-small-right text-2xl ml-2"></i>
            </div>

        </div>
    </div>
</footer>
