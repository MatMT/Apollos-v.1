<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;

    // Campos a recibir
    protected $fillable = [
        'name_album',
        'user_id',
        'image',
        'url',
        'image',
    ];

    // Relación ---
    public function songs()
    {
        // Un Albúm tiene muchas canciones
        return $this->hasMany(Song::class);
    }

    // Relación inversa ---
    public function user()
    {
        return $this->belongsTo(User::class)->select(['id', 'name', 'name_artist']);
    }
}
