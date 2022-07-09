<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('uploads.create');
    }

    public function store(Request $request)
    {
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
