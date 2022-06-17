<?php

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

// Definición de una ruta tipo gett: Url , función
// Esta estructura se puede denominar "Closure" sinonimo de una función callback
Route::get('/', function () {
    // Al usar view Laravel automaticamente se dirige a la carpeta resources/views
    return view('welcome');
});

// En el caso especifico de no realizar ninguna operación adicional entre la petición y la respuesta podemos utilizar el metodo "view" que responder a las peticiones de tipo "get" y "head"
// Utilizando el metodo "name" le podemos asignar un "nombre" para instanciarlo con route() llamando su nombre y no la url propia.
Route::view('/inicio', 'session')->name('sesion');
