@extends('layouts.sessionshape')
       
@section('title'){{__('Sign up')}}@endsection

@section('body')
{{-- Delimitación de fecha de nacimiento --}}
@php
$actualDate = date('Y-m-d');
$lastDate = strtotime('-13 year', strtotime($actualDate));
$lastDate = date('Y-m-d', $lastDate);
@endphp

@section('message') {{__('Sign up and enjoy your favorite music!')}} @endsection
                            <form action="{{ route('signup.store') }}" method="post" class="session-form"
                                name="registroForm" id="registroForm">
                                @csrf

                                @if ($errors->any())
                                    <div class="errors text-red-600 px-3 py-2 rounded mb-3">
                                        <ul>
                                            <span class="inline"><img src="{{ asset('assets/icons/errorIcon.png') }}"
                                                    class="h-4 inline m-2"><strong class="font-bold">{{__('Oops! Something went wrong')}}</strong></span>
                                            @foreach ($errors->all() as $error)
                                                <li class="list-disc pl-7 list-inside">
                                                    {{ $error }}
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <div class="input-container">
                                    <span class="icon"><img src="{{ asset('assets/icons/userIconWht.png') }}"></span>
                                    <input type="text" name="nombre" id="signup-name" value="{{ old('nombre') }}"
                                        class="form-input" placeholder="{{__('Name')}}" autocomplete="off">
                                    <input type="text" name="apellido" id="signup-apellido"
                                        value="{{ old('apellido') }}" class="form-input" placeholder="{{__('Last name')}}"
                                        autocomplete="off">
                                </div> {{-- input-container --}}

                                <div class="input-container">
                                    <span class="icon"><img src="{{ asset('assets/icons/mailIconWht.png') }}"></span>
                                    <input type="email" name="email" id="signup-email" value="{{ old('email') }}"
                                        class="form-input" placeholder="{{__('E-mail')}}" autocomplete="off">
                                </div> {{-- input-container --}}

                                <div class="input-container">
                                    <span class="icon"><img src="{{ asset('assets/icons/lockIconWht.png') }}"></span>
                                    <input type="password" name="password" id="signup-PW" class="form-input"
                                        placeholder="{{__('Password')}}" autocomplete="off">
                                </div> {{-- input-container --}}

                                <div class="input-container">
                                    <span class="icon"><img
                                            src="{{ asset('assets/icons/calendarIconWht.png') }}"></span>
                                    <input type="text" name="nacimiento" id="date" max="{{ $lastDate }}"
                                        min="1920-01-01" value="{{ old('nacimiento') }}" class="form-input"
                                        placeholder="{{__('Birth date')}}" onfocus="(this.type = 'date')">
                                </div> {{-- input-container --}}

                                <div class="input-container">
                                    <span class="icon"><img
                                            src="{{ asset('assets/icons/musicIconWht.png') }}"></span>
                                    <input type="text" name="usuario" value="{{ old('usuario') }}"
                                        class="form-input" placeholder="{{__('Username')}}" autocomplete="off">
                                </div> {{-- input-container --}}

                                <div class="input-container">
                                    <span class="icon"><img src="{{ asset('assets/icons/starIconWht.png') }}"></span>
                                    <select name="user_type" id="user-type" form="registroForm" class="form-input">
                                        <option value="" selected disabled>{{__('Select account type')}} </option>
                                        <option value="user" {{ old('user_type') == 'user' ? 'selected' : '' }}
                                            class="text-gray-800">
                                            {{__('User')}}</option>
                                        <option value="artist" {{ old('user_type') == 'artist' ? 'selected' : '' }}
                                            class="text-gray-800">
                                            {{__('Artist')}}</option>
                                    </select>
                                </div> {{-- input-container --}}

                                <div class="gender-container">
                                    <label class="block font-titulo font-bold text-base text-center">{{__('Genre')}}</label>

                                    <div class="gender-style flex items-center justify-center mt-3 border-r-0">

                                        <div class="rad-cont">
                                            <input type="radio" name="género" value="male" class='radio'
                                                id="M" />
                                            {{-- @if (old('gender')) checked @endif --}}
                                            <label class="gender-input rounded-l-md" for="M">
                                                <span><img src="{{ asset('assets/icons/mIcon.png') }}"></span>
                                            </label>
                                        </div> {{-- rad-cont --}}

                                        <div class="rad-cont">
                                            <input type="radio" name="género" value="female" class='radio'
                                                id='F' />

                                            <label class="gender-input rounded-r-md" for="F">
                                                <span><img src="{{ asset('assets/icons/wIcon.png') }}"></span>
                                            </label>
                                        </div> {{-- rad-cont --}}
                                    </div> {{-- gender-style --}}
                                </div> {{-- gender-container --}}

                                <div class="button-center flex items-center justify-center">
                                    <input type="submit" class="submit font-titulo" value="{{__('Sign up')}}">
                                </div> {{-- button-center --}}

                                <h2 class="block text-center mt-5 text-gray-900">{{__('Do you already have an account?')}}<a
                                        href="{{ route('login') }}" class="block"> <span
                                            class="font-bold hover:text-slate-50 transition all">{{__('Log in')}}</span></a></h2>

                            </form>
@endsection
                        



