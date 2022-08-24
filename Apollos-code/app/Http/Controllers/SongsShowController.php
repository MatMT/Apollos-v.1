<?php

namespace App\Http\Controllers;

use App\Models\Song;
use App\Models\User;
use App\Models\Album;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SongsShowController extends Controller
{
    // Canciones ==========
    public function index(User $user)
    {
        // Obtener albúmes
        $album = Album::where('user_id', $user->id)->first(); // Get trae los resultados de la consulta en colección

        // Llamamos al modelo y automáticamente su tabla
        $songs = Song::where('album_id', $album->id)->paginate(8); // Paginate elabora una lógica para crear páginas

        // Mostramos vista y devolvemos datos con las llaves 
        return view('uploads.show', [
            'user' => $user,
            'songs' => $songs,
            'albums' => $album
        ]);
    }

    // REPRODUCTOR ==========
    public function show(User $user, Song $song)
    {
        return view('uploads.show', [
            'user' => $user,
            'song' => $song
        ]);
    }

    // Eliminar ==========
    public function destroy(User $user, Song $song)

    {
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

        return redirect()->route('profile.index', auth()->user()->name_artist);
    }
}
