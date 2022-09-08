@extends('partials.nav_bar')

@push('js')
    @vite(['resources/js/img.js'])
@endpush

@push('styles')
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
@endpush

@section('titulo')
    Editar Perfil: {{ auth()->user()->name_artist }}
@endsection

@section('contenido')
    <div class="container mb-5" style="background-color: #fff;">
        <!--- Mensajes -->
        @if (session()->has('name'))
            {{ session()->get('name') }}
        @endif

        @if (session()->has('last_name'))
            {{ session()->get('last_name') }}
        @endif

        @if (session()->has('username'))
            {{ session()->get('username') }}
        @endif

        @if (session()->has('imgmessage'))
            {{ session()->get('imgmessage') }}
        @endif

        <hr>
        </h2>
        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="md:h-1/2 px-10">

                    <form action="{{ route('image.pfp.store') }}" method="POST" enctype="multipart/form-data"
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
                <form action="{{ route('settings.store', $user) }}" method="POST" class="needs-validation" novalidate>
                    @csrf
                    {{-- Intento Foto de Perfil --}}
                    <div class="mb-5">
                        <input type="hidden" name="imagen" value="{{ old('imagen') }}" />
                    </div>
            </div>
            {{-- Intento new name --}}
            <div class="row mb-3">
                <div class="form-group mt-3">
                    <label for="new_name">Actualiza Nombre</label>
                    <input type="text" name="new_name" value="{{ Auth::user()->name }}"
                        class="form-control @error('new_name') is-invalid @enderror" required>
                    @error('new_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            {{-- Intento new name --}}
            {{-- Intento new last-name --}}
            <div class="row mb-3">
                <div class="form-group mt-3">
                    <label for="new_name">Actualiza Apellido</label>
                    <input type="text" name="new_lastname" value="{{ Auth::user()->last_name }}"
                        class="form-control @error('new_lastname') is-invalid @enderror" required>
                    @error('new_lastname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            {{-- Intento new lats_name --}}
            {{-- Intento new Artist Name --}}
            <div class="row mb-3">
                <div class="form-group mt-3">
                    <label for="username">Actualiza tu Nombre de Artista</label>
                    <input type="text" name="username" value="{{ Auth::user()->username }}"
                        class="form-control @error('username') is-invalid @enderror" required>
                    @error('username')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            {{-- Intento new Artist Name --}}
            <hr>
            <div class="row mb-3">
                <div class="form-group mt-3">
                    <label for="password_actual">Clave Actual</label>
                    <input type="password" name="password_actual"
                        class="form-control @error('password_actual') is-invalid @enderror" required>
                    @error('password_actual')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <div class="form-group mt-3">
                    <label for="new_password ">Nueva Clave</label>
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                        required>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <div class="form-group mt-3">
                    <label for="confirm_password">Confirmar nueva Clave</label>
                    <input type="password" name="confirm_password"
                        class="form-control @error('confirm_password') is-invalid @enderror"required>
                    @error('confirm_password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <hr>
            <div class="row text-center mb-4 mt-5">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary" id="formSubmit">Guardar Cambios</button>
                    <a href="{{ route('main') }}" class="btn btn-secondary">Cancelar</a>
                </div>
            </div>
            </form>
        </div>
    </div>
    </div>
@endsection
