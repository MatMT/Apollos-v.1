<?php

use App\Http\Controllers\DataAlbumController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SongSettingController;
use App\Http\Controllers\SongController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\DataSongController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\SongsShowController;
use App\Http\Controllers\AlbumsShowController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\FollowerController;
use App\Http\Controllers\LikeController;
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

// Routinh tipo closures
Route::get('/', function () {
    return view('welcome');
});

// ============================== REGISTRO

// Registro de usuarios ---
Route::get('/registro', [RegisterController::class, 'index'])->name('signup')->middleware('guest'); // Autentificación de invitado
Route::post('/registro', [RegisterController::class, 'store'])->name('signup.store'); // Cerrar sesión

// ============================== INICIO SESIÓN

Route::get('/inicio', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/inicio', [LoginController::class, 'store'])->name('login.store');
Route::post('/logout', [LogoutController::class, 'store'])->name('logout'); // Cerrar sesión

// ============================== NAVEGACIÓN

// Home ---
Route::get('/home', [MainController::class, 'index'])->name('main');

// Perfil --- Gracias al Route model binding
Route::get('/usuario/{user:name_artist}', [ProfileController::class, 'index'])->name('profile.index');

// Biblioteca ---
Route::get('/biblioteca', [MainController::class, 'index_2'])->name('biblioteca');

// Artista ---
Route::view('/Artista', 'Artist')->name('artista');

// ============================== PERFIL

// Álbumes --- Imprimir
Route::get('/usuario/{user:name_artist}/album/{album}/', [AlbumsShowController::class, 'index'])->name('album.index');

// Canciones --- Imprimir
Route::get('/usuario/{user:name_artist}/canciones/{song}/', [SongsShowController::class, 'show'])->name('song.show');

// Route::get('/usuario/{user:name_artist}/canciones/{song}/next', [SongsShowController::class, 'index'])->name('song.index');


// ============================== SUBIR CANCIÓN

Route::get('/uploads/selection/song/', [DataSongController::class, 'create'])->name('data.create'); // Vista
Route::post('/uploads/selection/song/data', [DataSongController::class, 'store'])->name('data.store'); // Info

// ============================== SUBIR ÁLBUM

Route::get('/uploads/selection', [UploadController::class, 'index'])->name('upload.select'); // Vista - Selección

Route::post('/uploads/create/imagen', [ImageController::class, 'store'])->name('image.store'); // Controlador - Imagen 
Route::post('/uploads/create/audio', [SongController::class, 'store'])->name('audio.store'); // Controlador - Mp3 

Route::get('/uploads/selection/album/step_1', [AlbumController::class, 'album_1'])->name('upload.album_1'); // Vista - subida de album
Route::post('/uploads/selection/album/create', [AlbumController::class, 'store_1'])->name('upload.store_1'); // Validación primer paso

Route::get('/uploads/selection/album/step_2', [AlbumController::class, 'album_2'])->name('upload.album_2'); // Vista - Estableciendo Titulo
Route::post('/uploads/selection/album/step_2', [AlbumController::class, 'store_2'])->name('upload.store_2'); // Validación segundo paso

Route::get('/uploads/selection/album/step_3', [AlbumController::class, 'album_3'])->name('upload.album_3'); // Vista - Estableciendo Género
Route::post('/uploads/selection/album/step_3', [AlbumController::class, 'store_3'])->name('upload.store_3'); // Validación tecer paso

Route::get('/uploads/selection/album/step_4', [AlbumController::class, 'album_4'])->name('upload.album_4'); // Vista - Subiendo Canciones
Route::post('/uploads/selection/album/step_4/data', [DataAlbumController::class, 'store'])->name('album_data.store'); // Lógica de albúm
Route::post('/uploads/selection/album/step_4', [AlbumController::class, 'store_4'])->name('upload.store_4'); // Validación cuarto paso

Route::get('/uploads/selection/album/step_5', [AlbumController::class, 'album_5'])->name('upload.album_5'); // Vista - Confirmación
Route::post('/uploads/selection/album/step_5', [AlbumController::class, 'store_5'])->name('upload.store_5'); // Validación tecer paso

// ============================== ELIMINAR CANCIÓN - ÁLBUM

Route::delete('/usuario/{user:name_artist}/canciones/{song}', [SongsShowController::class, 'destroy'])->name('song.destroy');
// ---
Route::delete('/usuario/{user:name_artist}/album/{album}', [AlbumsShowController::class, 'destroy'])->name('album.destroy');

// ============================== FOLLOW

Route::post('/usuario/{user:name_artist}/follow/', [FollowerController::class, 'store'])->name('users.follow');
Route::delete('/usuario/{user:name_artist}/unfollow/', [FollowerController::class, 'destroy'])->name('users.unfollow');

// ============================== FAVORITOS

Route::post('/canciones/{song}/likes/', [LikeController::class, 'store'])->name('song.likes.store');
Route::delete('/canciones/{song}/likes/', [LikeController::class, 'destroy'])->name('song.likes.destroy');

// ============================== EDITAR PERFIL

Route::get('/usuario/{user:name_artist}/settings/change/',  [SettingsController::class, 'index'])->name('settings.index');
Route::post('/usuario/{user:name_artist}/settings/change/',  [SettingsController::class, 'store'])->name('settings.store');

// ============================== EDITAR ÁLBUMES

Route::post('/usuario/{user:name_artist}/settings/album/change',  [SongSettingController::class, 'changeDataAlbums'])->name('album.settings');
Route::get('/usuario/{user:name_artist}/settings/album',  [SongSettingController::class, 'index'])->name('album.settings.index');
