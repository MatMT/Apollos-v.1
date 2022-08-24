<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Album;

class SongSettingsController extends Controller{
    public function index()
    {
        return view('configure_songs');
    }
    
    public function changeDataAlbums(Request $request)
    {
        $user           = Auth::user();

       // if( $request ->imagen !=""){
          //  $image = $request->imagen;    
            //    $sqlBDUpdateName = DB::table('users')
            //    ->where('id', $user->id)
            //    ->update(['image' => $image]);
            //    return redirect()->route('album.settings.index')->with('imgmessage', 'Profile Pic fue cambiado correctamente.');
          // }

           if($request->new_name_album !="") {
            $name_album       = $request->new_name_album;
            $sqlBDUpdateName = DB::table('albums')
                ->where('user_id', $user->id)
                ->update(['name_album' => $name_album]);

            $sqlBDUpdateName = DB::table('albums')
                ->where('user_id', $user->id)
                ->update(['name_album' => $name_album]);
                return redirect()->route('album.settings.index')->with('nameal', 'Nombre de album  fue cambiado correctamente.');
         }

        
    }

    

}