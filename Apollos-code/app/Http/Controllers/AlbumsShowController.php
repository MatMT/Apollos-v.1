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
        // Mostramos vista y devolvemos datos con las llaves 
        return view('songs', [
            'user' => $user,
            'album' => $album,
            'displayList' => 0
        ]);
    }
}
