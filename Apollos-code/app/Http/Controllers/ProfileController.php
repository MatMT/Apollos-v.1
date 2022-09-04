<?php

namespace App\Http\Controllers;

use App\Models\Song;
use App\Models\User;
use App\Models\Album;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function __construct()
    {
        // Verificar inicio de sesión
        $this->middleware('auth');
        // Permitir acceso de usuario | No de admin
        $this->middleware('user.log');
    }

    // PERFIL ==========
    public function index(User $user)
    {
        // ÁLBUMES ===
        $albums = DB::table('albums')
            ->where([['user_id', $user->id], ['sencillo', false], ['confirm', true]])
            ->get(); // Get trae los resultados de la consulta en colección 

        // COLECCIÓN DE SENCILLOS ===
        $CollecionSencillos =  DB::table('albums')
            ->where([['user_id', $user->id], ['sencillo', true]])
            ->first();

        // ÁLBUMES + SENCILLOS ===
        $MisColecciones = Album::where([['user_id', $user->id], ['confirm', true]])->get()->pluck('id');

        // Todas mis canciones
        $MisCanciones = Song::WhereIn('album_id', $MisColecciones)->get();

        if ($CollecionSencillos != null) {
            $IfSencillos = true;
            $sencillos = Song::where([['album_id', $CollecionSencillos->id], ['sencillo', true]])->latest()->get();
        } else {
            $IfSencillos = false;
            $sencillos = array();
        }

        // CONTADOR DE CANCIONES TOTALES ===
        $counterSongs = (count($MisCanciones));

        // CONTADOR DISPLAYLIST ===
        $displayList = 0;

        // if ($user->rol <> 'artist') {
        //     return view('profile', []);
        // } else {
        // Mostramos vista y devolvemos datos con las llaves 
        return view('profile', [
            // VARIABLES ====
            'user' => $user,
            'albums' => $albums,
            'CounterSongs' => $counterSongs,
            'sencillos' => $sencillos,
            'HaySencillos' => $IfSencillos,
            'displayList' => $displayList
        ]);
        // }
    }

    // SUBIR CANCIÓN ==========
    public function create()
    {
        return view('uploads.create');
    }
}
