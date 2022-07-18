<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

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

        // Respuesta al Js (dropzone.on)
        return response()->json(['song' => $nombreCancion]);
    }
}
