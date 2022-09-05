<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // Verificar que usuario inicia sesión
        if (auth()->check()) {
            // Verificar que el rol del usuario sea admin
            if (auth()->user()->rol == 'admin') {
                return $next($request);
            }
        }

        // Redireccionar a su vista de usuario
        return redirect()->to(route('main'));
    }
}
