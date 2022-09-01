<div>
    <div class="user-info text-lg">
        <h1 class="user-type">
            @if ($user->rol == 'artist')
                <h1>Artista</h1>
            @else
                @if ($user->rol == 'user')
                    <h1>Usuario</h1>
                @endif
            @endif
        </h1>

        <h1 class="username first-letter:uppercase font-titulo text-7xl font-bold">
            {{ $user->username }}
        </h1>

        {{-- @if (auth()->user()->name == $user->name)
            <p>
                {{ $user->followings->count() }} Siguiendo
            </p>
        @endif --}}


        <br>
        <p class="followers">
            {{ $user->followers->count() }} @choice('Seguidor|Seguidores', $user->followers->count())
        </p>

        @if ($user->rol == 'artist')
            <h1 class="songs inline-block"> {{ $countersongs }}
                {{ $countersongs === 1 ? 'Canción' : 'Canciones' }}</h1> | <h1 class="albums inline-block">
                {{ $albums->count() }} {{ $albums->count() === 1 ? 'Álbum' : 'Álbumes' }}
            </h1>
        @endif

        @if (auth()->user()->name == $user->name)
            <div class="auth-user flex gap-2">
                <a href="{{ route('settings.index', $user) }}" class="artist-bttn mt-5 ">
                    <div class="flex gap-1 items-center">
                        <p>Editar perfil</p>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path
                                d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                        </svg>
                    </div>
                </a>
                @if (auth()->user()->rol == 'artist')
                    <a href="{{ route('upload.select') }}" class="artist-bttn mt-5">
                        <div class="flex gap-1 items-center">
                            <p>Subir contenido</p>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path
                                    d="M18 3a1 1 0 00-1.196-.98l-10 2A1 1 0 006 5v9.114A4.369 4.369 0 005 14c-1.657 0-3 .895-3 2s1.343 2 3 2 3-.895 3-2V7.82l8-1.6v5.894A4.37 4.37 0 0015 12c-1.657 0-3 .895-3 2s1.343 2 3 2 3-.895 3-2V3z" />
                            </svg>
                        </div>
                    </a>
                @endif
            </div>
        @else
            <div class="user-follow flex">
                {{-- IF SEGUIR --}}
                <livewire:follow :user="$user">
            </div>
        @endif
    </div>

    <div class="user-photo float-right rounded-full overflow-hidden"">
        <img src="{{ asset('storage') . '/uploads/pfp/' . $user->image }}" alt="Imagen de usuario">
    </div>
</div>
