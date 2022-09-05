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

    // Métodos ===============================

    public function Infosong($song_id)
    {
        $song = Song::where('id', $song_id)->first();
        return $song;
    }

    public function InfoUser($reportedUser_id)
    {
        $user = User::where('id', $reportedUser_id)->first();
        return $user;
    }
}
