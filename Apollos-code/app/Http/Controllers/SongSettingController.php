<?php

namespace App\Http\Controllers;
use App\Models\Album;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Redirect;

class SongSettingController extends Controller
{
    public function index()
    {
        return view('configure_songs');
    }

    public function changeDataAlbums(Request $request)
    {
        $user = Auth::user();
        
        
        if ($request->new_name_album != "") {
            // Validación
            $this->validate($request, [
                'new_name_album' => 'min:4|max:25',
            ]);
            $name_album      = $request->new_name_album;
            $sqlBDUpdateName = DB::table('albums')
                ->where('user_id', $user->id)
                ->update(['name_album' => $name_album]);
                return redirect()->route('album.settings.index')->with('nameal', 'Nombre de album  fue cambiado correctamente.');
        }
    }
}
