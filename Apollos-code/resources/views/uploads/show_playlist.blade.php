{{-- Plantilla de reproductor --}}
@extends('layouts.player_music')

@section('component_player')
    {{-- COMPONENTE DE PLAYLIST --}}
    <x-lista-playlist-songs :othersongs="$OtherSongs" :playlist="$MyPlaylist" :actuallysong="$ActuallySong" :user="$ActuallySong->InfoArtista($ActuallySong)" />
@endsection
