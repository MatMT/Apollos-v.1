<?php

namespace App\Http\Controllers;

use App\Models\Playlist;
use App\Models\Playlist_song;
use App\Models\Song;
use Illuminate\Http\Request;

class PlaylistController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $i = 0;

        $songs = Song::limit(3)->get();
        return view('Playlist', ['songs' => $songs, 'i' => $i]);
    }

    public function store(Request $request)
    {
        // Verificar si existe, en caso de no, se crea el registro
        $Playlist = Playlist::firstOrCreate(['name_playlist' => ('playlist_' . auth()->user()->name_artist)], [
            'user_id' => auth()->user()->id,
            'name_playlist' => ('playlist_' . auth()->user()->name_artist),
        ]);

        $MyPlaylist = Playlist::where('user_id', auth()->user()->id)->first();

        Playlist_song::create(
            [
                'playlist_id' => $MyPlaylist->id,
                'song_id' => $request->song_id
            ]
        );

        // // Registro - CANCIÓN
        // Song::create([
        //     'sencillo' => true,
        //     'album_id' => $CollecionSencillos->id,
        //     'name_song' => $request->titulo,
        //     'time' => $request->time,
        //     'total' => $request->total,
        //     'genre' => $request->genero,
        //     'url' => $request->song,
        //     'image' => $request->imagen,
        // ]);

        // Redirigir - 2 parametros, ruta y variable usuario
        return back();
    }
}
