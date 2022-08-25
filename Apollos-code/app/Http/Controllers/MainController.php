<?php

namespace App\Http\Controllers;

use App\Models\Album;
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

    public function index(User $user)
    {
        // Obtener id del usuario logeado
        $UserLog = Auth()->user();

        // Obtener id de a quienes seguimos ===
        $ids = auth()->user()->followings->pluck('id')->toArray();
        // Objeto convertido a arreglo obtenido por medio del modelo 
        // Pluck = Traer campos seleccionados

        // Extraer la collección de artistas ===
        $artists = DB::table('users')
            ->where('rol', 'artist',)
            ->where('id', '<>', $UserLog->id)
            ->where('id', '<>', $ids)
            ->inRandomOrder()
            ->limit(15)
            ->get();

        // Extraer la collección de mis artistas ===
        $Myartistas = DB::table('users')
            ->where('rol', 'artist')
            ->where('id', $ids)
            ->inRandomOrder()
            ->limit(15)
            ->get();

        // Filtrar álbumes
        $Myalbums = DB::table('albums')
            ->whereIn('user_id', $ids)
            ->where('sencillo', false)
            ->get();

        return view('main', [
            'name' => $user,
            'F_artists' => $Myartistas,
            'F_Albums' => $Myalbums,
            'artists' => $artists
        ]);
    }

    public function index_2(User $user)
    {
        // Obtener id del usuario logeado
        $UserLog = Auth()->user();

        // Obtener id de a quienes seguimos ===
        $ids = auth()->user()->followings->pluck('id')->toArray();
        // Objeto convertido a arreglo obtenido por medio del modelo 
        // Pluck = Traer campos seleccionados

        // Extraer la collección de artistas ===
        $artists = DB::table('users')
            ->where('rol', 'artist',)
            ->where('id', '<>', $UserLog->id)
            ->where('id', '<>', $ids)
            ->inRandomOrder()
            ->limit(15)
            ->get();

        // Extraer la collección de mis artistas ===
        $Myartistas = DB::table('users')
            ->where('rol', 'artist')
            ->where('id', $ids)
            ->inRandomOrder()
            ->limit(15)
            ->get();

        // Filtrar álbumes
        $Myalbums = DB::table('albums')
            ->whereIn('user_id', $ids)
            ->where('sencillo', false)
            ->get();

        return view('Library', [
            'name' => $user,
            'F_artists' => $Myartistas,
            'F_Albums' => $Myalbums,
            'artists' => $artists
        ]);
    }
}

// Referencia: https://www.tutsmake.com/how-to-get-random-records-in-laravel/