<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Album;
use App\Models\Song;

class AlbumsShowController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Extraer canciones del album ==========
    public function index(User $user, Album $album)
    {
        // Llamamos al modelo y automáticamente su tabla
        $songs = Song::where('album_id', $album->id)->get(); // Paginate elabora una lógica para crear páginas

        // Mostramos vista y devolvemos datos con las llaves 
        return view('songs', [
            'user' => $user,
            'songs' => $songs,
            'album' => $album
        ]);
    }
}
