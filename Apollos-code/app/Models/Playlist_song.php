<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Playlist_song extends Model
{
    use HasFactory;

    protected $fillable = [
        'playlist_id',
        'song_id'
    ];
}
