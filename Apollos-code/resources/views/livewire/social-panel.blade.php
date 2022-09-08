<div>
    <div class="user-section-content smd:mt-32 text-white flex flex-wrap-reverse items-center smd:justify-between justify-center smd:max-h[335px] mt-12">
    <div class="user-info smd:text-left text-base smd:text-lg text-center">
        <h1 class="user-type">
            {{-- {{dd($user->followings)}} --}}
            @if ($user->rol == 'artist')
                <h1>{{__('Artist')}}</h1>
            @else
                @if ($user->rol == 'user')
                    <h1>{{__('User')}}</h1>
                @endif
            @endif
        </h1>

        <h1 class="username first-letter:uppercase font-titulo xl:text-7xl lg:text-6xl text-5xl font-bold">
            {{ $user->username }}
        </h1>

        {{-- @if (auth()->user()->name == $user->name)
            <p>
                {{ $user->followings->count() }} Siguiendo
            </p>
        @endif --}}
        <p class="followers mt-2">
            {{ $user->followers->count() }} 
            {{ $user->followers->count() === 1 ? __("Follower"): __("Followers") }} |
            {{$user->followings->count()}} {{__('Following')}}
        </p>

        <p class="following">
            
        </p>

        @if ($user->rol == 'artist')
            <h1 class="songs inline-block"> {{ $countersongs }}
                {{ $countersongs === 1 ? __('Song') : __('Songs') }}</h1> | <h1 class="albums inline-block">
                {{ $albums->count() }} {{ $albums->count() === 1 ? __('Album') : __('Albums') }}
            </h1>
        @endif

        @if (auth()->user()->name == $user->name)
            <div class="auth-user flex gap-2 w-auto smd:mr-0 mr-1">
                <a href="{{ route('settings.index', $user) }}" class="artist-bttn mt-5 ">
                    <div class="flex gap-1 items-center">
                        <p>{{__('Edit profile')}}</p>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path
                                d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                        </svg>
                    </div>
                </a>
                @if (auth()->user()->rol == 'artist')
                    <a href="{{ route('upload.select') }}" class="artist-bttn mt-5">
                        <div class="flex gap-1 items-center">
                            <p>{{__('Upload content')}}</p>
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

    <div class="user-photo rounded-full overflow-hidden  h-[300px] w-[300px] smd:border-[10px] lg:border-[15px] smd:h-[275px] smd:w-[275px] xl:h-[300px] xl:w-[300px]">
        <img src="{{ asset('storage') . '/uploads/pfp/' . $user->image }}" alt="Imagen de usuario">
    </div>
    </div>
</div>
