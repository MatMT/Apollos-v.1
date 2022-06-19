<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;

class SessionController extends Controller
{
    // "__invoke" Controlador invocable de una sola acción o un solo método.

    public function index()
    {
        // Utilizamos la función request que nos devuelve el objeto completo y le especificamos cuáles deseamos.
        $credentials = request()->only('email', 'password');

        // Hace el intento de coincidir las credenciales, nos devuelve verdadero o falso.
        if (Auth::attempt($credentials)) {
            // Debemos regenerar la sesión del usuario para evitar "Session Fixation", regenerando el token csrf
            request()->session()->regenerate();
            return redirect('home');
        }
        return redirect('/');
    }
}
