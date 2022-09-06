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
        // Verificar inicio de sesión
        $this->middleware('auth');
        // Permitir acceso de usuario | No de admin
        $this->middleware('user.log');
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
            // Registros de canciones con mi playlist
            $RegistsOfMyPlaylist = Playlist_song::where('playlist_id', $MyPlaylist->id)->get();
            $InitialSong = $playlist->MySongsPlaylist(auth()->user())->first();
            $MySongsId = $playlist->MySongsPlaylist(auth()->user())->pluck('id');

            // Actualización de segundos
            $duration = 0;
            $total = 0;
            foreach ($MySongs as $song) {
                $total += $song->total;
                $duration += $song->total;
            }

            // Uso de Trait - Similar a una herencia - No repite codigo
            $duration = $this->TimeTotal($duration);

            Playlist::where('id', $MyPlaylist->id)->update(['duration' => $duration, 'total' => $total]);

            // Canciones aún no presentes en mi playlist
            $songs = Song::whereNotIn('id', $MySongsId)->where('visibility', true)->get();
        } else {
            $RegistsOfMyPlaylist = null;
            $InitialSong = null;
            $songs = Song::inrandomOrder()->where('visibility', true)->get();
        }

        // Reenvío a vista con variables a mostrar
        return view('Playlist', [
            'user' => $user,
            'songs' => $songs,
            'RegistSongs' => $RegistsOfMyPlaylist,
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
        $duration = 0;
        $total = 0;
        foreach ($MySongs as $song) {
            $total += $song->total;
            $duration += $song->total;
        }

        // Uso de Trait - Similar a una herencia - No repite codigo
        $duration = $this->TimeTotal($duration);

        Playlist::where('id', $MyPlaylist->id)->update(['duration' => $duration, 'total' => $total]);

        // Regresar
        return back();
    }

    // Eliminar canción de mi playlist ==========
    public function destroy(Playlist_song $regist, Song $song, Playlist $playlist)
    {
        // Extraer playlist para obtener su duración
        $playlist = Playlist::where('id', $regist->playlist_id)->first();

        // Duración de la canción a restar en el tiempo total de la playlist
        $restando = $song->total;

        $newTotal =  $playlist->total - $restando;

        $duration = $this->TimeTotal($newTotal);

        Playlist::where('id', $playlist->id)->update(['duration' => $duration, 'total' => $newTotal]);

        $regist->delete();
        return back();
    }
}
