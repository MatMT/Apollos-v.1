@extends('partials.nav_bar')

@push('js')
    @vite(['resources/js/img.js'])
@endpush

@push('styles')
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
@endpush

@section('titulo')
    Actualizar datos de {{ $song->sencillo ? 'tu sencillo' : 'tu canción' }}
@endsection

@section('contenido')

        {{-- {{dd($song)}} --}}
        {{ Auth::user()->name_song }}
        {{-- {{dd($song)}} --}}
        <!--- Mensajes -->
        {{-- @if (session()->has('nameal'))
            {{ session()->get('nameal') }}
        @endif       --}}

        <div class="col-md-8">
            <div class="md:h1/2 px-10">
                <form action="{{route('song.settings', ['user'=> $user, 'song' => $song->id])}}" method="POST" class="needs-validation" novalidate enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <div class="form-group mt-3">
                            <label for="new_name_song">Actualiza el nombre de {{ $song->sencillo ? 'tu sencillo' : 'tu canción' }}</label>
                            <input type="text" name="new_name_song" value="{{$song->name_song}}"
                                class="form-control @error('new_name_song') is-invalid @enderror" required>
                            @error('new_name_sencillo')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    @if ($song->sencillo)
                        <div class="mb-5">
                            <label for="image" class="mb-2 block uppercase text-gray-500 font-bold">Imagen de
                                Perfil</label>
        
                            <input type="file" id="image" name="image" accept=".jpg, .jpeg, .png"
                                class="border p-3 w-full rounded-lg">
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
                    @else
                        <div class="mb-5">
                            <label for="image" class="mb-2 block uppercase text-gray-500 font-bold">Portada álbum</label>
        
                            <p>Si deseas editar la foto de la canción debes editar la portada de su respectivo álbum</p>
                        </div>

                        <label for="genero" class="genero mb-2 block uppercase text-gray-800 font-bold">Género</label>
                            <p class="pb-3">Si deseas editar el género de la canción debes editar el género de su respectivo álbum</p>
                    @endif
                        <input type="submit" value="Change  cambios">
                </form>
            </div>
        </div>
@endsection