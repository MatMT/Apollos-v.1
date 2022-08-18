<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;

    // Campos a recibir
    protected $fillable = [
        'sencillo',
        'album_id',
        'name_song',
        'time',
        'genre',
        'url',
        'image',
    ];

    // Relación inversa
    public function album()
    {
        // Una canción pertenece a un álbum
        return $this->belongsTo(Album::class);
    }

    // public function user()
    // {
    //     // Una canción pertenece a un usuario
    //     return $this->belongsTo(User::class)->select(['name', 'name_artist']); // Select - unicos campos a recibir
    // }
}
