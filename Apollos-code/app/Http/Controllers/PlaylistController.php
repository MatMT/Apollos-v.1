<?php

namespace App\Http\Controllers;

use App\Models\Playlist;
use App\Models\Playlist_song;
use App\Models\Song;
use App\Models\User;
use App\Traits\TimeTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PlaylistController extends Controller
{
    use TimeTrait;

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(User $user, Playlist $playlist)
    {
        $i = 0;

        // Extraer mi playlist mediante el método del modelo
        $MyPlaylist = $playlist->MyPlaylist(auth()->user());

        // Extraer mis canciones en la playlist mediante el método del modelo
        $MySongs = $playlist->MySongsPlaylist(auth()->user());

        // Si tengo canciones en mi playlist
        if ($MySongs) {
            $InitialSong = $playlist->MySongsPlaylist(auth()->user())->first();
            $MySongsId = $playlist->MySongsPlaylist(auth()->user())->pluck('id');
            // Canciones aún no presentes en mi playlist
            $songs = Song::whereNotIn('id', $MySongsId)->get();
        } else {
            $InitialSong = null;
            $songs = Song::inrandomOrder()->get();
        }

        // Reenvío a vista con variables a mostrar
        return view('Playlist', [
            'user' => $user,
            'songs' => $songs,
            'MySongs' => $MySongs,
            'MyPlaylist' => $MyPlaylist,
            'Start' => $InitialSong, 'i' => $i
        ]);
    }

    public function store(Request $request, Playlist $playlist)
    {
        // Verificar si existe, en caso de no, se crea el registro
        Playlist::firstOrCreate(['name_playlist' => ('playlist_' . auth()->user()->name_artist)], [
            'user_id' => auth()->user()->id,
            'name_playlist' => ('playlist_' . auth()->user()->name_artist),
        ]);

        // Extraer el registro de mi playlist
        $MyPlaylist = $playlist->MyPlaylist(auth()->user());

        Playlist_song::create(
            [
                'playlist_id' => $MyPlaylist->id,
                'song_id' => $request->song_id
            ]
        );

        // Extraer mis canciones mediante el método del modelo
        $MySongs = $playlist->MySongsPlaylist(auth()->user());

        // Duración total en segundos
        $total = 0;
        foreach ($MySongs as $song) {
            $total += $song->total;
        }

        // Uso de Trait - Similar a una herencia - No repite codigo
        $total = $this->TimeTotal($total);

        Playlist::where('id', $MyPlaylist->id)->update(['duration' => $total]);

        // Regresar
        return back();
    }
}
