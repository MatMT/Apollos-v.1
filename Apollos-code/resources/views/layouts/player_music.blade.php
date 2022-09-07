@extends('layouts.shape1')

@section('title')
    {{ $ActuallySong->name_song }}
@endsection

@section('header')
    <x-header title="Artista"></x-header>
@endsection

@push('script')
    <script type="text/javascript">
        $(document).ready(function() {
            $('.checkbox').click(function() {
                var url = '@Url.Action("CallProcess", "RenderNodes")';
                var networkname = $(this).data("networkname");
                var processname = $(this).data("processname");
                var filename = $(this).data("filename");
                var start = $(this).is(':checked');
                $.post(url, {
                        NetworkName: networkname,
                        ProcessName: processname,
                        FileName: filename,
                        Start: start
                    },
                    function(data) {
                        $("#CallProcess").html(data);
                    });
                window.location.reload(true);
            })
        });
    </script>
@endpush


@section('content')
    @vite('resources/css/varios.css')
    @vite('resources/js/reproductor.js')

    <main class="mainplayer w-22/25 tablet_3:w-11/12 my-1 mx-auto p-2">
        <div class="contenido-musical w-full">
            <div class="list-player w-full">
                <div class="img-music">
                    <img src="{{ asset('storage') . '/uploads/imagenes/' . $ActuallySong->image }}"
                        alt="Imagen de la canción {{ $ActuallySong->name_song }}" class="">
                </div>

                @yield('component_player')

            </div>        
        </div>
    </main>

    <!-- Agregamos el reproductor  --->
    <x-only_player :othersongs="$OtherSongs" :user="$user" :actuallysong="$ActuallySong"></x-reproductor>
@endsection

@push('script_end')
    @php
        $i = 0;
    @endphp

    <script>
        // Rescatar elemento de audio
        var aud = document.getElementById("myAudio");
        // Rescatar link de la canción siguiente
        @foreach ($OtherSongs as $song)
            @php
                ++$i;
            @endphp
            @if ($song->id > $ActuallySong->id)
                var {{ 'NextS' . $i }} = document.getElementById({{ 'song_' . $i }});
                aud.onended = function() {
                    {{ 'NextS' . $i }}.click();
                };
            @endif
        @endforeach
    </script>
@endpush
