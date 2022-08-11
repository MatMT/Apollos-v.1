<?php

namespace App\Http\Controllers;

use App\Models\Song;
use App\Models\User;
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

        // Registro 1
        // Song::create([
        //     'name_song' => $request->titulo,
        //     'genre' => 'anterior',
        //     'user_id' => auth()->user()->id, // Usuario autenticado
        //     'url' => $request->song,
        //     'image' => 'anterior',
        // ]);

        // Registro 2 - Mediante el Usuario accedemos a su relación en su modelo
        $request->user()->songs()->create([
            'name_song' => $request->titulo,
            'genre' => 'anterior',
            'user_id' => auth()->user()->id, // Usuario autenticado
            'url' => $request->song,
            'image' => 'anterior',
        ]);

        // Id del Usuario atenticado
        $userId = auth()->user()->id;

        $songs = Song::where('user_id', $userId)->get(); // Get trae los resultados de la consulta
        // Redirigir - 2 parametros, ruta y variable usuario

        return view('uploads.up_album_4', ['songs' => $songs]);
        // return redirect()->view('posts.index', auth()->user()->name_artist);
    }
}
