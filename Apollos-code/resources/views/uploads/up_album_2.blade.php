@extends('uploads.partials.step_2')

{{-- Paso en la progress bar --}}
@section('step2')
    blur-bg text-white
@endsection

{{-- Variable de la progress bar --}}
@section('song/s')
    <div class="basis-1/5 text-center py-3 bg-white ">{{__('Songs')}}</div>
@endsection

@section('subtitulo')
{{__('Set a title to your album')}}
@endsection

@section('placeholder')
{{__('Album title')}}
@endsection
