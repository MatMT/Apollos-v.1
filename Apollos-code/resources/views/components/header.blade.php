
<header class="py-3 px-8 text-white w-full">

<div class="box-header w-full h-28 flex items-center justify-between py-4 px-5 relative">

    <a href="#" class="font-logo mx-8 text-3xl tablet_5:mx-5 tablet_5:text-2xl">Apollo's</a>

    <ul class="flex my-10 mx-10 text-base items-center font-cuerpo text-center tablet_5:mx-auto">

        <li
            class="mx-8 {{ $active_2 ?? 'font-normal' }} {{ $active ?? 'normal' }} {{ $active_bg ?? '' }}  ">
            <a href="{{ route('main') }}"><i class="fi fi-rs-home"></i><span class="tablet_3:hidden">Home</span></a>
        </li>
        <li class="mx-8 text-stone-300"><a href="{{ route('biblioteca') }}"><i class="fi fi-rs-apps"></i></i><span class="tablet_3:hidden">Tu Biblioteca</span></a></li>
        <li class="mx-8 text-stone-300"><a href=""><i class="fi fi-rs-music"></i><span class="tablet_3:hidden">Crear PlayList</span></a></li>
        <li class="mx-8 text-stone-300"><a href="{{ route('artista') }}"><i class="fi fi-rs-search"></i><span class="tablet_3:hidden">Buscar</span></a></li>
    </ul>
            
    <div class="user h-11 relative">

        <div id="profile" class="profile mx-4 ">
            <div class="image w-full flex justify-end items-center">
                <a class="font-titulo mr-5 h-6 text-right laptop:hidden">{{ Auth::user()->name }}</a>
                <a href="" class="h-11"><img src="{{ asset('assets/img/profile.jpg') }}" alt="img"class="h-11 min-w-[44px]  rounded-full border-slate-400"></a>
            </div>
        </div>
        <div class="contenido-menu my-5 anim" id="menu">
            <div class="image perfil w-full flex justify-end items-center anim" id="perfil">
                <img src="{{ asset('assets/img/profile.jpg') }}" alt="img"class="h-12 min-w-[48px]  rounded-full border-slate-400">
                <div class="name-user p-5">
                    <span class="font-titulo h-6 text-right font-bold truncatetruncate ">{{ Auth::user()->name }}</span>
                    <span class="text-sm text-slate-300">Usuario</span>
                </div>
                
            </div>

            <ul class="anim options" id="opciones">
                <li><a href="/">Welcome</a></li>
                <li>
                    <a href="{{ route('posts.index', auth()->user()) }}">Perfil</a>
                </li>
                {{-- Utilizamos esta directiva para mostrar a los usuarios no autenticados --}}
                @auth
                <li>
                    <a href="{{ route('main') }}">Main</a>
                </li>
                <li>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <a href="#" onclick="this.closest('form').submit()">Logout</a>
                    </form>
                </li>
                @else
                    <li>
                       <a href="{{ route('login') }}">Login</a>
                     </li>
                @endauth
                </ul>
            </div>

    </div>
    

</div>
</header>
