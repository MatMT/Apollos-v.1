<?php

namespace App\Http\Controllers;

use App\Models\Song;
use App\Models\User;
use App\Models\Report;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        // Todos los reportes generados
        $reportes = Report::orderBy('created_at', 'DESC')->get();

        // Reportes resueltos
        $resueltos = Report::where('status', 'resolved')->get();

        // Canciones denegadas
        $denegadas = Song::where('visibility', false)->get();

        // Canciones aceptadas
        $aceptadas = $resueltos->pluck('song_id');
        $aceptadas = Song::whereIn('id', $aceptadas)->where('visibility', true)->get();

        // dd($reportes);
        return view('admin.indexAdmin', [
            'reports' => $reportes,
            'resolved' => $resueltos,
            'denied' => $denegadas,
            'acepted' => $aceptadas
        ]);
    }

    // Acceptar canción
    public function store_1(Report $report, $song)
    {
        Song::where('id', $song)
            ->update(['visibility' => true]);

        Report::where('id', $report->id)
            ->update(['status' => 'resolved']);

        return redirect()->back()->with('update', 'Reporte resuelto');
    }

    // Denegar canción
    public function store_2(Report $report, $song)
    {
        Song::where('id', $song)
            ->update(['visibility' => false]);

        Report::where('id', $report->id)
            ->update(['status' => 'resolved']);

        return redirect()->back()->with('update', 'Reporte resuelto');
    }
}
