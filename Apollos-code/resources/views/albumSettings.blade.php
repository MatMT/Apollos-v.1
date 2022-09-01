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
        @if (session()->has('cambios'))
            Campos actualizados
        @endif      

        <div class="col-md-8">
        
            <hr>

            <form action="{{route('album.config', ['user'=> $user, 'album' => $album->id])}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-5">
                    <label for="image" class="mb-2 block uppercase text-gray-500 font-bold">Imagen de
                        Perfil</label>

                    <input type="file" id="image" name="image" accept=".jpg, .jpeg, .png"
                        class="border p-3 w-full rounded-lg">
                </div>

            <div class="row mb-3">
                <div class="form-group mt-3">
                    <label for="new_name_album">Actualiza el nombre de tu álbum</label>
                <input type="text" name="new_name_album" id="new_name_album" value='{{$album->name_album}}' class='form-control' @error('new_name_album') is-invalid @enderror" required >
                
                @error('new_name_album')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
            </div>

            <label for="genero" class="genero mb-2 block uppercase text-gray-800 font-bold">Género</label>
            <select name="genero" id="genero"    
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

            <input type="submit" value="Change  cambios">
        </form>
        </div>
@endsection