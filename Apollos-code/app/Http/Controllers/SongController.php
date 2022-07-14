<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;

class SongController extends Controller
{
    public function store(Request $request)
    {
        // $input = $request->file('file');

        // // Respuesta al Js 
        // return response()->json($input);

        // Imagen en memoria
        $imagen = $request->file('file');

        // Str::uuid() - Genera un id único para cada archivo
        $nombreImagen = Str::uuid() . '.' . $imagen->extension();

        // Imagen de Intervetion/Image
        $imagenServidor = Image::make($imagen);
        $imagenServidor->fit(1000, 1000);

        // Ruta de la imagen - public_path() - apunta hacia la carpeta public
        $imagenPath = public_path('uploads') . '/' . $nombreImagen;
        $imagenServidor->save($imagenPath);

        // Respuesta obtenida del app.js (dropzone.on)
        return response()->json(['imagen' => $nombreImagen]);
    }
}
