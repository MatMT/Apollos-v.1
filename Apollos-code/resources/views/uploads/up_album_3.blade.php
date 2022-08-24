@extends('uploads.partials.step_3')

{{-- Paso en la progress bar --}}
@section('step3')
    bg-purple-800 text-white
@endsection

{{-- Variable de la progress bar --}}
@section('song/s')
    <div class="basis-1/5 text-center p-1 ">Canciones</div>
@endsection

@section('subtitulo')
    Establece el Género principal
@endsection

@section('placeholder')
    Titulo del álbum
@endsection
