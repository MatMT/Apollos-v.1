<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//  video de donde hacer esto xd https://youtu.be/e0ynchA_sBA
class ReportController extends Controller
{
    public function reporter(){
        $correo = new ReportsongMailable;
    
        Mail::to('viictorgarcia01@gmail.com')->send($correo);
        return "Mensaje Enviado";
    }
}
