<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UpmusicController extends Controller
{
    public function index(){
        return view('uploads.musictest');
    }
}
