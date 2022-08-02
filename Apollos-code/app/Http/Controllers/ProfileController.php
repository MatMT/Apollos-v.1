<?php

namespace App\Http\Controllers;

use App\Models\Song;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(User $user)
    {
        // Llamamos al modelo y automáticamente su tabla
        $songs = Song::where('user_id', $user->id)->paginate(); // Get trae los resultados de la consulta

        // Mostramos vista y devolvemos datos con las llaves 
        return view('profile', [
            'user' => $user,
            'songs' => $songs
        ]);
    }

    public function create()
    {
        return view('uploads.create');
    }
}
