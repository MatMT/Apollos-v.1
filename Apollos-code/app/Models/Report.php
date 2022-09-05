<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    // INPUTS ó Campos a recibir ================

    protected $fillable = [
        'status',
        'reportingUser_id',
        'reportedUser_id',
        'reason',
        'song_id',
        'album_id',
    ];

    // RELACIÓNES ===============================

    // Relación ---
    public function song()
    {
        // Un Reporte tiene una canción
        return $this->hasOne(Song::class);
    }
}
