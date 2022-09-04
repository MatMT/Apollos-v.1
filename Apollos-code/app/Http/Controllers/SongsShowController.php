<?php

namespace App\Http\Controllers;

use App\Models\Song;
use App\Models\User;
use App\Models\Album;
use App\Models\Like;
use App\Models\Playlist;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class SongsShowController extends Controller
{
    public function __construct()
    {
        // Verificar inicio de sesión
        $this->middleware('auth');
        // Permitir acceso de usuario | No de admin
        $this->middleware('user.log');
    }

    // REPRODUCTOR ==========
    public function show(User $user, Song $song)
    {
        // Llamamos al modelo y automáticamente su tabla
        $songs = Song::where('album_id', $song->album_id)->get();

        return view('uploads.show', [
            'user' => $user,
            'OtherSongs' => $songs,
            'ActuallySong' => $song
        ]);
    }

    // Playlist ==========
    public function fav(User $user, Song $song)

    {
        // Extraer mis canciones
        $MyListOfSongs = Like::where('user_id', auth()->user()->id)->pluck('song_id');
        $MySongs = Song::whereIn('id', $MyListOfSongs)->orderBy('id')->get();

        // dd($MySongs);

        return view('uploads.show_fav', [
            'OtherSongs' => $MySongs,
            'ActuallySong' => $song
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
            'ActuallySong' => $song
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
