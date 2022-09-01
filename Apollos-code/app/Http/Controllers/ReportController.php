<?php

namespace App\Http\Controllers;
use App\Mail\ReportsongMailable;  
use Illuminate\Support\Facades\Mail;  


use Illuminate\Http\Request;
//  video de donde hacer esto xd https://youtu.be/e0ynchA_sBA
class ReportController extends Controller
{
    public function reporter(){
        $correo = new ReportsongMailable;
    
        Mail::to('viictorgarcia01@gmail.com')->send($correo);
        return redirect()->route('main')->with('message','Se ah reportado la canción PEPE'); 
    }
}
