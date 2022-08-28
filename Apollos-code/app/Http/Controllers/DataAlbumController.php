<?php

namespace App\Http\Controllers;

use App\Models\Song;
use App\Models\User;
use App\Models\Album;

use Illuminate\Http\Request;

class DataAlbumController extends Controller
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

        $total = $request->total;

        // Registro 1
        Song::create([
            'sencillo' => false,
            'album_id' => $album->id,
            'name_song' => $request->titulo,
            'time' => $request->time,
            'url' => $request->song,
            'genre' => $album->genre,
            'image' => $album->image,
            'total' => $total,
        ]);

        return redirect()->route('upload.album_4');
    }
}
