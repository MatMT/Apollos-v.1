<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SongController;
use App\Http\Controllers\DataSongController;
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
// Método "name" asigna un alías dínamico.

// Definición de una ruta tipo get: Url, función
// Esta estructura se puede denominar "Closure" sinónimo de una función callback
// Route::get('/inicio', function () {
//     // Al usar view Laravel automáticamente se dirige a la carpeta resources/views
//     return view('welcome');
// });

// Route::view('/tester', 'tester');

// Método simple "view" responde como peticiones de tipo "get" y "head"
Route::view('/', 'welcome');

// Registro de usuarios ---
Route::get('/inicio', [LoginController::class, 'index'])->name('login')->middleware('guest'); // Inicio de sesión
Route::post('/inicio', [LoginController::class, 'store'])->name('login.store');

// Registro de usuarios ---
Route::get('/registro', [RegisterController::class, 'index'])->name('signup')->middleware('guest'); // Autentificación de invitado
Route::post('/registro', [RegisterController::class, 'store'])->name('signup.store');;

// Cerrar sesión ---
Route::post('/logout', [LogoutController::class, 'store'])->name('logout'); // Cerrar sesión

// Home ---
Route::view('/home', 'main')->name('main')->middleware('auth'); // Autentificación de registrado

// Perfil ---
Route::get('/{user:name_artist}', [ProfileController::class, 'index'])->name('posts.index');

// Subir ---
Route::get('/uploads/create', [DataSongController::class, 'create'])->name('posts.create');
// 
Route::post('/uploads/create/multimedia', [SongController::class, 'store'])->name('audio.store');
//
Route::post('/uploads/create/data', [DataSongController::class, 'store'])->name('data.store');

// --- nuevas vistas
Route::view('/biblioteca', 'Library')->name('biblioteca');
Route::view('/Artista', 'Artist')->name('artista');
