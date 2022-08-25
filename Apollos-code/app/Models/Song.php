<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Song extends Model
{
    use HasFactory, Searchable;

    /**
     * Get the indexable data array for the model.
     *
     * @return array
     */
    public function toSearchableArray()
    {
        return [
            'name_song' => $this->name_song,
        ];
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    // INPUTS ó Campos a recibir ================

    protected $fillable = [
        'sencillo',
        'album_id',
        'name_song',
        'time',
        'genre',
        'url',
        'image',
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

    // public function user()
    // {
    //     // Una canción pertenece a un usuario
    //     return $this->belongsTo(User::class)->select(['name', 'name_artist']); // Select - unicos campos a recibir
    // }
}
