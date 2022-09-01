@extends('uploads.partials.step_1')

{{-- Paso en la progress bar --}}
@section('step1')
    blur-bg text-white
@endsection

{{-- Variable de la progress bar --}}
@section('song/s')
    <div class="basis-1/5 text-center py-3 bg-white">{{__('Songs')}}</div>
@endsection

@section('subtitulo')
{{__('Place cover')}}
@endsection
