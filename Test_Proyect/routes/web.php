<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerForm;
use App\Http\Controllers\RegistController;


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

Route::get('/', function () {
    return view('welcome');
});

/* 
Definimos 2 rutas para el formulario, pues debe abarcar 2 metodos
"view o get" y "post", ambos importantes para visualizar la página y 
enviar los datos no funciona sin los 2
*/
Route::get('/registro',[ControllerForm::class, 'formulario']);

/*
Tras definir el metodo aplicado a la ruta, definimos el controllador
que vamos a utlizar y luego la función dentro del controlador
*/
Route::post('/registro', [ControllerForm::class, 'store']);

// Definimos una ruta extra, la cual nos redirigirá a la impresión de datos
Route::get('/datos',[ControllerForm::class,'datos']);


// ------------------------------------------

// Inicio 
Route::get('/inicio', [RegistController::class, 'formulario']);

Route::post('/inicio', [RegistController::class, 'usuarios']);