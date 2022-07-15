<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class ImageController extends Controller
{
    public function store(Request $request)
    {
        // Imagen en memoria
        $imagen = $request->file('file');

        // Str::uuid() - Genera un id único para cada archivo
        $nombreImagen = Str::uuid() . '.' . $imagen->extension();

        // Imagen de Intervetion/Image
        $imagenServidor = Image::make($imagen);
        $imagenServidor->fit(1000, 1000);
        $imagenServidor->resize(1000, 1000);


        // Ruta de la imagen - public_path() - apunta hacia la carpeta public
        $imagenPath = public_path('uploads') . '/' . $nombreImagen;

        // Guardadno en otra ruta
        $imagenServidor->save($imagenPath);

        // Guardando en storage
        // $imagen->store('uploads/imagenes');

        // Respuesta obtenida del app.js (dropzone.on)
        return response()->json(['imagen' => $nombreImagen]);
    }
}
