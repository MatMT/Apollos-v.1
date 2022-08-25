<header class="py-3 px-8 text-white w-full header">

    <div class="box-header w-full h-28 flex items-center justify-between py-3 px-5 relative " id="box-h">

        <a href="#" class="font-logo mx-8 text-3xl tablet_5:mx-5 tablet_5:text-2xl">Apollo's</a>

        <!-- Navegador de páginas  -->

        <ul class="flex my-10 mx-10 text-base items-center font-cuerpo text-center tablet_5:mx-auto">

            <li class="mx-8 {{ $active ?? '' }} ">
                <a href="{{ route('main') }}"><i class="fi fi-rs-home"></i><span class="tablet_3:hidden">Home</span></a>
            </li>
            <li class="mx-8  {{ $activeli ?? '' }} "><a href="{{ route('biblioteca') }}"><i
                        class="fi fi-rs-apps"></i></i><span class="tablet_3:hidden">Tu Biblioteca</span></a></li>
            <li class="mx-8 "><a href="{{ route('artista') }}"><i class="fi fi-rs-music"></i><span
                        class="tablet_3:hidden">Crear PlayList</span></a></li>
            <li class="mx-8 cursor-pointer" id="buscar"><a><i class="fi fi-rs-search"></i><span
                        class="tablet_3:hidden">Buscar</span></a></li>
        </ul>

        <!-- Profile picture -->

        <div class="user h-11 relative">

            <!--Foto de perfil y nombre -->
            <div id="profile" class="profile mx-4 ">
                <div class="image w-full flex justify-end items-center">
                    <a class="font-titulo mr-5 h-6 text-right laptop:hidden">{{ Auth::user()->username }}</a>
                    <img src="{{ asset('storage') . '/uploads/pfp/' . Auth::user()->image }}"
                        alt="img"class="h-11 min-w-[44px]  rounded-full border-slate-400">
                </div>
            </div>

            <!-- Menu Toogle -->

            <div class="contenido-menu my-5 anim" id="menu">

                <div class="image perfil w-full flex justify-center items-center anim my-2 mx-2" id="perfil">

                    <img src="{{ asset('storage') . '/uploads/pfp/' . Auth::user()->image }}"
                        alt="img"class="h-16  rounded-full border-slate-400">
                    <div class="name-user p-5">
                        <span
                            class="font-titulo h-6 text-right font-bold text-lg truncatetruncate ">{{ Auth::user()->name }}</span><br>
                        <span
                            class="text-base text-slate-300">{{ Auth::user()->rol == 'artist' ? 'Artista' : 'Usuario' }}</span>
                    </div>
                </div>

                <div class="line h-px w-full bg-white opacity-25 rounded"></div>

                <ul class="anim options font-cuerpo p-3" id="opciones">
                    <li>
                        <a href="{{ route('profile.index', auth()->user()) }}">Perfil</a>
                    </li>
                    {{-- <li>
                        <a href="{{ route('settings.index', auth()->user()) }}" class="flex gap-2 items-center">
                            <p>Editar perfil</p>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path
                                    d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                            </svg>
                        </a>
                    </li> --}}
                    @if (Auth()->user()->rol == 'artist')
                        <li>
                            <a href="{{ route('upload.select') }}">Subir</a>
                        </li>
                    @endif
                    <li>
                        <a href="{{ route('main') }}">Main</a>
                    </li>
                    <li>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <a href="#" class="Logout" onclick="this.closest('form').submit()">Cerrar sesión</a>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
