<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SongController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\DataSongController;
use App\Http\Controllers\SettingsController;
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

    Método "name" asigna un alías dínamico.

    RMB - más información aquí: https://laravel.com/docs/9.x/routing#route-model-binding
    Cuando un modelo esta asociado a una ruta, Laravel detecta la ruta, consulta ese modelo y su tabla en la base de datos y trae la información asociada a la variable
|--------------------------------------------------------------------------
*/

// Esta estructura se puede denominar "Closure" sinónimo de una función callback
// Al usar view Laravel automáticamente se dirige a la carpeta resources/views
// Route::get('/inicio', function () {
//     return view('welcome');
// });


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

// Perfil --- Gracias al Route model binding
Route::get('/usuario/{user:name_artist}', [ProfileController::class, 'index'])->name('posts.index');

// Subir ---
Route::get('/uploads/create', [DataSongController::class, 'create'])->name('posts.create'); // Vista
Route::post('/uploads/create/audio', [SongController::class, 'store'])->name('audio.store'); // .mp3 
Route::post('/uploads/create/imagen', [ImageController::class, 'store'])->name('image.store'); // Imagen 
Route::post('/uploads/create/data', [DataSongController::class, 'store'])->name('data.store'); // Info

// Multimedia ---
Route::get('/uploads/{song}', [SongController::class, 'show'])->name('songs.show');

// --- nuevas vistas
Route::view('/biblioteca', 'Library')->name('biblioteca');
Route::view('/Artista', 'Artist')->name('artista');

// --- UserSettings
Route::get('/NewPassword',  [SettingsController::class, 'NewPassword'])->name('NewPassword')->middleware('auth');
Route::post('/change/password',  [SettingsController::class, 'changePassword'])->name('changePassword');
