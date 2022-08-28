@extends('uploads.partials.step_5')

{{-- Paso en la progress bar --}}
@section('step5')
    blur-bg text-white
@endsection

@section('song/s')
    <div class="basis-1/5 text-center py-3 bg-white">Canciones</div>
@endsection

@section('subtitulo')
    Casi todo está listo
    <br>
    -- {{ $album->name_album }} --
    <br>
    {{ $total }}
@endsection

@section('placeholder')
    Casi esta todo listo
@endsection
