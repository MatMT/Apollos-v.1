<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;
use App\Models\Song;
use App\Models\User;

class AlbumController extends Controller
{
    // Redirección a sección de álbum
    public function album_1()
    {
        // Usuario logeado
        $Usuario = Auth()->user();

        // Autentificación de artista
        if ($Usuario->rol == 'artist') {
            return view('uploads.up_album_1');
        } else {
            return redirect(route('profile.index', $Usuario));
        }
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
            'sencillo' => false
        ]);

        // Pasada la validación se envía a la siguiente página
        return redirect()->route('upload.album_2');
    }

    public function album_2()
    {
        // Usuario logeado
        $Usuario = Auth()->user();

        // Autentificación de artista
        if ($Usuario->rol == 'artist') {
            return view('uploads.up_album_2');
        } else {
            return redirect(route('profile.index', $Usuario));
        }
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
            ->first(); // Obtener el registro individual

        // Añadirel nuevo campo y guardar
        $album->name_album = $request->titulo;
        $album->save();

        // Pasada la validación se envía a la siguiente página
        return redirect()->route('upload.album_3');
    }


    public function album_3()
    {
        // Usuario logeado
        $Usuario = Auth()->user();

        // Autentificación de artista
        if ($Usuario->rol == 'artist') {
            return view('uploads.up_album_3');
        } else {
            return redirect(route('profile.index', $Usuario));
        }
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
            ->first(); // Obtener el registro individual

        // Añadirel nuevo campo y guardar
        $album->genre = $request->genero;
        $album->save();

        // Pasada la validación se envía a la siguiente página
        return redirect()->route('upload.album_4');
    }

    // 4° Paso --- GUARDANDO E IMPRIMIENDO CANCIONES
    public function album_4()
    {
        // Usuario logeado
        $Usuario = Auth()->user();

        // Autentificación de artista
        if ($Usuario->rol == 'artist') {
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
        } else {
            return redirect(route('profile.index', $Usuario));
        }
    }

    public function store_4(Request $request)
    {
        return redirect()->route('upload.album_5');
    }

    // 5° Paso --- CONFIRMACIÓN FINAL
    public function album_5()
    {
        // Usuario logeado
        $Usuario = Auth()->user();

        // Autentificación de artista
        if ($Usuario->rol == 'artist') {
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
        } else {
            return redirect(route('profile.index', $Usuario));
        }
    }

    public function store_5(User $user)
    {
        // Pasada la validación se envía a la siguiente página
        return redirect()->route('profile.index', auth()->user()->name_artist);
    }
}
