<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Redirector;

class LogoutController extends Controller
{
    public function store(Request $request, Redirector $redirect)
    {
        Auth::logout();

        // Invalida la sesión y genera una nueva con el csrf
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Redirección
        return $redirect->to(route('login'))->with('status', "You're logged out");
    }
}
