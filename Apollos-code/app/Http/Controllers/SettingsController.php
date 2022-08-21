<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class SettingsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(User $user)
    {
        // Si la URL es modificada se redirige a la respectiva del usuario iniciado
        if ($user->id != Auth()->user()->id) {
            return Redirect::back();
        }

        return view('configure_user_profile', [
            'user' => $user
        ]);
    }


    public function store(Request $request, User $user)
    {
        $userAuth = Auth::user();
        $userPassword = $userAuth->password;


        // Nombre - Si el campo no esta vació y es diferente al ya registrado
        if ($request->new_name != "" && $userAuth->name != $request->new_name) {
            dd('cambiando');
            $name       = $request->new_name;
            $sqlBDUpdateName = DB::table('users')
                ->where('id', $userAuth->id)
                ->update(['name' => $name]);
            return redirect()->route('settings.index')->with('name', 'Nombre de usuario  fue cambiado correctamente.');
        }

        // Apellido
        if ($request->new_lastname != "" && $userAuth->last_name != $request->new_lastname) {
            $last_name       = $request->new_lastname;
            $sqlBDUpdateName = DB::table('users')
                ->where('id', $userAuth->id)
                ->update(['last_name' => $last_name]);
            return redirect()->route('settings.index')->with('last_name', 'Apellido fue cambiado correctamente.');
        }

        // Nombre artístico
        if ($request->new_artname != "" && $userAuth->username != $request->new_artname) {
            $username       = $request->new_artname;
            $sqlBDUpdateName = DB::table('users')
                ->where('id', $userAuth->id)
                ->update(['username' => $username]);
            return redirect()->route('settings.index')->with('username', 'Username fue cambiado correctamente.');
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
                        $userAuth->password = Hash::make($request->password);
                        $sqlBD = DB::table('users')
                            ->where('id', $userAuth->id)
                            ->update(['password' => $userAuth->password], ['name' => $userAuth->name]);

                        return redirect()->route('configure_user_profile')->with('vagina');
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

        if ($request->imagen != "") {
            $image = $request->imagen;
            $sqlBDUpdateName = DB::table('users')
                ->where('id', $userAuth->id)
                ->update(['image' => $image]);
            return redirect()->route('settings.index')->with('imgmessage', 'Profile Pic fue cambiado correctamente.');
        }
    }
}
