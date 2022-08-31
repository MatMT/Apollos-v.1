<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;

    // INPUTS ó Campos a recibir ================

    protected $fillable = [
        'user_id',
        'name_album',
        'genre',
        'new_genre',
        'image',
        'sencillo',
        'confirm',
        'new_name_album',
        'duration'
    ];

    // RELACIÓNES ===============================

    // Relación ---
    public function songs()
    {
        // Un Álbum tiene muchas canciones
        return $this->hasMany(Song::class);
    }

    // Relación inversa ---
    public function user()
    {
        return $this->belongsTo(User::class)->select(['id', 'name', 'name_artist']);
    }

    // Relación
    public function likes()
    {
        // Una canción tiene muchos likes(favoritos)
        return $this->hasMany(LikeAlbum::class);
    }

    // Válidación
    public function checkLike(User $user)
    {
        // La asociación con la tabla likes, permite verificar el contenido
        return $this->likes->contains('user_id', $user->id);
    }
}
