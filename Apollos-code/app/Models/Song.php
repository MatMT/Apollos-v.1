<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;

    // INPUTS ó Campos a recibir ================

    protected $fillable = [
        'sencillo',
        'album_id',
        'name_song',
        'time',
        'genre',
        'url',
        'image',
        'total',
        'new_name_sencillo'
    ];

    // RELACIÓNES ===============================

    // Relación inversa
    public function album()
    {
        // Una canción pertenece a un álbum
        return $this->belongsTo(Album::class);
    }

    // Relación
    public function likes()
    {
        // Una canción tiene muchos likes(favoritos)
        return $this->hasMany(Like::class);
    }

    // Válidación
    public function checkLike(User $user)
    {
        // La asociación con la tabla likes, permite verificar el contenido
        return $this->likes->contains('user_id', $user->id);
    }

    // MÉTODO ===============================
    public function InfoArtista(Song $song)
    {
        $Album = Album::where('id', $song->album_id)->first();
        $Artista = User::where('id', $Album->user_id)->first();
        return $Artista;
    }

    public function infoAlbum(Song $song)
    {
        $Album = Album::where('id', $song->album_id)->first();
        return $Album->name_album;
    }

    public function AlreadyAdded()
    {
        $UserLog = auth()->user()->id;
        $MyPlaylist = Playlist::where('user_id', $UserLog)->exists();

        if ($MyPlaylist) {
            $MyPlaylist = Playlist::where('user_id', $UserLog)->exists('id');
            $IsOnPlaylist = Playlist_song::where([['playlist_id', $MyPlaylist], ['song_id', $this->id]])->exists();
            return $IsOnPlaylist;
        }

        return null;
    }
}
