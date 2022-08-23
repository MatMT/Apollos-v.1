<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    // Agregar a favoritos
    public function store(Request $request, Song $song)
    {
        $song->likes()->create([
            'user_id' => $request->user()->id
        ]);

        return back();
    }

    // Quitar de favoritos
    public function destroy(Request $request, Song $song)
    {
        // Traemos el usuario del request, quien tiene la relación de likes, para por último filtrar coincidencias
        $request->user()->likes()->where('song_id', $song->id)->delete();

        return back();
    }
}
