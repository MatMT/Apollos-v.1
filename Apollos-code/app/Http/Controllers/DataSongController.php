<?php

namespace App\Http\Controllers;

use App\Models\Song;
use App\Models\User;
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
    public function store(Request $request)
    {
        // Validación - campos completos
        $request->validate([
            'titulo' => 'required|max:30',
            'genero' => 'required',
            'imagen' => 'required',
            'song' => 'required'
        ]);

        // Registro 1
        // Song::create([
        //     'name_song' => $request->titulo,
        //     'genre' => $request->genero,
        //     'user_id' => auth()->user()->id, // Usuario autenticado
        //     'url' => $request->song,
        //     'image' => $request->imagen,
        // ]);

        // Registro 2 - Mediante el Usuario accedemos a su relación en su modelo
        $request->user()->songs()->create([
            'name_song' => $request->titulo,
            'genre' => $request->genero,
            'user_id' => auth()->user()->id, // Usuario autenticado
            'url' => $request->song,
            'image' => $request->imagen,
        ]);

        // Redirigir - 2 parametros, ruta y variable usuario
        return redirect()->route('posts.index', auth()->user()->name_artist);
    }
}
