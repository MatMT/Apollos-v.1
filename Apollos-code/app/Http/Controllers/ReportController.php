<?php

namespace App\Http\Controllers;

use App\Mail\ReportsongMailable;
use Illuminate\Support\Facades\Mail;
use App\Models\Song;
use App\Models\User;
use Illuminate\Http\Request;

//  video de donde hacer esto xd https://youtu.be/e0ynchA_sBA
class ReportController extends Controller
{
    public function reporter($artist, $song)
    {
        // Obtenemos artista por su id
        $artist = User::where('id', $artist)->first();
        // Obtener canción por su id
        $song = Song::where('id', $song)->first();

        // Email del artista
        $artistEmail = $artist->email;

        Mail::to($artistEmail)->send(new ReportsongMailable($artist, $song));

        return redirect()->route('main')->with('message', 'Se ah reportado la canción PEPE');
    }
}
