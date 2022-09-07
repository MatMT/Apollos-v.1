<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Album;
use Illuminate\Support\Str;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Redirect;

class AlbumSettingsController extends Controller
{
    public function __construct()
    {
        // Verificar inicio de sesión
        $this->middleware('auth');
        // Permitir acceso de usuario | No de admin
        $this->middleware('user.log');
    }

    public function index(User $user, Album $album)
    {
        // Buscar el albúm por el id recibido
        $Album = Album::where('id', $album->id)->pluck('id');
        $MyAlbumId = Album::where('user_id', auth()->user()->id)->where('id', $Album)->pluck('id');

        // Validación - Redirigir álbum que no es mío
        if ($MyAlbumId != $Album) {
            return redirect(route('main'));
        }

        return view('settings.albumSettings', [
            'user' => $user,
            'album' => $album
        ]);
    }

    public function store(Request $request, User $user, Album $album)
    {
        $Cambios = false;

        if ($request->new_name_album != "" && $request->new_name_album != $album->name_album) {
            // Validación
            $this->validate($request, [
                'new_name_album' => 'min:4|max:25',
            ]);
            $new_name_album      = $request->new_name_album;
            $sqlBDUpdateName = DB::table('albums')
                ->where('id', $album->id)
                ->update(['name_album' => $new_name_album]);

            $Cambios = true;
            Redirect::back()->with('cambios', 'Cambio de nombre');
        }

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
            $imagenStorage = storage_path('app') . '/public/uploads/imagenes/' . $nombreImagen;

            // Guardando en storage
            $imagenServidor->save($imagenStorage);

            // GUARDAR REGISTRO ==============
            $sqlBDUpdateName = DB::table('albums')
                ->where('id', $album->id)
                ->update(['image' => $nombreImagen]);

            $sqlBDUpdateName = DB::table('songs')
                ->where('album_id', $album->id)
                ->update(['image' => $nombreImagen]);

            $Cambios = true;
            Redirect::back()->with('cambios', 'Cambio de portada');
        }

        if ($request->genero != '' && $request->genero != $album->genre) {

            $sqlBDUpdateName = DB::table('albums')
                ->where('id', $album->id)
                ->update(['genre' => $request->genero]);

            $sqlBDUpdateName = DB::table('songs')
                ->where('album_id', $album->id)
                ->update(['genre' => $request->genero]);

            $Cambios = true;
            Redirect::back()->with('cambios', 'Cambio de género');
        }

        if ($Cambios) {
            Redirect::back()->with('cambios', 'Campos actualizados');
        }

        return Redirect::back();
    }
}
