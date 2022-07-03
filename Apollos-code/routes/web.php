<?php

use App\Http\Controllers\SessionController;
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


// vini prueba Route::get('/admin', 'Admin/HomeController@index')->('home');
//Route::get([ControllerHome::class, 'admin']);
//fin vini prueba


Route::view('tester', 'tester');

// En el caso específico de no realizar ninguna operación adicional entre la petición y la respuesta podemos utilizar el method "view" que responder a las peticiones de tipo "get" y "head"
// Utilizando el method "name" le podemos asignar un "nombre" para instanciarlo con route() llamando su nombre y no la url propia.
Route::view('inicio', 'welcome');

Route::view('/', 'login')->name('login')->middleware('guest'); // Autentificación de invitado

Route::post('/', [SessionController::class, 'index'])->name('login.index'); // Inicio de sesión
Route::post('logout', [SessionController::class, 'logout']); // Cerrar sesión

// Utilizamos el middleware para asegurar el inicio y no ingresar sin estar autenticados
Route::view('home', 'home')->name('main')->middleware('auth');


// -------

Route::view('registro', 'signup')->name('signup')->middleware('guest'); // Autentificación de invitado

Route::post('registro', [SessionController::class, 'store'])->name('registro.store'); // Registro de usuarios
