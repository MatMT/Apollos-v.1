<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;

    // Deshabilitado para las datos de prueba
    public $timestamps = false;

    // Campos a recibir
    protected $fillable = [
        'name_song',
        'genre',
        'user_id',
        'url',
        'image',
    ];

    // Relación inversa
    public function user()
    {
        // Select - unicos campos a recibir
        return $this->belongsTo(User::class)->select(['name', 'name_artist']);
    }
}
