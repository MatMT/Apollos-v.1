@extends('partials.nav_bar')

@push('js')
    @vite(['resources/js/img.js'])
@endpush

@push('styles')
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
@endpush

@section('titulo')
    Actualizar datos de el album
@endsection

@section('contenido')

        <!--- Mensajes -->
        @if (session()->has('nameal'))
            {{ session()->get('nameal') }}
        @endif      

        {{$album}}
        <div class="col-md-8">
            <div class="md:h-1/2 px-10">
                <form action="{{ route('image.store') }}" method="POST" enctype="multipart/form-data"
                    id="dropzone_img"
                    class="dropzone md:h-1/2 border-dashed border-2 @error('imagen') border-red-500 @enderror w-full h-96 rounded flex flex-col justify-center items-center">
                    @csrf
                </form>
                @error('imagen')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                        La imagen es obligatoria.</p>
                @enderror
            </div>
            <hr>
            <form action="{{ route('album.settings', ['user' => $user, 'album' => $album->ID], ) }}" method="POST" class="needs-validation" novalidate>
                @csrf
                {{-- Intento Foto de Perfil --}}
                <div class="mb-5">
                    <input type="hidden" name="imagen" value="{{ old('imagen') }}" />
                </div>
        </div>

            {{-- Intento new name album --}}
            <div class="row mb-3">
                <div class="form-group mt-3">
                    <label for="new_name_album">Actualiza Nombre de tu Album</label>
                    <input type="text" name="new_name_album" value=""
                        class="form-control @error('new_name_album') is-invalid @enderror" required>
                    @error('new_name_album')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            {{-- Intento Actualizacion genero de album --}}
            <label for="genero" class="genero mb-2 block uppercase text-gray-800 font-bold">Género</label>
            <select name="genero" id="genero" form="song_up"    
                class="border p-3 w-full rounded-lg text-gray-800 @error('genero') border-red-500  @enderror">
                <option value="" selected disabled> -- Actualiza el género de tu canción --
                </option>
                {{-- Operador ternario para antiguo select --}}
                <option value="pop"         {{ old('genero') == 'pop' ? 'selected' : '' }}>Pop</option>
                <option value="rock"        {{ old('genero') == 'rock' ? 'selected' : '' }}>Rock</option>
                <option value="electronic"  {{ old('genero')  == 'electronic' ? 'selected' : '' }}>Electrónica</option>
                <option value="instrumental"{{ old('genero') == 'instrumental' ? 'selected' : '' }}>Instrumental</option>
                <option value="metal"       {{ old('genero') == 'metal' ? 'selected' : '' }}>Metal</option>
                <option value="bachata"     {{ old('genero') == 'bachata' ? 'selected' : '' }}>Bachata</option>
                <option value="salsa"       {{ old('genero') == 'salsa' ? 'selected' : '' }}>Salsa</option>
                <option value="indie"       {{ old('genero') == 'indie' ? 'selected' : '' }}>Indie</option>
                <option value="lo-fi"       {{ old('genero') == 'lo-fi' ? 'selected' : '' }}>Lo-Fi</option>
                <option value="hip hop"     {{ old('genero') == 'hip hop' ? 'selected' : '' }}>Hip hop</option>
                <option value="reggeaton"   {{ old('genero') == 'reggaeton' ? 'selected' : '' }}>Reggeaton</option>
                <option value="cumbia"      {{ old('genero') == 'cumbia' ? 'selected' : '' }}>Cumbia</option>
                <option value="rap"         {{ old('genero') == 'rap' ? 'selected' : '' }}>Rap</option>
                <option value="trap"        {{ old('genero') == 'trap' ? 'selected' : '' }}>Trap</option>
            </select>           
            {{-- Intento Actualizacion genero de album --}}
                        
            {{-- Intento new name album--}}
            <div class="row text-center mb-4 mt-5">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary" id="formSubmit">Guardar Cambios</button>
                    <hr>
                    <a href="{{ route('main') }}" class="btn btn-secondary">Cancelar o volver</a>
                </div>
            </div>
            </form
@endsection