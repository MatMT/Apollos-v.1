<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Owenoj\LaravelGetId3\GetId3; // Librería GETID3

class SongController extends Controller
{
    public function store(Request $request)
    {
        // Canción en memoria
        $cancion = $request->file('file');

        // Id único para el archivo
        $nombreCancion = Str::uuid() . '.' . $cancion->extension();

        // Guardando en storage
        $cancion->storeAs('/public/uploads/canciones', $nombreCancion);

        // Obteniendo duración
        $track = new GetId3(request()->file('file'));
        $time = $track->getPlaytime();

        // Respuesta al Js (dropzone.on)
        return response()->json(['song' => $nombreCancion, 'time' => $time]);
    }
}
