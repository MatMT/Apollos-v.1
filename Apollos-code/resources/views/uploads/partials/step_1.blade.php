@extends('layouts.shape1')

@section('title')
    Subiendo un álbum
@endsection

{{-- Se llama al Js y Css encargado de Dropzone --}}
@section('js')
    @vite(['resources/js/img.js'])
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
            <div class="basis-1/5 text-center py-3 bg-white @yield('step1')">Imagen</div>
            {{-- @yield('step') --}}
            <div class="basis-1/5 text-center py-3 bg-white @yield('step2')">Título</div>
            <div class="basis-1/5 text-center py-3 bg-white @yield('step3')">Género</div>
            @yield('song/s')
            <div class="basis-1/5 text-center py-3 bg-white @yield('step4')">Subir</div>
        </div> <!-- Progress bar -->
    </div>

    <!-- SUBTITULO -->
    <div class="mx-auto mt-8">
        <h2 class="text-white font-titulo text-3xl font-bold mb-5 text-center">
            @yield('subtitulo')
        </h2>
    </div>

    <!-- CUERPO -->
    <div class="px-16 xl:px-64 text-white p-5">
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
                <p class="text-red-500 mb-5 text-center md:text-right block font-semibold text-sm"><span class="inline"><img
                            src="{{ asset('assets/icons/errorIcon.png') }}" class="h-4 inline m-2"> Al darle siguiente no
                        podras editar la portada </span></p>

                <input type="submit" value="Siguiente"
                    class="submit-bttn  bg-teal-500 transition-colors cursor-pointer uppercase font-bold w-full p-3  text-white rounded-lg" />
            </form>

        </div> <!-- Envío de input -->

    </div> <!-- Imagen -->
@endsection
