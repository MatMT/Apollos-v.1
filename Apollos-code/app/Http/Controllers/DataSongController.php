<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataSongController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('uploads.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|max:50',
            'genero' => 'required',
            'imagen' => 'required',
            'song' => 'required'
        ]);
    }
}
