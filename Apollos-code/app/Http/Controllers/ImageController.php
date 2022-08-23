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

        // Ruta de la imagen - storage_path() - apunta hacia la carpeta storage
        $imagenStorage = storage_path('app') . '/public/uploads/imagenes/' . $nombreImagen;

        // Guardando en storage
        $imagenServidor->save($imagenStorage);

        // Respuesta obtenida del app.js (dropzone.on)
        return response()->json(['imagen' => $nombreImagen]);
    }
}


// Referencia sobre el guardado en Storage: https://youtu.be/8x9UoYCVGGI?list=PLZ2ovOgdI-kWH2SrGJGXndG2b0TaqSyLB&t=689