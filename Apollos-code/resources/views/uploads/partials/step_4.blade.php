@extends('partials.nav_bar')

@section('titulo')
    Subiendo un Álbum
@endsection

{{-- Se llama al Js y Css encargado de Dropzone --}}
@push('js')
    @vite(['resources/js/song.js'])
@endpush

@push('styles')
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
@endpush

@section('contenido')
    <div class="flex my-0 mx-auto  sm:w-full sm:flex-row flex-col w-3/4 bg-white rounded-lg shadow p-3">
        <div class="basis-1/5 text-center p-1 @yield('step1')">Imagen</div>
        {{-- @yield('step') --}}
        <div class="basis-1/5 text-center p-1 @yield('step2')">Titulo</div>
        <div class="basis-1/5 text-center p-1 @yield('step3')">Género</div>
        @yield('song/s')
        <div class="basis-1/5 text-center p-1 @yield('step4')">Subir</div>
    </div> <!-- Progress bar -->

    <!-- SUBTITULO -->
    <div class="mx-auto mt-8">
        <h2 class="font-black text-center text-4xl mb-10">
            @yield('subtitulo')
        </h2>
    </div>

    <div class="md:flex md:items-center px-10">

        <div class="md:w-2/5">
            <div class="md:h-1/2 px-10">
                <p class="p-2 text-slate-400">6 Mb máximos por canción</p>

                <form action="{{ route('audio.store') }}" method="POST" enctype="multipart/form-data" id="dropzone_audio"
                    class="dropzone md:h-1/2  border-dashed border-2 @error('song') border-red-500 @enderror w-full h-96 rounded flex flex-col justify-center items-center">
                    @csrf
                </form> <!-- DROPZONE -->

                <!------------------------------------------------------------>

                <form action="{{ route('album_data.store') }}" method="POST" id="song_up" novalidate>
                    @csrf

                    <!-- Token de audio -->
                    <div class="mb-5">
                        <input type="hidden" name="song" value="{{ old('song') }}" />
                    </div>

                    <!-- Token de duración -->
                    <div class="mb-5">
                        <input type="hidden" name="time" value="{{ old('time') }}" />
                    </div>

                    <!-- Campos -->
                    <div class="mb-5">
                        <label for="titulo" class="mb-2 block uppercase text-gray-500 font-bold">Titulo</label>
                        <input type="text" id="titulo" name="titulo" placeholder="Titulo de tu canción"
                            class="border p-3 w-full rounded-lg @error('titulo') border-red-500 @enderror"
                            value="{{ old('titulo') }}">
                        @error('titulo')
                            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                        @enderror
                    </div>
                    <p class="mb-5 text-center md:text-right block text-gray-500 text-sm">Al agregarla ya no podras retirar
                        la canción del registro*</p>

                    <input type="submit" value="Agregar"
                        class="bg-sky-600 transition-colors cursor-pointer uppercase font-bold w-full p-3 mb-5 md:mb-0 text-white rounded-lg" />
                </form>
            </div> <!-- .Mp3 -->
        </div> <!-- MITAD -->

        <!------------------------------------------------------------>

        <div class="md:w-3/5">
            <form action="{{ route('upload.store_4') }}" method="POST" id="song_up" novalidate>
                @csrf
                <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left text-gray-500">

                        <thead class="text-xs text-white uppercase bg-purple-900">
                            <tr>
                                <th scope="col" class="py-3 px-6">
                                    #
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Titulo
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
                            class=" bg-teal-500 transition-colors cursor-pointer uppercase font-bold w-full p-3  text-white rounded-lg" />
                    @endif
                @endif
            </form>
        </div> <!-- MITAD -->

    </div> <!-- Contenedor principal -->
@endsection
