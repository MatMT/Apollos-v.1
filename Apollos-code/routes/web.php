<?php

use App\Http\Controllers\AlbumDataController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PfController;
use App\Http\Controllers\SongController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\DataSongController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\UploadController;
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
Route::get('/home', [MainController::class, 'index'])->name('main');

// Perfil --- Gracias al Route model binding
Route::get('/usuario/{user:name_artist}', [ProfileController::class, 'index'])->name('posts.index');
// Multimedia ---
Route::get('/usuario/{user:name_artist}/canciones/{song}', [ProfileController::class, 'show'])->name('songs.show');

// Perfil --- Gracias al Route model binding
Route::get('/test/{user:name_artist}', [PfController::class, 'index'])->name('test');
// Multimedia ---
Route::get('/test/{user:name_artist}/canciones/{song}', [PfController::class, 'show'])->name('songs.show');

// Subir ---
Route::get('/uploads/create', [DataSongController::class, 'create'])->name('posts.create'); // Vista
Route::post('/uploads/create/audio', [SongController::class, 'store'])->name('audio.store'); // .mp3 
// Route::post('/uploads/create/imagen', [ImageController::class, 'store'])->name('image.store'); // Imagen 
Route::post('/uploads/create/data', [DataSongController::class, 'store'])->name('data.store'); // Info


// --- Subir 2.0 
Route::get('/uploads/selection', [UploadController::class, 'index'])->name('upload.select'); // Vista - Selección

Route::get('/uploads/selection/album/step_1', [UploadController::class, 'album_1'])->name('upload.album_1'); // Vista - subida de album
Route::post('/uploads/selection/album/create', [UploadController::class, 'store_1'])->name('upload.store_1'); // Validación primer paso

Route::get('/uploads/selection/album/step_2', [UploadController::class, 'album_2'])->name('upload.album_2'); // Vista - estableciendo titulo
Route::post('/uploads/selection/album/step_2', [UploadController::class, 'store_2'])->name('upload.store_2'); // Validación segundo paso

Route::get('/uploads/selection/album/step_3', [UploadController::class, 'album_3'])->name('upload.album_3'); // Vista - estableciendo género
Route::post('/uploads/selection/album/step_3', [UploadController::class, 'store_3'])->name('upload.store_3'); // Validación tecer paso

// 

Route::get('/uploads/selection/album/step_4', [UploadController::class, 'album_4'])->name('upload.album_4'); // Vista - estableciendo género

Route::post('/uploads/selection/album/step_4/data', [AlbumDataController::class, 'store'])->name('album_data.store'); // Lógica de albúm

Route::post('/uploads/selection/album/step_4', [UploadController::class, 'store_4'])->name('upload.store_4'); // Validación cuarto paso

Route::get('/uploads/selection/album/step_5', [UploadController::class, 'album_5'])->name('upload.album_5'); // Vista - estableciendo género
Route::post('/uploads/selection/album/step_5', [UploadController::class, 'store_5'])->name('upload.store_5'); // Validación tecer paso

// -
Route::post('/uploads/selection/album/step_1/img', [ImageController::class, 'store'])->name('image.store'); // Controlador de Imagen



// --- Nuevas vistas
Route::view('/biblioteca', 'Library')->name('biblioteca');
Route::view('/Artista', 'Artist')->name('artista');

// --- UserSettings
Route::get('/NewPassword',  [SettingsController::class, 'NewPassword'])->name('NewPassword')->middleware('auth');
Route::post('/change/password',  [SettingsController::class, 'changePassword'])->name('changePassword');
