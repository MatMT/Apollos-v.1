<?php

namespace App\Http\Controllers;

use App\Models\Song;
use App\Models\User;
use App\Models\Album;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    // AUTENTIFICACIÓN ==========
    public function __construct()
    {
        // Autentificación exceptuada para los métodos show(canción) e index(perfil)
        $this->middleware('auth')->except(['show', 'index']);
    }

    // PERFIL ==========
    public function index(User $user)
    {
        // ÁLBUMES ===
        $albums = DB::table('albums')
            ->where([['user_id', $user->id], ['sencillo', false]])
            ->get(); // Get trae los resultados de la consulta en colección 

        // COLECCIÓN DE SENCILLOS ===
        $CollecionSencillos =  DB::table('albums')
            ->where([['user_id', $user->id], ['sencillo', true]])
            ->first();

        // ÁLBUMES + SENCILLOS ===
        $AllAlbums = Album::where('user_id', $user->id)->get(); // Todos los álbumes - (Álbumes + Sencillos)

        // 1° ARRAY PROPIO - Todas lasa canciones ===
        $AllSongs = array();

        // Por cada colección obtenida
        foreach ($AllAlbums as $album) {
            $songs_array = Song::where('album_id', $album->id)->get();
            //Por cada canción de cada álbum
            foreach ($songs_array as $song) {
                array_push($AllSongs, $song);
            }
        }

        if ($CollecionSencillos != null) {
            $IfSencillos = true;
            $sencillos = Song::where([['album_id', $CollecionSencillos->id], ['sencillo', true]])->get();
        } else {
            $IfSencillos = false;
            $sencillos = array();
        }

        // CONTADOR DE CANCIONES TOTALES ===
        $counterSongs = (count($AllSongs));

        // Mostramos vista y devolvemos datos con las llaves 
        return view('profile', [
            // VARIABLES ====
            'user' => $user,
            'albums' => $albums,
            'CounterSongs' => $counterSongs,
            'sencillos' => $sencillos,
            'HaySencillos' => $IfSencillos
        ]);
    }

    // SUBIR CANCIÓN ==========
    public function create()
    {
        return view('uploads.create');
    }
}
