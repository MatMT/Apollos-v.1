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


<div class="container mb-5" style="background-color: #fff;">

        <div class="col-md-8">
            <div class="md:h-1/2 px-10">
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
                        <form action="{{ route('album.settings') }}" method="POST" id="song_up" novalidate>
                            @csrf
        {{-- Portada de album actualiza no sirve xD --}}
        <div class="mb-5">
            <input type="hidden" name="imagen" value="{{ old('imagen') }}" />
        </div>
</div>




            {{-- Intento new name album --}}
            <div class="row mb-3">
                <div class="form-group mt-3">
                    <label for="new_name_album">Actualiza Nombre de tu Album</label>
                    <input type="text" name="new_name_album" value="{{ Auth::user()->name_album }}"
                        class="form-control @error('new_name_album') is-invalid @enderror" required>
                    @error('new_name_album')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                
            </div>
            {{-- Intento new name album--}}
            <div class="row text-center mb-4 mt-5">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary" id="formSubmit">Guardar Cambios</button>
                    <a href="{{ route('main') }}" class="btn btn-secondary">Cancelar</a>
                </div>
            </div>

@endsection

