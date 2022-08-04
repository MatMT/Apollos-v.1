<?php

namespace App\Http\Controllers;

use App\Models\Song;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function __construct()
    {
        // Autentificación exceptuada para los métodos show(canción) e index(perfil)
        $this->middleware('auth')->except(['show', 'index']);
    }

    public function index(User $user)
    {
        // Llamamos al modelo y automáticamente su tabla
        $songs = Song::where('user_id', $user->id)->paginate(8); // Get trae los resultados de la consulta - Paginate elabora una lógica para crear páginas

        // Mostramos vista y devolvemos datos con las llaves 
        return view('profile', [
            'user' => $user,
            'songs' => $songs
        ]);
    }

    public function create()
    {
        return view('uploads.create');
    }

    // Importamos vairables de la URL
    public function show(User $user, Song $song)
    {
        return view('uploads.show', [
            'user' => $user,
            'song' => $song
        ]);
    }
}
