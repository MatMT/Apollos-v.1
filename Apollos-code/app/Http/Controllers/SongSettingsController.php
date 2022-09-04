<?php

namespace App\Http\Controllers;

use App\Models\Song;
use App\Models\User;
use App\Models\Album;
use Illuminate\Support\Str;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Redirect;

class SongSettingsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(User $user, Song $song)
    {
        // Buscar el albúm por el id de la canción recibida
        $Album = Album::where('id', $song->album_id)->pluck('id');
        $MyAlbumId = Album::where('user_id', auth()->user()->id)->where('id', $Album)->pluck('id');

        // Validación - Redirigir canción que no es mío
        if($MyAlbumId != $Album) {
            return redirect(route('main'));
        }

        return view('songSettings', [
            'user' => $user,
            'song' => $song
        ]);
        
    }

    public function store(Request $request, User $user, Song $song)
    {
        $Cambios = false;

        if ($request->new_name_song != "" && $request->new_name_song != $song->name_song) {
            // Validación
            $this->validate($request, [
                'new_name_song' => 'min:4|max:25',
            ]);
            $new_name_song      = $request->new_name_song;
            $sqlBDUpdateName = DB::table('songs')
                ->where('id', $song->id)
                ->update(['name_song' => $new_name_song]);

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
            $sqlBDUpdateName = DB::table('songs')
                ->where('id', $song->id)
                ->update(['image' => $nombreImagen]);

            $Cambios = true;
            Redirect::back()->with('cambios', 'Cambio de portada');
        }

        if ($request->genero != '' && $request->genero != $song->genre){
            $sqlBDUpdateName = DB::table('songs')
                ->where('id', $song->id)
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
