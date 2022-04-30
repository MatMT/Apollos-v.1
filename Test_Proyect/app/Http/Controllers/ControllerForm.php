<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ControllerForm extends Controller
{ 
    // Esta funcióno nos envia la vista, el "html"
    public function formulario() 
    {
    return view('Forms');
    }

    // Esta función se encarga de establecer los parametros que vamos a obtener, mediante "Request"
    public function store(Request $rq) {
        
        $name = $rq->input('NameType');
        $age = $rq->input('AgeType');
        $email = $rq->input('EmailType');
        $career = $rq->input('WorkType');

        // Que luego seran insertados dentro de nuestra tabla en las siguientes columnas establecidas
        DB::insert("INSERT INTO usuarios`(`name`, `user`, `age`, `email`, `password`) VALUES (?,?,?,?,?)",[$name, $age, $country,$telephone,$email,$career]);

        // Redirigiendo por ultimo al usuario a la tabla de registros para verificar
        return redirect('/datos');
    }

    // Esta función se encarga propiamente de la impresión 
    // de los datos obtenidos con el metodo select en "DB"
    public function datos() {
        $regist=DB::select("SELECT * from registros");
        // Se envia en otra variable
        return view('registros',['userregist'=>$regist]);
    }
}

