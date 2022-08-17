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
        // Álbumes
        $albums = DB::table('albums')
            ->where('user_id', $user->id)
            // Se excluye el álbum default de solos
            ->whereNotIn('name_album', [('solos_' . $user->name_artist)])
            ->get(); // Get trae los resultados de la consulta en colección 

        // Todas las canciones (Álbumes + Solos)
        $albumSolo =  DB::table('albums')
            ->where('user_id', $user->id)
            ->get();

        // Definimos un array propio
        $songs = array();

        // Por cada álbum
        foreach ($albumSolo as $album) {
            $songs_array = Song::where('album_id', $album->id)->get();
            //Sumamos cada canción al arreglo
            foreach ($songs_array as $song) {
                array_push($songs, $song);
            }
        }

        $counterSongs = (count($songs));

        // // Llamamos al modelo y automáticamente su tabla
        // $songs = Song::where([['album_id', $album], ['']])->get(); // Paginate elabora una lógica para crear páginas

        // Mostramos vista y devolvemos datos con las llaves 
        return view('profile', [
            'user' => $user,
            'CounterSongs' => $counterSongs,
            'albums' => $albums
            // 'songs' => $songs,
        ]);
    }

    // SUBIR CANCIÓN ==========
    public function create()
    {
        return view('uploads.create');
    }

    // REPRODUCTOR ==========
    public function show(User $user, Song $song) // Importamos vairables de la URL
    {
        $songs = Song::where('album_id',)->get;

        return view('uploads.show', [
            'user' => $user,
            'song' => $song
        ]);
    }
}
