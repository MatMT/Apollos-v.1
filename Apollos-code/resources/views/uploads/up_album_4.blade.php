@extends('uploads.partials.step_4')

{{-- Paso en la progress bar
@section('step3')
    bg-purple-800 text-white
@endsection --}}

{{-- Variable de la progress bar + paso en la progress bar --}}
@section('song/s')
    <div class="basis-1/5 text-center py-3 blur-bg text-white">{{__('Songs')}}</div>
@endsection

@section('subtitulo')
{{__('Upload your songs')}}
@endsection

