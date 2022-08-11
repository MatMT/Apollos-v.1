@extends('partials.nav_bar')

@section('titulo')
    Subiendo un Álbum
@endsection

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

    <!-- CUERPO -->
    <div class="px-10">
        <div>
            <form action="{{ route('upload.store_3') }}" method="POST" id="song_up" novalidate>
                @csrf

                <div class="mb-5">
                    <label for="genero" class="mb-2 block uppercase text-gray-500 font-bold">
                        <select name="genero" id="genero" form="song_up"
                            class="border p-3 w-full rounded-lg text-gray-600 @error('genero') border-red-500 @enderror">
                            <option value="" selected disabled> -- Selecciona el género de tu canción --
                            </option>
                            {{-- Operador ternario para antiguo select --}}
                            <option value="pop" {{ old('genero') == 'pop' ? 'selected' : '' }}>Pop</option>
                            <option value="rock" {{ old('genero') == 'rock' ? 'selected' : '' }}>Rock</option>
                            <option value="electronic" {{ old('genero') == 'electronic' ? 'selected' : '' }}>Electrónica
                            </option>
                            <option value="instrumental"{{ old('genero') == 'instrumental' ? 'selected' : '' }}>
                                Instrumental
                            </option>
                        </select>
                    </label>
                    @error('genero')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                            {{ $message }}</p>
                    @enderror
                </div>

                <input type="submit" value="Siguiente"
                    class=" bg-teal-500 transition-colors cursor-pointer uppercase font-bold w-full p-3  text-white rounded-lg" />
            </form>
        </div> <!-- Envío de input -->

    </div> <!-- Imagen -->
@endsection
