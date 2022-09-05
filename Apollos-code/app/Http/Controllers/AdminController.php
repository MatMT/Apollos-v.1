<?php

namespace App\Http\Controllers;

use App\Models\Report;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $reportes = Report::all()->toArray();
        // dd($reportes);
        return view('admin.indexAdmin', ['reports' => $reportes]);
    }

    public function store(Report $report)
    {
        dd($report);
    }
}
