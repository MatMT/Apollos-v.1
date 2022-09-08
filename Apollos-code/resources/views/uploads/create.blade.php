@extends('layouts.shape1')

@section('title')
    {{ __('Uploading a single') }}
@endsection

@section('js')
    @vite(['resources/js/app.js'])
@endsection
@section('css')
    {{-- @vite('resources/css/profileStyles.css') --}}
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
    <style>
        .dropzone {
            border-style: dashed !important;
            border-width: 3px !important;
            border-color: white !important;

            background: rgba(34, 47, 62, 0.45);
            backdrop-filter: blur(8px);
        }

        .song-info-inputs {
            background-color: white;
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(8px);
        }

        .submit-bttn {
            background-color: #131313;

            filter: drop-shadow(0 10px 8px rgb(0 0 0 / 0.04)) drop-shadow(0 4px 3px rgb(0 0 0 / 0.1));
        }

        .dz-preview {
            background: transparent !important;
        }

        span.remove-dz-img {
            margin-top: 5px;
            display: flex;
            justify-content: center;
        }

        span.remove-dz-img img {
            height: 25px;
            width: 25px;
        }
    </style>
@endsection

@section('header')
    <x-header></x-header>
@endsection

@section('content')
    <h1 class='text-white font-titulo text-3xl font-bold mt-4 mb-2 anim2 w-full text-center px-10'>
        {{ __('Upload a single') }}
    </h1>
    <div class="md:flex md:items-center flex flex-wrap justify-center items-center h-4/6 px-10 pt-10 mt-5">

        <div class="md:w-1/2 pt-5 text-white">
            <div class="md:h-1/2 px-10 mt-5 ">

                <form action="{{ route('image.store') }}" method="POST" enctype="multipart/form-data" id="dropzone_img"
                    class="dropzone md:h-1/2 border-5 border-dashed @error('imagen') border-red-500 @enderror w-full h-96 rounded flex flex-col justify-center items-center">
                    @csrf
                    <div class="dz-message" data-dz-message><span>{{ __('Upload the') }} <b>{{ __('cover') }}</b>
                            {{ __('here') }}</span></div>
                </form>

                @error('imagen')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                        {{ __('The image is obligatory.') }}</p>
                @enderror

            </div> <!-- Imagen -->

            <div class="md:h-1/2 px-10 mt-5">

                <form action="{{ route('audio.store') }}" method="POST" enctype="multipart/form-data" id="dropzone_audio"
                    class="dropzone md:h-1/2  border-dashed border-2 @error('song') border-red-500 @enderror w-full h-96 rounded flex flex-col justify-center items-center">
                    @csrf
                    <div class="dz-message" data-dz-message><span>{{ __('Upload the') }} <b>{{ __('song') }}</b>
                            {{ __('here') }}</span></div>
                </form>

                @error('song')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                        {{ __('The song is obligatory.') }}</p>
                @enderror
                <p class="p-2 text-red-500 text-right font-semibold"><span class="inline"><img
                            src="{{ asset('assets/icons/errorIcon.png') }}" class="h-4 inline m-2">
                        {{ __('12 Mb maximum per song') }}

                    </span></p>
            </div> <!-- .Mp3 -->

        </div> <!-- Subir archivos -->

        <div class="song-info-inputs md:w-1/2 p-10 bg-white rounded-lg shadow mt-10 md:mt-0 text-gray-800">
            <form action="{{ route('data.store') }}" method="POST" id="song_up" novalidate autocomplete="off">
                @csrf
                <!-- Token de imagen -->
                <div class="mb-5">
                    <input type="hidden" name="imagen" value="{{ old('imagen') }}" />
                </div>

                <!-- Token de audio -->
                <div class="mb-5">
                    <input type="hidden" name="song" value="{{ old('song') }}" />
                </div>

                <!-- Token de duración -->
                <div class="mb-5">
                    <input type="hidden" name="time" value="{{ old('time') }}" />
                </div>

                <!-- Token de duración -->
                <div>
                    <input type="hidden" name="total" value="{{ old('total') }}" />
                </div>

                <!-- Campos -->
                <div class="mb-5">
                    <label for="titulo" class="mb-2 block uppercase text-gray-800 font-bold">{{ __('Title') }}</label>
                    <input type="text" id="titulo" name="titulo" placeholder="{{ __('Title of your song') }}"
                        class="border p-3 w-full rounded-lg @error('titulo') border-red-500 @enderror"
                        value="{{ old('titulo') }}">
                    @error('titulo')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-5">

                    <x-gender-select></x-gender-select>

                    @error('genero')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                            {{ $message }}</p>
                    @enderror
                </div>

                <input type="submit" value="{{ __('Upload') }}"
                    class="submit-bttn bg-sky-600 transition-colors cursor-pointer uppercase font-bold w-full p-3  text-white rounded-lg" />

            </form>
        </div> <!-- Rellenar información -->
    </div>
@endsection
