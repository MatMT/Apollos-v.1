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

    // Redirección a sección de álbum
    public function album_1()
    {
        return view('uploads.up_album_1');
    }

    // 1° Paso --- SUBIDA DE IMAGÉN
    public function store_1(Request $request)
    {
        // Validación - campos completos
        $request->validate([
            'imagen' => 'required'
        ]);

        // Registro 2 - Mediante el Usuario accedemos a su relación en su modelo con los albumes
        $request->user()->albums()->create([
            'user_id' => auth()->user()->id,
            'image' => $request->imagen,
        ]);

        // Pasada la validación se envía a la siguiente página
        return redirect()->route('upload.album_2');
    }

    public function album_2()
    {
        return view('uploads.up_album_2');
    }

    // 2° Paso --- ESTABLECIENDO TITULO
    public function store_2(Request $request)
    {
        // Validación - campos completos
        $request->validate([
            'titulo' => 'required|max:30'
        ]);

        // Obtener el último albúm del usuario
        $album = Album::where('user_id', auth()->user()->id)
            ->latest()
            // Obtenes el registro individual
            ->first();

        // Añadirel nuevo campo y guardar
        $album->name_album = $request->titulo;
        $album->save();

        // Pasada la validación se envía a la siguiente página
        return redirect()->route('upload.album_3');
    }


    public function album_3()
    {
        return view('uploads.up_album_3');
    }

    // 3° Paso --- ESTABLECIENDO GÉNERO
    public function store_3(Request $request)
    {
        // Validación - campos completos
        $request->validate([
            'genero' => 'required',
        ]);

        // Obtener el último albúm del usuario
        $album = Album::where('user_id', auth()->user()->id)
            ->latest()
            // Obtenes el registro individual
            ->first();

        // Añadirel nuevo campo y guardar
        $album->genre = $request->genero;
        $album->save();

        // Pasada la validación se envía a la siguiente página
        return redirect()->route('upload.album_4');
    }

    // 4° Paso --- GUARDANDO E IMPRIMIENDO CANCIONES
    public function album_4()
    {
        // Obtener el último albúm del usuario
        $album = Album::where('user_id', auth()->user()->id)
            ->latest()
            // Obtenes el registro individual
            ->first();

        // Id del Usuario atenticado
        $userId = auth()->user()->id;

        $songs = Song::where('album_id', $album->id)->get(); // Get trae los resultados de la consulta

        // Variable contador
        $i = 0;

        // Vista con 2 variables
        return view('uploads.up_album_4', ['songs' => $songs, "i" => $i]);
    }

    public function store_4(Request $request)
    {
        return redirect()->route('upload.album_5');
    }

    // 5° Paso --- CONFIRMACIÓN FINAL
    public function album_5()
    {
        // Obtener el último albúm del usuario
        $album = Album::where('user_id', auth()->user()->id)
            ->latest()
            // Obtenes el registro individual
            ->first();

        // Id del Usuario atenticado
        $userId = auth()->user()->id;

        $songs = Song::where('album_id', $album->id)->get(); // Get trae los resultados de la consulta

        // Variable contador
        $i = 0;

        // Vista con 2 variables
        return view('uploads.up_album_5', ['songs' => $songs, "i" => $i, 'album' => $album]);
    }

    public function store_5(User $user)
    {
        // Validación - aceptar terminos y condiciones
        // $request->validate([
        //     'check' => 'required',
        // ]);


        // Pasada la validación se envía a la siguiente página
        return redirect()->route('posts.index', auth()->user()->name_artist);
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
