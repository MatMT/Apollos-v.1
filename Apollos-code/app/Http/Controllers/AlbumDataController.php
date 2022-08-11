<?php

namespace App\Http\Controllers;

use App\Models\Song;
use App\Models\User;
use App\Models\Album;

use Illuminate\Http\Request;

class AlbumDataController extends Controller
{
    // Trabaja en conjunto con ImagenContoller y SongController
    public function store(Request $request, User $user)
    {
        // Validación - campos completos
        $request->validate([
            'titulo' => 'required|max:30',
            'song' => 'required'
        ]);

        // Obtener el último albúm del usuario
        $album = Album::where('user_id', auth()->user()->id)
            ->latest()
            // Obtenes el registro individual
            ->first();

        // Registro 1
        Song::create([
            'name_song' => $request->titulo,
            'album_id' => $album->id, // Usuario autenticado
            'url' => $request->song,
            'genre' => $album->genre,
            'image' => $album->image,
        ]);

        return redirect()->route('upload.album_4');
    }
}
