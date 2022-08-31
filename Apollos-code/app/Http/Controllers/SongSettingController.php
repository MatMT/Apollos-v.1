<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Album;
use Illuminate\Support\Str;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Redirect;

class SongSettingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(User $user, Album $album)
    {
        // Si la URL es modificada se redirige a la respectiva del usuario iniciado
        if ($user->id != Auth()->user()->id) {
            return Redirect::back();
        }

        return view('configure_songs', [
            'user' => $user,
            'album' => $album
        ]);
    }

    public function store(Request $request, $album,)
    {
        dd($album);
        $user = Auth::user();
        

        if ($request->new_name_album != "") {
            // // Validación
            // $this->validate($request, [
            //     'new_name_album' => 'min:4|max:25',
            // ]);
            // $name_album      = $request->new_name_album;
            // $sqlBDUpdateName = DB::table('albums')
            //     ->where('id', $idTRON)
            //     ->update(['name_album' => $name_album]);
            
            
            Redirect::back()->with('nameal', $album);
        }
        // Imagen de perfil
        if ($request->image) {
            // GUARDAR ARCHIVO ================

            // Imagen en memoria
            $imagen = $request->file('image');
            // Str::uuid() - Genera un id único para cada archivo
            $nombreImagen = Str::uuid() . '.' . $imagen->extension();
            // Imagen de Intervetion/Image
            $imagenServidor = Image::make($imagen);
            $imagenServidor->fit(1000, 1000);
            // Ruta de la imagen - storage_path() - apunta hacia la carpeta storage
            $imagenStorage = storage_path('app') . '/public/uploads/' . $nombreImagen;
            // Guardando en storage
            $imagenServidor->save($imagenStorage);

            // GUARDAR REGISTRO ==============
            $sqlBDUpdateName = DB::table('users')
                ->where('user_id', $user->id)
                ->update(['image' => $nombreImagen]);

            Redirect::back()->with('pical', 'Portada de álbum  fue cambiado correctamente.');
        }
        if ($request->new_genre != "") {
            // Validación
            $this->validate($request, [
                'new_genre',
            ]);
            $genre     = $request->new_genre;
            $sqlBDUpdateName = DB::table('albums')
                ->where('user_id', $user->id)
                ->update(['genre' => $genre]);
        }

        return Redirect::back();
    }
}
