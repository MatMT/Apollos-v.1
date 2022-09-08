@extends('uploads.partials.step_5')

{{-- Paso en la progress bar --}}
@section('step5')
    blur-bg text-white
@endsection

@section('song/s')
    <div class="basis-1/5 text-center py-3 bg-white">{{__('Songs')}}</div>
@endsection

@section('subtitulo')

    {{-- <br>
    <br>
    <p class="underline inline-block">{{ $album->name_album }}</p>
    <br>
     <p><span class="inline"><img
        src="{{ asset('assets/icons/timerIconWht.png') }}" class="h-6 inline m-2">{{ $total }}</span></p>  --}}
{{-- <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
<table class="w-full text-sm text-left text-gray-500">

    <thead class="blur-bg text-xs text-white uppercase">
        <tr scope="col" class="py-3 px-6">
            {{__('We are almost done')}}
        </tr>
    </thead>

    <tbody>
        <tr class="bg-white border-b  hover:bg-gray-50">
            <td class="py-4 px-6">
                <p class="underline inline-block">{{ $album->name_album }}</p>
                <br>
                <p><span class="inline"><img
                    src="{{ asset('assets/icons/timerIconWht.png') }}" class="h-6 inline m-2">{{ $total }}</span></p> 
            </td>
        </tr>
    </tbody>
</table>
</div> --}}
<div class="overflow-x-auto relative shadow-md sm:rounded-lg mb-5 px-30 rounded-lg overflow-hidden">
    <table class="w-full text-sm text-left text-black">

        <thead class="blur-bg text-white uppercase text-center font-titulo text-lg">
            <tr>
                <th scope="col" class="py-3 px-6">
                    {{__('Album information')}}
                </th>
            </tr>
        </thead>

        <tbody>
            <tr class="bg-white border-b  hover:bg-gray-50 font-cuerpo text-lg">
                <td class="text-center py-3">
                    <p class="inline-block">{{ $album->name_album }}  |<span class="inline"><img
                        src="{{ asset('assets/icons/timerIcon.png') }}" class="h-6 inline m-2">{{ $total }}</span></p>
                </td>
            </tr>
        </tbody>
    </table>
</div> <!-- Tabla -->

@endsection

