<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Song;



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
        // Pasada la validación se envía a la siguiente página
        return redirect()->route('upload.album_4');
    }

    public function album_4(User $user, Song $song)
    {
        $songs = Song::where('user_id', 2)->get(); // Get trae los resultados de la consulta - Paginate elabora una lógica para crear páginas

        return view('uploads.up_album_4', [
            'user' => $user,
            'songs' => $songs
        ]);
    }

    // 3° Paso --- ESTABLECIENDO GÉNERO
    public function store_4(Request $request)
    {
        // Validación - campos completos
        $request->validate([
            'titulo' => 'required|max:30',
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

        dd('cumplido');

        // Registro 2 - Mediante el Usuario accedemos a su relación en su modelo
        $request->user()->songs()->create([
            'name_song' => $request->titulo,
            'genre' => 'anterior',
            'user_id' => auth()->user()->id, // Usuario autenticado
            'url' => $request->song,
            'image' => 'anterior',
        ]);

        dd('cumplido');

        // Redirigir - 2 parametros, ruta y variable usuario
        return redirect()->back()->with('message', 'Operation Successful !');
        // Pasada la validación se envía a la siguiente página
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
