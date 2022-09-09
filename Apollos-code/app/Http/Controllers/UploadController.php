<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UploadController extends Controller
{
    public function __construct()
    {
        // Verificar inicio de sesión
        $this->middleware('auth');
        // Permitir acceso de usuario | No de admin
        $this->middleware('user.log');
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
