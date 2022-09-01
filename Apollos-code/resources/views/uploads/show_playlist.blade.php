{{-- Plantilla de reproductor --}}
@extends('layouts.music_player')

@section('component_player')
    {{-- COMPONENTE DE PLAYLIST --}}
    <x-lista-playlist-songs :othersongs="$OtherSongs" :playlist="$MyPlaylist" />
@endsection
