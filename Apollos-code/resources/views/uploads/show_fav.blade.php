{{-- Plantilla de reproductor --}}
@extends('layouts.player_music')

@section('component_player')
    {{-- COMPONENTE DE FAVORITOS LIST --}}
    <x-lista-fav-songs :othersongs="$OtherSongs" :actuallysong="$ActuallySong" :user="$ActuallySong->InfoArtista($ActuallySong)" />
@endsection
