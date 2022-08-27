@extends('uploads.partials.step_5')

{{-- Paso en la progress bar --}}
@section('step5')
    bg-purple-800 text-white
@endsection

@section('song/s')
    <div class="basis-1/5 text-center p-1 ">Canciones</div>
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
