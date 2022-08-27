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
        <div class="basis-1/5 text-center p-1 @yield('step5')">Subir</div>
    </div> <!-- Progress bar -->

    <!-- SUBTITULO -->
    <div class="mx-auto mt-8">
        <h2 class="font-black text-center text-4xl mb-10">
            @yield('subtitulo')
        </h2>
    </div>

    <div class="md:flex md:items-center px-10">

        <!------------------------------------------------------------>
        <div class="md:w-1/2">

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
                        <label for="confirm">Confirmo que todo contenido súbido es de mi autoría.</label>
                    </div>

                    <div>
                        <input type="hidden" name="total" value="{{ $total }}" />
                    </div>

                    <input type="submit" value="Publicar"
                        class=" bg-teal-500 transition-colors cursor-pointer uppercase font-bold w-full p-3  text-white rounded-lg" />
                </form>
            </div>
        </div>
        <div class="md:w-1/2">
            <img class=" p-14" src="{{ asset('storage') . '/uploads/imagenes/' . $album->image }}"
                alt="Imagen de la canción {{ $album->name_song }}">
        </div>
    </div> <!-- Contenedor principal -->
@endsection
