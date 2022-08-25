<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    // Autentificación de registrado
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(User $users)
    {
        // Extraer la collección de artistas ===
        $artists = User::where('rol', 'artist')
            ->inRandomOrder()
            ->limit(15)
            ->get();

        // Obtener id de a quienes seguimos ===
        $ids = auth()->user()->followings->pluck('id')->toArray();
        // Objeto convertido a arreglo obtenido por medio del modelo 
        // Pluck = Traer campos seleccionados

        // Extraer la collección de mis artistas ===
        $Myartistas = DB::table('users')
            ->where('rol', 'artist')
            ->where('id', $ids)
            ->inRandomOrder()
            ->limit(15)
            ->get();

        // Filtrar álbumes
        $Myalbums = Album::whereIn('user_id', $ids)->get();

        return view('main', [
            'F_artists' => $Myartistas,
            'F_Albums' => $Myalbums,
            'artists' => $artists
        ]);
    }
}

// Referencia: https://www.tutsmake.com/how-to-get-random-records-in-laravel/