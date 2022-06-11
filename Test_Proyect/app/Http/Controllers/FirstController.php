<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{
    // --------- Controlador del tutorial ---------

    public function index(Request $peticion)
    {
        // return view('vista1');
        $arreglo = ['nombre' => $peticion->query('nombre', 'Ana')];
        // "NN" es utiliza como nulo.
        return view('vista1')->with($arreglo);
    }
}
