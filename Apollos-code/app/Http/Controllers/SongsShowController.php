<?php

namespace App\Http\Controllers;

use App\Models\Song;
use App\Models\User;
use App\Models\Album;
use App\Models\Playlist;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class SongsShowController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // REPRODUCTOR ==========
    public function show(User $user, Song $song)
    {
        // Llamamos al modelo y automáticamente su tabla
        $songs = Song::where('album_id', $song->album_id)->get();

        return view('uploads.show', [
            'user' => $user,
            'OtherSongs' => $songs,
            'song' => $song
        ]);
    }

    // Playlist ==========
    public function playlist(Playlist $playlist, Song $song)
    {
        // Extraer mis canciones en la playlist mediante el método del modelo
        $MySongs = $playlist->MySongsPlaylist(auth()->user());

        return view('uploads.show_playlist', [
            'OtherSongs' => $MySongs,
            'MyPlaylist' => $playlist,
            'song' => $song
        ]);
    }

    // Eliminar ==========
    public function destroy(User $user, Song $song)
    {
        // Validación si es sencillo
        if ($song->sencillo == true) {
            // Eliminar registro
            $song->delete();

            // Eliminar imagen - sencillos
            if ($song->sencillo == true) {
                $imagen_path = storage_path('app/public/uploads/imagenes/' . $song->image);
                if (File::exists($imagen_path)) { // Facades propio de Laravel
                    unlink($imagen_path);
                }
            }

            // Eliminar archivo .mp3
            $cancion_path = storage_path('app/public/uploads/canciones/' . $song->url);
            if (File::exists($cancion_path)) { // Facades propio de Laravel
                unlink($cancion_path);
            }
        }
        return redirect()->route('profile.index', auth()->user()->name_artist);
    }
}
