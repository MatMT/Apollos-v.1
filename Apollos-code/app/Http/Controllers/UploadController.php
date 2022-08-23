<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;
use App\Models\Song;
use App\Models\User;

class UploadController extends Controller
{
    // Vistas de selección
    public function index()
    {
        return view('uploads.upload');
    }

    // Trabaja en conjunto con ImagenContoller y SongController
    public function store(Request $request)
    {
        // Validación - campos completos
        // $request->validate([
        //     'titulo' => 'required|max:30',
        //     'genero' => 'required',
        //     'imagen' => 'required',
        //     'song' => 'required'
        // ]);

        // Registro 1
        // Song::create([
        //     'name_song' => $request->titulo,
        //     'genre' => $request->genero,
        //     'user_id' => auth()->user()->id, // Usuario autenticado
        //     'url' => $request->song,
        //     'image' => $request->imagen,
        // ]);

        // Registro 2 - Mediante el Usuario accedemos a su relación en su modelo
        // $request->user()->songs()->create([
        //     'name_song' => $request->titulo,
        //     'genre' => $request->genero,
        //     'user_id' => auth()->user()->id, // Usuario autenticado
        //     'url' => $request->song,
        //     'image' => $request->imagen,
        // ]);

        // // Redirigir - 2 parametros, ruta y variable usuario
        // return redirect()->route('uploads.store', auth()->user()->name_artist);
    }
}
