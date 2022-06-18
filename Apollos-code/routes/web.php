<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes

    Route::get();
    Route::post();
    Route::patch();
    Route::put();
    Route::delete();
    Route::options();

    ---

    // Responder a varios metodos en una misma ruta.
    Route::match(['get', 'post'], '/user/profile', function () {
        ...
    });
|--------------------------------------------------------------------------
*/

// Definición de una ruta tipo get: Url, función
// Esta estructura se puede denominar "Closure" sinónimo de una función callback
Route::get('/inicio', function () {
    // Al usar view Laravel automáticamente se dirige a la carpeta resources/views
    return view('welcome');
});

// En el caso específico de no realizar ninguna operación adicional entre la petición y la respuesta podemos utilizar el method "view" que responder a las peticiones de tipo "get" y "head"
// Utilizando el method "name" le podemos asignar un "nombre" para instanciarlo con route() llamando su nombre y no la url propia.
Route::view('inicio', 'welcome');

Route::view('/', 'session')->name('login')->middleware('guest');

Route::post('/', function () {
    // Utilizamos la función request que nos devuelve el objeto completo y le especificamos cuáles deseamos.
    $credentials = request()->only('email', 'password');

    // Hace el intento de coincidir las credenciales, nos devuelve verdadero o falso.
    if (Auth::attempt($credentials)){
    // Debemos regenerar la sesión del usuario para evitar "Session Fixation", regenerando el token csrf
        request()->session()->regenerate();
        return redirect('home');
    }
    return redirect('/');
});

// Utilizamos el middleware para asegurar el inicio y no ingresar sin estar autenticados
Route::view('home', 'home')->name('main')->middleware('auth');
