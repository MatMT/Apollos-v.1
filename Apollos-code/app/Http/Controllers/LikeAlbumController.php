<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;

class LikeAlbumController extends Controller
{
    // Agregar a favoritos
    public function store(Request $request, Album $album)
    {
        $album->likes()->create([
            'user_id' => $request->user()->id
        ]);

        return back();
    }

    // Quitar de favoritos
    public function destroy(Request $request, Album $album)
    {
        // Traemos el usuario del request, quien tiene la relación de likes, para por último filtrar coincidencias
        $request->user()->likesAlbum()->where('album_id', $album->id)->delete();

        return back();
    }
}
