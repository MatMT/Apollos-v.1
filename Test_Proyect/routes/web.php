<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerForm;
use App\Http\Controllers\FirstController;
use App\Http\Controllers\ClienteController;

// use App\Http\Controllers\RegistController;
// use Illuminate\Support\Facades\View;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Rutas propias del sistema web

Route::get('/home', function () {
    return view('welcome');
});

/* 
Definimos 2 rutas para el formulario, pues debe abarcar 2 metodos
"view o get" y "post", ambos importantes para visualizar la página y 
enviar los datos no funciona sin los 2
*/
Route::get('/registro', [ControllerForm::class, 'formulario']);

/*
Tras definir el metodo aplicado a la ruta, definimos el controllador
que vamos a utlizar y luego la función dentro del controlador
*/
Route::post('/registro', [ControllerForm::class, 'store']);

// Definimos una ruta extra, la cual nos redirigirá a la impresión de datos
Route::get('/datos', [ControllerForm::class, 'datos']);

// Inicio 
// Route::get('/inicio', [RegistController::class, 'formulario']);
// Route::post('/inicio', [RegistController::class, 'usuarios']);

// ------------ Probando Tutorial Laravel ------------

Route::get('/inicio', [FirstController::class, 'index']);

// Validación de ruta ----------------- 
// if (View::exists('vista2')) {
//     Route::get('/', function () {
//         return view('vista2');
//     });
// } else {
//     Route::get('/', function () {
//         return 'La vista solicitada no existe';
//     });
// }

// Enviando datos ----------------- 
Route::get('/envio', function () {
    return view('vista1', ['nombre' => 'Mat']);
});


// Probando rutas tutorial -------- 

// Ejemplo 1 - regresando texto
Route::get('/texto', function () {
    return '<h1> esto es un texto de prueba </h1>';
});

// Ejemplo 2 - regresando un array
Route::get('/arreglo', function () {
    $arreglo = [
        'Id' => 1,
        'Descripcion' => 'Producto 1'
    ];
    return $arreglo;
});

// Ejemplo 3 - parámetros
Route::get('/nombre/{nombre?}', function ($nombre = 'Cliente general') {
    return 'el nombre es: ' . $nombre;
});

// Ejemplo 4 - parámetros por default
Route::get('/nombre/{cliente}', function ($cliente) {
    return 'el nombre es: ' . $cliente;
});

// Ejemplo 5 - regresando texto
Route::get('/ruta1', function () {
    return '<h1> esto es la vista de la ruta 1</h1>';
})->name('rutaNro1');

Route::get('/ruta2', function () {
    // return '<h1> esto es la vista de la ruta 2</h1>';
    return redirect()->route('rutaNro1');
});

// Ejemplo 6
Route::get('/usuario/{usuario}', function ($usuario) {
    return 'El usuario es:' . $usuario;
})->where('usuario', '[A-Za-z]+');

// -----------------
// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });


// ------------  Tutorial 2 Prueba de modelo y migracion ------------ 

Route::resource('/modelo', ClienteController::class);

// Ejemplo 7 - Plantillas Blade
Route::get('/', function () {
    $users = ['Juan', 'Pedro', 'Maria', 'Ana'];
    return view('vista1')->with('users', $users);
});
