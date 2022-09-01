@extends('layouts.shape1')

@section('title')
    {{ $song->name_song }}
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
    <main class="w-11/12 mx-auto">

    </main>

    <div class="mt-7 container mx-auto md:flex justify-center ">
        <div class="md:max-w-[400px] p-3 max-w-">
            <img class="w-full rounded-xl" src="{{ asset('storage') . '/uploads/imagenes/' . $song->image }}"
                alt="Imagen de la canción {{ $song->name_song }}">
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
            <span class="font-bold block text-center">{{ $user->name }}</span>
            {{-- Librería "Carbon" que formatea fechas --}}
            <p class="text-sm text-center text-gray-500 font-cuerpo"> {{ $song->created_at->diffForHumans() }}</p>
        </div> <!-- Información -->

        <div class="flex flex-col flex-wrap md:flex-nowrap w-full md:w-4/6 gap-1 justify-around items-center ">
            <div class="name-song flex w-full md:w-3/4 mb-4">
                <h2 class="text-white font-bold font-cuerpo text-xl text-left">{{ $song->name_song }}</h2>
                <h3 class="text-white font-light ml-6">
                    @if ($song->sencillo)
                        Sencillo
                    @else
                        Album
                    @endif
                </h3>
            </div>

            <!-- Audio -->
            <div class="w-full md:w-3/4">
                <audio controls class="w-full">
                    <source src="{{ asset('storage') . '/uploads/canciones/' . $song->url }}">
                </audio>
            </div>


            <div class="p-3 w-full md:w-1/4 justify-center items-center gap-3 bg-white">

                {{-- COMPONENTE DE LIVEWIRE --}}
                <livewire:like-song :song="$song" />
            </div> <!-- Favoritos -->
        </div> <!-- Reproductor -->

        <!-- Edición/Eliminación -->

        @auth {{-- Autentificado --}}
            @if ($user->id == auth()->user()->id)
                {{-- Artista dueño de la canción --}}
                <div class="1/6 flex justify-center items-center gap-2">
                    {{-- Editar album --}}
                    {{-- <form action="{{ route('single.settings.index') }}">
                        <input type="submit" value="Editar canción" name="" id=""
                            class="bg-blue-500 hover:bg-blue-600 p-2 rounded text-white font-bold cursor-pointer">
                    </form> --}}
                    @if ($song->sencillo == true)
                        <form action="{{ route('song.destroy', ['user' => $user, 'song' => $song]) }}" method="POST">
                            {{-- METODO SPOOFING - Laravel permite agregar otro tipo de peticiones --}}
                            @method('DELETE')
                            @csrf
                            <input type="submit" value="Eliminar canción" name="" id=""
                                class="bg-red-500 hover:bg-red-600 p-2 rounded text-white font-bold cursor-pointer">
                        </form>
                    @endif
                </div>
            @endif
        @endauth

    </div> <!-- Barra inferior -->
@endsection
