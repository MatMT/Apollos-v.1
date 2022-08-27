@extends('uploads.partials.step_2')

{{-- Paso en la progress bar --}}
@section('step2')
    blur-bg text-white
@endsection

{{-- Variable de la progress bar --}}
@section('song/s')
    <div class="basis-1/5 text-center py-3 bg-white ">Canciones</div>
@endsection

@section('subtitulo')
    Establece un título
@endsection

@section('placeholder')
    Titulo del álbum
@endsection
