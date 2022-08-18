@extends('partials.nav_bar')

@section('titulo')
    Subiendo un Álbum
@endsection

{{-- Se llama al Js y Css encargado de Dropzone --}}
@push('js')
    @vite(['resources/js/img.js'])
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

    <!-- CUERPO -->
    <div class="px-10">
        <form action="{{ route('image.store') }}" method="POST" enctype="multipart/form-data" id="dropzone_img"
            class="dropzone border-dashed border-2 @error('imagen') border-red-500 @enderror w-full h-96 rounded flex flex-col justify-center items-center">
            @csrf
        </form>
        @error('imagen')
            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                La imagen es obligatoria.</p>
        @enderror

        <div>
            <form action="{{ route('upload.store_1') }}" method="POST" id="song_up" novalidate>
                @csrf
                <!-- Token de imagen -->
                <div class="mb-5">
                    <input type="hidden" name="imagen" value="{{ old('imagen') }}" />
                </div>

                <input type="submit" value="Siguiente"
                    class=" bg-teal-500 transition-colors cursor-pointer uppercase font-bold w-full p-3  text-white rounded-lg" />
            </form>
        </div> <!-- Envío de input -->

    </div> <!-- Imagen -->
@endsection
