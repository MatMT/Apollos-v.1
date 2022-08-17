<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\User;
use App\Models\Song;
use Illuminate\Http\Request;

class DataSongController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create(User $user)
    {
        return view('uploads.create', [
            'user' => $user,
        ]);
    }

    // Trabaja en conjunto con ImagenContoller y SongController
    public function store(Request $request, Album $album)
    {
        // Verificar si existe o no albums de solos del usuario
        $AlbumSolo = Album::where('name_album', ('solos_' . auth()->user()->name_artist))->first();

        if ($AlbumSolo == null) {
            // Registro 1 - ALBUM - Mediante el Usuario accedemos a su relación en su modelo
            $request->user()->albums()->create([
                'user_id' => auth()->user()->id,
                'name_album' => ('solos_' . auth()->user()->name_artist),
            ]);
        }

        // Validación - campos completos
        $request->validate([
            'titulo' => 'required|max:30',
            'genero' => 'required',
            'imagen' => 'required',
            'song' => 'required'
        ]);

        // Registro 2 - CANCIÓN
        Song::create([
            'album_id' => $AlbumSolo->id, // Usuario autenticado
            'name_song' => $request->titulo,
            'genre' => $request->genero,
            'url' => $request->song,
            'image' => $request->imagen,
        ]);

        // Redirigir - 2 parametros, ruta y variable usuario
        return redirect()->route('posts.index', auth()->user()->name_artist);
    }
}
