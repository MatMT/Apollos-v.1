<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UploadController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Vistas de selección
    public function index()
    {
        // Usuario logeado
        $Usuario = Auth()->user();

        // Autentificación de artista
        if ($Usuario->rol == 'artist') {
            return view('uploads.upload');
        } else {
            return redirect(route('profile.index', $Usuario));
        }
    }
}
