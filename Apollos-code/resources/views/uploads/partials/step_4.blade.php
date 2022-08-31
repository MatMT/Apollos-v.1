@extends('layouts.shape1')

@section('title')
{{__('Uploading an album')}}
@endsection

{{-- Se llama al Js y Css encargado de Dropzone --}}
@section('js')
    @vite(['resources/js/song.js'])
@endsection

@section('css')
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
    <style>
        .dropzone {
            border-style: dashed !important;
            border-width: 3px !important;
            border-color: white !important;

            background: rgba(34, 47, 62, 0.45);
            backdrop-filter: blur(8px);
            font-size: 1.5em;
        }

        .dz-preview {
            background: transparent !important;
        }

        .submit-bttn {
            background-color: #131313;

            filter: drop-shadow(0 10px 8px rgb(0 0 0 / 0.04)) drop-shadow(0 4px 3px rgb(0 0 0 / 0.1));
        }

        .submit-bttn:hover {
            background-color: white;
            transition: all 0.2s ease-in-out;
            color: black;
        }

        .blur-bg {
            background: rgba(39, 39, 39, 0.5);
            backdrop-filter: blur(8px);
        }
    </style>
@endsection

@section('header')
    <x-header></x-header>
@endsection

@section('content')
    <div class="p-10 overflow-hidden">
        <div
            class="flex my-0 mx-auto  sm:w-full sm:flex-row flex-col w-3/4  rounded-xl shadow overflow-hidden font-semibold">
            <div class="basis-1/5 text-center py-3 bg-white @yield('step1')">{{__('Image')}}</div>
            {{-- @yield('step') --}}
            <div class="basis-1/5 text-center py-3 bg-white @yield('step2')">{{__('Title')}}</div>
            <div class="basis-1/5 text-center py-3 bg-white @yield('step3')">{{__('Genre')}}</div>
            @yield('song/s')
            <div class="basis-1/5 text-center py-3 bg-white @yield('step4')">{{__('Upload')}}</div>
        </div> <!-- Progress bar -->
    </div>

    <!-- SUBTITULO -->
    <div class="mx-auto mt-8">
        <h2 class="text-white font-titulo text-3xl font-bold mb-5 text-center">
            @yield('subtitulo')
        </h2>
    </div>

    <div class="md:flex md:items-center  justify-center px-16 gap-4">

        <div class="md:w-2/5 xl:px-16">
            <div class="md:h-1/2">
                <p class="text-red-500 mb-3 text-center md:text-right block font-semibold text-sm"><span class="inline"><img
                            src="{{ asset('assets/icons/errorIcon.png') }}" class="h-4 inline m-2"> {{__('6mb per song maximum')}}
                    </span></p>

                <form action="{{ route('audio.store') }}" method="POST" enctype="multipart/form-data" id="dropzone_audio"
                    class="dropzone  border-dashed border-2 @error('song') border-red-500 @enderror w-full text-white rounded flex flex-col justify-center items-center">
                    @csrf
                </form> <!-- DROPZONE -->

                <!------------------------------------------------------------>

                <form action="{{ route('album_data.store') }}" method="POST" id="song_up" novalidate>
                    @csrf

                    <!-- Token de audio -->
                    <div>
                        <input type="hidden" name="song" value="{{ old('song') }}" />
                    </div>

                    <!-- Token de duración -->
                    <div>
                        <input type="hidden" name="time" value="{{ old('time') }}" />
                    </div>

                    <!-- Token de duración -->
                    <div>
                        <input type="hidden" name="total" value="{{ old('total') }}" />
                    </div>

                    <!-- Campos -->
                    <div class="mb-5">
                        <label for="titulo" class="mb-2 block uppercase text-white font-bold mt-5">Título</label>
                        <input type="text" id="titulo" name="titulo" placeholder="Título de tu canción"
                            class="border p-3 w-full rounded-lg @error('titulo') border-red-500 @enderror"
                            value="{{ old('titulo') }}">
                        @error('titulo')
                            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                        @enderror
                    </div>
                    <p class="text-red-500 mb-3 text-center md:text-right block font-semibold text-sm"><span
                            class="inline"><img src="{{ asset('assets/icons/errorIcon.png') }}" class="h-4 inline m-2"> Al
                            {{__(' By adding it you will no longer be able to remove the song from the registry.')}} </span></p>

                    <input type="submit" value="Agregar"
                        class="submit-bttn transition-colors cursor-pointer uppercase font-bold w-full p-3 mb-5 md:mb-0 text-white rounded-lg" />
                </form>
            </div> <!-- .Mp3 -->
        </div> <!-- MITAD -->

        <!------------------------------------------------------------>

        <div class="md:w-3/5 px-8 xl:px-16">
            <form action="{{ route('upload.store_4') }}" method="POST" id="song_up" novalidate>
                @csrf
                <div class="overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left text-gray-500">

                        <thead class="text-xs blur-bg text-white uppercase">
                            <tr>
                                <th scope="col" class="py-3 px-6">
                                    #
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    {{__('Title')}}
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    ⏱️
                                </th>
                            </tr>
                        </thead>

                        <tbody>
                            @if ($songs->count())
                                @foreach ($songs as $song)
                                    <tr class="bg-white border-b  hover:bg-gray-50">
                                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap ">
                                            {{ $i += 1 }}
                                        </th> <!-- id -->
                                        <td class="py-4 px-6">
                                            {{ $song->name_song }}
                                        </td>
                                        <td class="py-4 px-6">
                                            {{ $song->time }}
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                @for ($i = 1; $i < 6; $i++)
                                    <tr class="bg-white border-b  hover:bg-gray-50">
                                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap ">
                                            {{ $i }}
                                        </th> <!-- id -->
                                        <td class="py-4 px-6">
                                            {{__('Title')}} {{ $i }}
                                        </td>
                                        <td class="py-4 px-6">

                                        </td>
                                    </tr>
                                @endfor
                            @endif

                        </tbody>
                    </table>
                </div> <!-- Tabla -->
                <br>

                @if ($i > 1)
                    @if ($songs->count())
                        <input type="submit" value="Siguiente"
                            class="submit-bttn transition-colors cursor-pointer uppercase font-bold w-full p-4 mb-12 text-white rounded-lg" />
                    @endif
                @endif
            </form>
        </div> <!-- MITAD -->

    </div> <!-- Contenedor principal -->
@endsection
