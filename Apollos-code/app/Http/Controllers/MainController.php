<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Like;
use App\Models\Song;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    // Autentificación de registrado
    public function __construct()
    {
        $this->middleware('auth');
    }

    // MAIN ===============================================================
    public function index(User $user)
    {
        // Obtener id del usuario logeado
        $UserLog = Auth()->user();

        // Obtener id de a quienes seguimos ===
        $ids = auth()->user()->followings->pluck('id')->toArray();
        // Objeto convertido a arreglo obtenido por medio del modelo 
        // Pluck = Traer campos seleccionados

        $favoritos = Like::where('user_id', $UserLog->id)->first();

        if ($favoritos) {
            $favoritos = Song::where('id', $favoritos->song_id)->first();
        } else {
            $favoritos = null;
        }

        // Extraer la collección de artistas nuevos ===
        $artistsId = DB::table('users')
            ->where('rol', 'artist',)
            ->inRandomOrder()
            ->pluck('id');

        // Artistas que ya han subido un contenido
        $NewArtistId = Album::whereIn('user_id', $artistsId)->pluck('user_id');
        $NewArtist = User::whereNotIn('id', $NewArtistId)->get();

        // Extraer la collección de artistas ===
        $artists = DB::table('users')
            ->where('rol', 'artist',)
            ->where('id', '<>', $UserLog->id)
            ->whereIn('id', $NewArtistId)
            ->wherenotin('id',  $ids)
            ->inRandomOrder()
            ->limit(15)
            ->get()
            ->toArray();

        // Extraer la collección de mis artistas ===
        $Myartistas = DB::table('users')
            ->whereIn('id', $ids)
            ->where('rol', 'artist')
            ->inRandomOrder()
            ->limit(15)
            ->get();

        // Filtrar álbumes
        $Myalbums = DB::table('albums')
            ->whereIn('user_id', $ids)
            ->where([['sencillo', false], ['confirm', true]])
            ->get();

        return view('main', [
            'name' => $user,
            'Fav' => $favoritos,
            'F_artists' => $Myartistas,
            'F_Albums' => $Myalbums,
            'artists' => $artists,
            'new_artists' => $NewArtist
        ]);
    }

    // BIBLIOTECA ===============================================================
    public function index_2()
    {
        // Obtener id del usuario logeado
        $UserLog = Auth()->user();

        // Obtener id de a quienes seguimos ===
        $ids = auth()->user()->followings->pluck('id')->toArray();
        // Objeto convertido a arreglo obtenido por medio del modelo 
        // Pluck = Traer campos seleccionados

        // Extraer la collección de mis artistas ===
        $Myartistas = DB::table('users')
            ->where('rol', 'artist')
            ->whereIn('id', $ids)
            ->inRandomOrder()
            ->limit(15)
            ->get();

        // Filtrar álbumes
        $MyalbumsId = DB::table('like_albums')
            ->where('user_id', $UserLog->id)
            ->pluck('album_id');
        $Myalbums = DB::table('albums')
            ->whereIn('id', $MyalbumsId)
            ->get();

        // Extraer canciones favoritas
        $MySongsId = DB::table('likes')
            ->where('user_id', $UserLog->id)
            ->pluck('song_id');

        $MySongs = Song::whereIn('id', $MySongsId)->get();

        return view('Library', [
            'userLikes' => $UserLog,
            'songsLikes' => $MySongs,
            'F_artists' => $Myartistas,
            'F_Albums' => $Myalbums,
        ]);
    }
}

// Referencia: https://www.tutsmake.com/how-to-get-random-records-in-laravel/