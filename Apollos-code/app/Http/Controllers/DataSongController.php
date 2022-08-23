<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\User;
use App\Models\Song;
use Illuminate\Http\Request;

class DataSongController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create(User $user)
    {
        return view('uploads.create', [
            'user' => $user,
        ]);
    }

    // Trabaja en conjunto con ImagenContoller y SongController
    public function store(Request $request, Album $album)
    {
        // Verificar si existe, en caso de no, se crea el registro
        $CollecionSencillos = Album::firstOrCreate(['name_album' => ('sencillos_' . auth()->user()->name_artist)], [
            'user_id' => auth()->user()->id,
            'name_album' => ('sencillos_' . auth()->user()->name_artist),
            'sencillo' => true,
        ]);

        // Validación - campos completos
        $request->validate([
            'titulo' => 'required|max:30',
            'genero' => 'required',
            'imagen' => 'required',
            'song' => 'required'
        ]);

        // Registro - CANCIÓN
        Song::create([
            'sencillo' => true,
            'album_id' => $CollecionSencillos->id,
            'name_song' => $request->titulo,
            'time' => $request->time,
            'genre' => $request->genero,
            'url' => $request->song,
            'image' => $request->imagen,
        ]);

        // Redirigir - 2 parametros, ruta y variable usuario
        return redirect()->route('profile.index', auth()->user()->name_artist);
    }
}
