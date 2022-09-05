<?php

namespace App\Http\Controllers;

use App\Mail\ReportsongMailable;
use App\Models\Report;
use Illuminate\Support\Facades\Mail;
use App\Models\Song;
use App\Models\User;
use Illuminate\Http\Request;

//  video de donde hacer esto xd https://youtu.be/e0ynchA_sBA
class ReportController extends Controller
{
    public function __construct()
    {
        // Verificar inicio de sesión
        $this->middleware('auth');
    }

    public function store($artist, $song, Report $report)
    {
        // Obtenemos artista por su id
        $artist = User::where('id', $artist)->first();
        // Obtener canción por su id
        $song = Song::where('id', $song)->first();

        // Verificar si existe un reporte, en caso de no, se crea el registro
        Report::firstOrCreate(['song_id' => $song->id], [
            'status' => 'pending',
            'reportingUser_id' => auth()->user()->id,
            'reportedUser_id' => $artist->id,
            'song_id' => $song->id,
            'album_id' => $song->album_id,
        ]);

        // Email del artista
        $artistEmail = $artist->email;
        Mail::to($artistEmail)->send(new ReportsongMailable($artist, $song));

        return redirect()->route('main')->with('message', 'Se ah reportado la canción PEPE');
    }
}
