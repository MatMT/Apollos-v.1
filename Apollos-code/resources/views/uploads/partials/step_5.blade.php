@extends('layouts.shape1')

@section('title')
{{__('Uploading an album')}}
@endsection

{{-- Se llama al Js y Css encargado de Dropzone --}}
@section('js')
    @vite(['resources/js/song.js'])
    @vite(['resources/js/img.js'])
@endsection

@section('css')
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
    @vite(['resources/css/stepsStyles.css'])
@endsection

@section('header')
    <x-header></x-header>
@endsection

@section('content')
    <div class="p-10 overflow-hidden">
        <div
            class="flex my-0 mx-auto  sm:w-full sm:flex-row flex-col w-3/4  rounded-xl shadow overflow-hidden font-semibold">
            <div class="basis-1/5 text-center py-3 bg-white @yield('step1')">{{__('Album cover')}}</div>
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

    <div class="md:flex md:items-center px-2 xl:px-28 gap-8">

        <!------------------------------------------------------------>
        <div class="md:w-1/2 px-16">

            <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500">

                    <thead class="blur-bg text-xs text-white uppercase">
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
                                        Titulo {{ $i }}
                                    </td>
                                </tr>
                            @endfor
                        @endif

                    </tbody>
                </table>
            </div> <!-- Tabla -->
            <br>
            <div>
                <!-- Confirmar públicación -->
                <form action="{{ route('upload.store_5') }}" method="POST" id="song_up" novalidate>
                    @csrf

                    <div class="mb-5 p-2 @error('confirm') border-dashed border-2 border-red-500 @enderror">
                        <input type="checkbox" value="1" name="confirm">
                        <label for="confirm" class='text-white'>{{__('I confirm that all uploaded content is of my authorship')}}</label>
                    </div>

                    <div>
                        <input type="hidden" name="total" value="{{ $total }}" />
                    </div>

                    <input type="submit" value="{{__('Publish')}}"
                    class="submit-bttn transition-colors cursor-pointer uppercase font-bold w-full p-3  text-white rounded-lg" />
                </form>
            </div>
        </div>
        <div class="md:w-1/2 p-32 rounded-2xl overflow-hidden">
            <img class="rounded-3xl " src="{{ asset('storage') . '/uploads/imagenes/' . $album->image }}"
                alt="Imagen de la canción {{ $album->name_song }}">
        </div>
    </div> <!-- Contenedor principal -->
@endsection
