@extends('layouts.sessionshape')

@section('title')
    {{ __('Log in') }}
@endsection

@section('body')
@section('message')
    {{ __('Welcome back!') }}
@endsection

<form action="{{ route('login.store') }}" method="post" class="session-form" novalidate>
    @csrf

    @if ($errors->any())
        <div class="errors text-red-600 px-3 py-2 rounded mb-3">
            <ul>
                <span class="inline"><img src="{{ asset('assets/icons/errorIcon.png') }}" class="h-4 inline m-2"><strong
                        class="font-bold">{{ __('Oops! Something went wrong') }}</strong></span>
                @foreach ($errors->all() as $error)
                    <li class="list-disc pl-7 list-inside">
                        {{ $error }}
                    </li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="input-container">
        <span class="icon"><img src="{{ asset('assets/icons/mailIconWht.png') }}"></span>
        <input type="email" name="email" id="login-email" class="form-input" required value="{{ old('email') }}"
            autocomplete="off" placeholder="{{ __('E-mail') }}">
    </div> {{-- input-container --}}

    <div class="input-container">
        <span class="icon"><img src="{{ asset('assets/icons/lockIconWht.png') }}"></span>
        <input type="password" name="password" id="login-PW" class="form-input" required autocomplete="off"
            placeholder="{{ __('Password') }}">
    </div> {{-- input-container --}}

    <div class="button-center flex items-center justify-center">
        <input type="submit" class="submit font-titulo" value="{{ __('Log in') }}">
    </div> {{-- button-center --}}

    <h2 class="block text-center mt-5 text-gray-900">{{ __("You don't have an account yet?") }}<a
            href="{{ route('signup') }}" class=" block"> <span
                class="font-bold hover:text-slate-50 transition all">{{ __('Sign up') }}</span></a></h2>

</form>
</div> {{-- session-form-container --}}
</div> {{-- form-work --}}
@endsection
