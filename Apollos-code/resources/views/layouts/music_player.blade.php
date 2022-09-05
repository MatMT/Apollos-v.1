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
    <main class="w-11/12 mx-auto">


        <div class="mt-7 container mx-auto md:flex justify-center ">
            <div class="md:max-w-[400px] p-3 max-w-">
                <img class="w-full rounded-xl" src="{{ asset('storage') . '/uploads/imagenes/' . $ActuallySong->image }}"
                    alt="Imagen de la canción {{ $ActuallySong->name_song }}">
            </div>
            <div class="md:w-1/2 p-2">
                <div class="shadow bg-white p-3 mb- rounded">
                    <p class="text-xl font-bold text-center font-cuerpo">Lista de reproducción</p>
                </div>

                {{-- COMPONENTE DE LISTA --}}
                @yield('component_player')

            </div>
        </div>

        <!-- ================== Barra ========================== -->

        <div class="p-1.5 md:flex justify-center items-center">
            <div class="w-full md:w-1/6">
                <span class="font-bold block text-center">{{ $ActuallySong->InfoArtista($ActuallySong)->username }}</span>
                {{-- Librería "Carbon" que formatea fechas --}}
                <p class="text-sm text-center text-gray-500 font-cuerpo"> {{ $ActuallySong->created_at->diffForHumans() }}
                </p>
            </div> <!-- Información -->

            <div class="flex flex-col flex-wrap md:flex-nowrap w-full md:w-4/6 gap-1 justify-around items-center ">
                <div class="name-song flex w-full md:w-3/4 mb-4">
                    <h2 class="text-white font-bold font-cuerpo text-xl text-left">{{ $ActuallySong->name_song }}</h2>
                    <h3 class="text-white font-light ml-6">
                        @if ($ActuallySong->sencillo)
                            Sencillo
                        @else
                            Album
                        @endif
                    </h3>
                </div>

                <!-- Audio -->
                <div class="w-full md:w-3/4">
                    <audio controls class="w-full" id="myAudio" preload="auto" autoplay="yes"
                        controlsList="nodownload noplaybackrate">
                        <source src="{{ asset('storage') . '/uploads/canciones/' . $ActuallySong->url }}" type="audio/mpeg">
                        Tu navegador no soporta la reproducción de audio.
                    </audio>
                </div>


                <div class="p-3 w-full md:w-1/4 justify-center items-center gap-3 bg-white flex">

                    {{-- COMPONENTE DE LIVEWIRE --}}
                    <livewire:like-song :song="$ActuallySong" />
                    {{-- REPORTAR CANCIÓN --}}
                    {{-- {{ dd($ActuallySong) }} --}}
                    <form
                        action="{{ route('report.mail.store', ['user' => $ActuallySong->InfoArtista($ActuallySong)->username, 'song' => $ActuallySong]) }}"
                        method="POST">
                        @csrf
                        <input type="submit" name="Reportar" value="Reportar" id="">
                    </form>
                </div> <!-- Favoritos -->
            </div> <!-- Reproductor -->

            <!-- Edición/Eliminación -->

            @auth {{-- Autentificado --}}
                @if ($ActuallySong->InfoArtista($ActuallySong)->id == auth()->user()->id)
                    {{-- Artista dueño de la canción --}}
                    <div class="1/6 flex justify-center items-center gap-2">
                        {{-- Editar album --}}
                        <form
                            action="{{ route('song.settings.index', ['user' => $ActuallySong->InfoArtista($ActuallySong)->username, 'song' => $ActuallySong->id]) }}">
                            <input type="submit" value="{{ $ActuallySong->sencillo ? 'Editar sencillo' : 'Editar canción' }}"
                                name="" id=""
                                class="bg-blue-500 hover:bg-blue-600 p-2 rounded text-white font-bold cursor-pointer">
                        </form>
                        @if ($ActuallySong->sencillo)
                            <form
                                action="{{ route('song.destroy', ['user' => $ActuallySong->InfoArtista($ActuallySong), 'song' => $ActuallySong]) }}"
                                method="POST">
                                {{-- METODO SPOOFING - Laravel permite agregar otro tipo de peticiones --}}
                                @method('DELETE')
                                @csrf
                                <input type="submit" value="Eliminar sencillo" name="" id=""
                                    class="bg-red-500 hover:bg-red-600 p-2 rounded text-white font-bold cursor-pointer">
                            </form>
                        @endif
                    </div>
                @endif
            @endauth

        </div> <!-- Barra inferior -->
    </main>

    <!-- Agrgamos el reproductor  --->
    <x-reproductor :actuallysong="$ActuallySong" :user="$ActuallySong->InfoArtista($ActuallySong)"></x-reproductor>
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
