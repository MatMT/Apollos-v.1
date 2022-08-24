<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class MainController extends Controller
{
    // Autentificación de registrado
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(User $users)
    {
        // Extraemos la collección de artistas
        $users = User::where('rol', 'artist')
            ->inRandomOrder()
            ->limit(15)
            ->get();

        return view('main', [
            'users' => $users,
        ]);
    }
}

// Referencia: https://www.tutsmake.com/how-to-get-random-records-in-laravel/