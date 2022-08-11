<?php

namespace App\Http\Controllers;

use App\Models\Song;
use App\Models\User;
use App\Models\Album;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    // AUTENTIFICACIÓN ==========
    public function __construct()
    {
        // Autentificación exceptuada para los métodos show(canción) e index(perfil)
        $this->middleware('auth')->except(['show', 'index']);
    }

    // PERFIL ==========
    public function index(User $user)
    {
        // Llamamos al modelo y automáticamente su tabla
        $songs = Song::where('user_id', $user->id)->paginate(8); // Paginate elabora una lógica para crear páginas

        // Obtener albúmes
        $album = Album::where('user_id', auth()->user()->id)->get(); // Get trae los resultados de la consulta en colección 

        // Mostramos vista y devolvemos datos con las llaves 
        return view('profile', [
            'user' => $user,
            'songs' => $songs,
            'albums' => $album
        ]);
    }

    // SUBIR CANCIÓN ==========
    public function create()
    {
        return view('uploads.create');
    }

    // REPRODUCTOR ==========
    public function show(User $user, Song $song) // Importamos vairables de la URL
    {
        return view('uploads.show', [
            'user' => $user,
            'song' => $song
        ]);
    }
}
