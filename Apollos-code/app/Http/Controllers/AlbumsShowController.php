<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Album;
use Illuminate\Support\Facades\File;


class AlbumsShowController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Extraer canciones del album ==========
    public function index(User $user, Album $album)
    {
        // Mostramos vista y devolvemos datos con las llaves 
        return view('songs', [
            'user' => $user,
            'album' => $album,
            'displayList' => 0
        ]);
    }

    // Eliminar ==========
    public function destroy(User $user, Album $album)

    {
        // Eliminar registro
        $album->delete();

        // Eliminar imagen - sencillos
        $imagen_path = storage_path('app/public/uploads/imagenes/' . $album->image);
        if (File::exists($imagen_path)) { // Facades propio de Laravel
            unlink($imagen_path);
        }

        return redirect()->route('profile.index', auth()->user()->name_artist);
    }
}
