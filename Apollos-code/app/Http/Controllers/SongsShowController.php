<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Song;
use App\Models\Album;

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
        return view('songs', [
            'user' => $user,
            'songs' => $songs,
            'albums' => $album
        ]);
    }
}
