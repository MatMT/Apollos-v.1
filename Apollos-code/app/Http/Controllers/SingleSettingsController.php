<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Support\Str;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Redirect;

class SingleSettingsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('configure_singles');
    }

    public function changeDataSingles(Request $request)
    {
        $user = Auth::user();


        if ($request->new_name_sencillo != "") {
            // Validación
            $this->validate($request, [
                'new_name_sencillo' => 'min:4|max:25',
            ]);
            $name_song      = $request->new_name_sencillo;
            $sqlBDUpdateName = DB::table('songs')
                ->where('user_id', $user->id)
                ->update(['name_song' => $name_song]);
            return redirect()->route('album.settings.index')->with('nameal', 'Nombre de el sencillo fue cambiado correctamente.');
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
        }
        if ($request->new_genre != "") {
            // Validación
            $this->validate($request, [
                'new_genre',
            ]);
            $genre     = $request->new_genre;
            $sqlBDUpdateName = DB::table('songs')
                ->where('user_id', $user->id)
                ->update(['genre' => $genre]);
        }
    }
}
