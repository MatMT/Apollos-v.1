{{-- Plantilla de reproductor --}}
@extends('layouts.music_player')

@section('component_player')
    {{-- COMPONENTE DE FAVORITOS LIST --}}
    <x-lista-fav-songs :othersongs="$OtherSongs" :actuallysong="$ActuallySong" :user="$ActuallySong->InfoArtista($ActuallySong)" />
@endsection
