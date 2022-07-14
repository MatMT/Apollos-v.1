@extends('partials.nav_bar')

@section('titulo')
    Subiendo una nueva canción
@endsection

@push('styles')
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
@endpush

@section('contenido')
    <div class="md:flex md:items-center">
        <div class="md:w-1/2">
            <div class="md:h-1/2 px-10">

                <form action="{{ route('image.store') }}" method="POST" enctype="multipart/form-data" id="dropzone_img"
                    class="dropzone md:h-1/2 border-dashed border-2 @error('imagen') border-red-500 @enderror w-full h-96 rounded flex flex-col justify-center items-center">
                    @csrf
                </form>

                @error('imagen')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                        La imagen es obligatoria.</p>
                @enderror

            </div>
            <div class="md:h-1/2 px-10">

                <form action="{{ route('audio.store') }}" method="POST" enctype="multipart/form-data" id="dropzone_audio"
                    class="dropzone md:h-1/2  border-dashed border-2 @error('imagen') border-red-500 @enderror w-full h-96 rounded flex flex-col justify-center items-center">
                    @csrf
                </form>

                @error('imagen')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                        La imagen es obligatoria.</p>
                @enderror

            </div>
        </div>


        <div class="md:w-1/2 p-10 bg-white rounded-lg shadow mt-10 md:mt-0">
            <form action="{{ route('data.store') }}" method="POST" id="song_up" novalidate>
                @csrf
                {{-- Imagen --}}
                <div class="mb-5">
                    <input type="hidden" name="imagen" />
                </div>
                {{-- Canción --}}
                <div class="mb-5">
                    <input type="hidden" name="song" />
                    @error('song')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                            La canción es obligatoria.</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="titulo" class="mb-2 block uppercase text-gray-500 font-bold">Titulo</label>
                    <input type="text" id="titulo" name="titulo" placeholder="Titulo de tu canción"
                        class="border p-3 w-full rounded-lg @error('titulo') border-red-500 @enderror"
                        value="{{ old('titulo') }}">
                    @error('titulo')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="genero" class="mb-2 block uppercase text-gray-500 font-bold">Género</label>
                    <select name="genero" id="genero" form="song_up"
                        class="border p-3 w-full rounded-lg text-gray-600 @error('genero') border-red-500 @enderror">
                        <option value="" selected disabled> -- Selecciona el género de tu canción --
                        </option>
                        {{-- Operador ternario para antiguo select --}}
                        <option value="pop" {{ old('genero') == 'pop' ? 'selected' : '' }}>Pop</option>
                        <option value="rock" {{ old('genero') == 'rock' ? 'selected' : '' }}>Rock</option>
                        <option value="electronic" {{ old('genero') == 'electronic' ? 'selected' : '' }}>Electrónica
                        </option>
                        <option value="instrumental"{{ old('genero') == 'instrumental' ? 'selected' : '' }}>Instrumental
                        </option>
                    </select>
                    @error('genero')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                            {{ $message }}</p>
                    @enderror
                </div>

                <input type="submit" value="Publicar"
                    class="bg-sky-600 transition-colors cursor-pointer uppercase font-bold w-full p-3  text-white rounded-lg" />

            </form>
        </div>
    </div>
@endsection
