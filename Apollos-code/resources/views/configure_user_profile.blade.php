<div class="container mb-5" style="background-color: #fff;">

    <!--- Mensajes -->
    {{-- @include('msjs') --}}


    @if(session()->has('name') )
            {{ session()->get('name')}}
    @endif

    @if(session()->has('last_name') )
            {{ session()->get('last_name')}}
    @endif

    @if(session()->has('username') )
            {{ session()->get('username')}}
    @endif
 

    <h2 class="text-center">Actualizar mi datos
        <hr>
    </h2>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="{{ route('changeData') }}" method="POST" class="needs-validation" novalidate>
                @csrf

                   {{-- Intento Foto de Perfil --}}
                <div class="row mb-3">
                    <div class="form-group mt-3">
                        <label  for="avatar"> Profile Pic
                            <input type="file" name="avatar">
                        </label>
                    </div>
                </div>
                   {{-- Intento Foto de Perfil --}}
                <div class="row mb-3">
                    <div class="form-group mt-3">
                        <label for="name">Nombre de Usuario</label>
                        <input type="text" name="name" value="{{ Auth::user()->name }}"
                            class="form-control @error('name') is-invalid @enderror" required>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="form-group mt-3">
                        <label for="username">Nombre de Artista</label>
                        <input type="text" name="name_artist" value="{{ Auth::user()->username}}"
                            class="form-control @error('username') is-invalid @enderror" required>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>--
   {{-- Intento new name --}}
                <div class="row mb-3">
                    <div class="form-group mt-3">
                        <label for="new_name">Actualiza Nombre</label>
                        <input type="text" name="new_name"
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
                        <input type="text" name="new_lastname"
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
                        <label for="new_artname">Actualiza tu Nombre de Artista</label>
                        <input type="text" name="new_artname"
                            class="form-control @error('new_artname') is-invalid @enderror" required>
                        @error('new_artname')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
   {{-- Intento new Artist Name --}}--



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
                        <input type="password" name="password"
                            class="form-control @error('password') is-invalid @enderror" required>
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