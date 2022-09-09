{{-- Plantilla de reproductor --}}
@extends('layouts.player_music')

@section('component_player')
    {{-- COMPONENTE DE ÁLBUM LIST --}}
    <x-lista-songs :othersongs="$OtherSongs" :user="$user" :actuallysong="$ActuallySong" />

@endsection
