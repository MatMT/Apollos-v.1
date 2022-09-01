{{-- Plantilla de reproductor --}}
@extends('layouts.music_player')

@section('component_player')
    {{-- COMPONENTE DE ÁLBUM LIST --}}
    <x-lista-songs :othersongs="$OtherSongs" :user="$user" :actuallysong="$ActuallySong" />
@endsection
