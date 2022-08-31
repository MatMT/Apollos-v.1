@extends('uploads.partials.step_5')

{{-- Paso en la progress bar --}}
@section('step5')
    blur-bg text-white
@endsection

@section('song/s')
    <div class="basis-1/5 text-center py-3 bg-white">{{__('Songs')}}</div>
@endsection

@section('subtitulo')
{{__('Almost all is ready')}}
    <br>
    -- {{ $album->name_album }} --
    <br>
    {{ $total }}
@endsection

@section('placeholder')
{{__('Almost all is ready')}}
@endsection
