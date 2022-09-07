@extends('layouts.shape1')

@section('js')
    @vite(['resources/js/configPrfl.js'])
@endsection

@section('header')
    <x-header></x-header>
@endsection
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
@section('css')
    <style>
        header.sticky,
        header {
            position: fixed !important;
        }

        .desactive {
            display: none;
        }

        .IMPORTANTactive {
            display: inline !important;
        }

        .IMPORTANTnormal {
            font-weight: normal !important;
        }

        li {
            cursor: pointer;
        }

        .minH {
            min-height: 558px;
        }

        .full-container {
            -webkit-box-shadow: -10px 0px 13px -7px #000000, 10px 0px 13px -7px #000000, 5px 5px 15px 5px rgba(0, 0, 0, 0);
            box-shadow: -10px 0px 13px -7px #000000, 10px 0px 13px -7px #000000, 5px 5px 15px 5px rgba(0, 0, 0, 0);
        }

        input:focus {
            outline: none;
            background-color: rgb(229 229 229);
            transition: all 0.5s ease-out;
        }

        .top-div,
        .submit-bttn {
            background-color: #131313;

            filter: drop-shadow(0 10px 8px rgb(0 0 0 / 0.04)) drop-shadow(0 4px 3px rgb(0 0 0 / 0.1));
        }

        .player {
            display: none;
        }

        .submit-bttn:hover {
            background-color: white;
            transition: all 0.2s ease-in-out;
            color: black;
        }

        .input-file {
            width: 0.1px;
            height: 0.1px;
            opacity: 0;
            overflow: hidden;
            position: absolute;
            z-index: -1;
        }

        .foo{
            max-width: 400px;
            cursor: pointer;
            border: 0;
            height: 60px;
            border-radius: 5px;
            outline: 0;
            transition: 200ms all ease;
            border-bottom: 3px solid rgba(0,0,0,.2);
            background: #1d1e22;
            text-shadow: 0 2px 0 rgba(0,0,0,.2);
            color: #fff;
            font-size: 20px;
            text-align: center;
            line-height: 60px;
            border-radius: 5px;

            text-overflow: ellipsis;
            overflow: hidden;
            white-space: nowrap;
        }

        .foo:hover {
        background: #75ea96;
        }    

        .photo-ico{
            z-index: 2;
        }

    </style>
@endsection

@section('title')
    {{ $song->sencillo ? __('Updating your single info') : __('Updating your song info') }}
@endsection

@section('content')
    <div class=" md:flex md:justify-center pt-40 pb-32 overflow-hidden px-10 anim2">
        <div class=" full-container justify-center md:w-3/4 flex shadow minH rounded-2xl overflow-hidden relative">

            <div class='top-div absolute w-full text-center p-5'>
                <p class="text-2xl font-bold rounded-lg text-white ">
                    {{ $song->sencillo ? __('Updating your single info') : __('Updating your song info') }}
                </p>
            </div>

            <div class="md:w-full p-12 bg-slate-100 w-full mt-[70px]">
                @if (session()->has('cambios'))
                    <li class="flex p-4 text-sm rounded-lg bg-green-200 text-green-800" role="alert">
                        <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <p class="font-medium">{{__('Updated fields!')}}</p>
                    </li>
                @endif

                <form action="{{ route('song.settings.store', ['user' => $user, 'song' => $song->id]) }}" method="POST" class="needs-validation mt-4" novalidate enctype="multipart/form-data">
                    @csrf

                    <div class="mb-5">
                        <label for="new_name_song" class="mb-2 block uppercase text-gray-800 font-bold">{{__('Title')}}</label>
                        <input type="text" name="new_name_song" placeholder="{{ $song->name_song }}"
                            class="border p-3 w-full rounded-lg @error('titulo') border-red-500 @enderror">
                        @error('new_name_sencillo')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    @if($song->sencillo)
                        <div class="mb-5">
                            <x-gender-select></x-gender-select> 
                            @error('genero')
                            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                                {{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-5">
                            <label for="image" class="mb-2 block uppercase text-gray-800 font-bold">{{__('Song cover')}}</label>
                            <input type="file" id="image" name="image" accept=".jpg, .jpeg, .png" class="input-file" class="material-symbols-outlined">
                            <label for="" class="foo flex items-center justify-center p-3"> 
                                <span class="material-symbols-outlined photo-ico inline-block px-2" >
                                    add_a_photo
                                </span>
                                
                                <h3 id="file-upload-filename" class="text-ellipsis overflow-hidden whitespace-nowrap"></h3>
                            </label>
                        </div>
                    @else
                        <div class="mb-5">
                            <p class="mb-2 block uppercase text-gray-800 font-bold">{{__('Genre')}}</p>
                            <div class="errors text-red-600 px-3 py-2 rounded mb-3">
                                <p>
                                    <span class="inline"><img src="{{ asset('assets/icons/errorIcon.png') }}" class="h-4 inline m-2"><strong class="font-bold">{{__("Update the song genre by editing your album")}}</strong></span>
                                </p>
                            </div>
                        </div>

                        <div class="mb-5">
                            <p class="mb-2 block uppercase text-gray-800 font-bold">{{__('Song cover')}}</p>
                            <div class="errors text-red-600 px-3 py-2 rounded mb-3">
                                <p>
                                    <span class="inline"><img src="{{ asset('assets/icons/errorIcon.png') }}" class="h-4 inline m-2"><strong class="font-bold">{{__("Update the song cover by editing your album")}}</strong></span>
                                </p>
                            </div>
                        </div>
                    @endif

                    <input type="submit" value="{{__('Save changes')}}"
                    class="submit-bttn bg-sky-600 transition-colors cursor-pointer uppercase font-bold w-full p-3  text-white rounded-lg" />
                </form>
            </div>
        </div>
    </div>

    <script>
        var input = document.getElementById( 'image' );
        var infoArea = document.getElementById( 'file-upload-filename' );

        input.addEventListener( 'change', showFileName );

        function showFileName( event ) {
        
        var input = event.srcElement;
        
        var fileName = input.files[0].name;
        
        infoArea.textContent =  fileName;
        }
    </script>
@endsection
