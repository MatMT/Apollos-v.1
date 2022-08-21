<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class SettingsController extends Controller{
    public function NewPassword()
    {
        return view('configure_user_profile');
    }


    public function changeData(Request $request)
    {

        $user           = Auth::user();
        $userId         = $user->id;
        $userEmail      = $user->email;
        $userPassword   = $user->password;

    
        if($request->new_name !="") {
            $name       = $request->new_name;
            $sqlBDUpdateName = DB::table('users')
                ->where('id', $user->id)
                ->update(['name' => $name]);
                return redirect()->route('NewPassword')->with('name', 'Nombre de usuario  fue cambiado correctamente.');
        }

        //apellido
        if($request->new_lastname !="") {
            $last_name       = $request->new_lastname;
            $sqlBDUpdateName = DB::table('users')
                ->where('id', $user->id)
                ->update(['last_name' => $last_name]);
                return redirect()->route('NewPassword')->with('last_name', 'Apellido fue cambiado correctamente.');
        }

        
        //Artista de Name
        if($request->new_artname !="") {
            $username       = $request->new_artname;
            $sqlBDUpdateName = DB::table('users')   
                ->where('id', $user->id)
                ->update(['username' => $username]);
                return redirect()->route('NewPassword')->with('username', 'Username fue cambiado correctamente.');
        }



        if ($request->password_actual != "") {
            $NuewPass   = $request->password;
            $confirPass = $request->confirm_password;
            $name       = $request->name;

            //Verifico si la clave actual es igual a la clave del usuario en session
            if (Hash::check($request->password_actual, $userPassword)) {

                //Valido que tanto la 1 como 2 clave sean iguales
                if ($NuewPass == $confirPass) {
                    //Valido que la clave no sea Menor a 6 digitos
                    if (strlen($NuewPass) >= 6) {
                        $user->password = Hash::make($request->password);
                        $sqlBD = DB::table('users')
                            ->where('id', $user->id)
                            ->update(['password' => $user->password], ['name' => $user->name]);

                            return redirect()->route('configure_user_profile') -> with('vagina');
                        redirect()->back()->with('updateClave', 'La clave fue cambiada correctamente.');
                    } else {
                         redirect()->back()->with('clavemenor', 'Recuerde la clave debe ser mayor a 6 digitos.');
                    }
                } else {
                     redirect()->back()->with('claveIncorrecta', 'Por favor verifique las claves no coinciden.');
                }
            } else {
                back()->withErrors(['password_actual' => 'La Clave no Coinciden']);
            }
        } 

        $image       = $request->imagen;
            $sqlBDUpdateName = DB::table('users')
            ->where('id', $user->id)
            ->update(['image' => $image]);
    }
        

    


}