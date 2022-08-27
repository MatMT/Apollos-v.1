@extends('uploads.partials.step_3')

{{-- Paso en la progress bar --}}
@section('step3')
    blur-bg text-white
@endsection

{{-- Variable de la progress bar --}}
@section('song/s')
    <div class="basis-1/5 text-center py-3 bg-white ">Canciones</div>
@endsection

@section('subtitulo')
    Establece el género principal
@endsection

@section('placeholder')
    Titulo del álbum
@endsection
