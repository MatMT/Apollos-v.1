<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegistController extends Controller
{
    // -------- Función de enviar formulario --------
    public function formulario()
    {
        return view('inicio');
    }
    public function usuarios(Request $respuesta)
    {
        // Guardar en variables los datos obtenidos en el formulario
        $name = $respuesta->input('name');
        $user1 = $respuesta->input('user');
        $correo = $respuesta->input('correo');
        $passware = $respuesta->input('passware');

        //Acción SQL
        DB::insert("INSERT INTO usuarios (name, user, email, password) VALUES (?,?,?,?)", [$name, $user1, $correo, $passware]);

        return redirect('/inicio');
    }
}
