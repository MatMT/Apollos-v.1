<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Playlist extends Model
{
    use HasFactory;

    // INPUTS ó Campos a recibir ================

    protected $fillable = [
        'user_id',
        'name_playlist',
        'duration',
        'image'
    ];

    // MÉTODO ===============================

    // Mi Playlist - Info
    public static function MyPlaylist($user)
    {
        $MyPlaylist = Playlist::where('user_id', $user->id)->first();

        if ($MyPlaylist) {
            return $MyPlaylist;
        }

        return null;
    }

    // Canciones de mi
    public function MySongsPlaylist($user)
    {
        // Método primario
        $MyPlaylist = $this::MyPlaylist($user);

        if ($MyPlaylist) {
            // Extraer los registros coincidentes de mis playlist con las canciones
            $MyListOfSongs = DB::table('playlist_songs')
                ->where('playlist_id', $MyPlaylist->id)
                ->latest()
                ->get()
                ->pluck('song_id');

            // Extraer mis canciones
            $MySongs = Song::whereIn('id', $MyListOfSongs)->orderBy('id')->get();

            return $MySongs;
        }
        return null;
    }
}
