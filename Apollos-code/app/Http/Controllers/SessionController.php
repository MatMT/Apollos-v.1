<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;



use Illuminate\Http\Request;

class SessionController extends Controller
{
    // "__invoke" Controlador invocable de una sola acción o un solo método.

    public function index()
    {
        // Utilizamos la función request que nos devuelve el objeto completo y le especificamos cuáles deseamos.
        $credentials = request()->only('email', 'password');

        // Hace el intento de coincidir las credenciales, nos devuelve verdadero o falso.
        if (Auth::attempt($credentials)) {
            // Debemos regenerar la sesión del usuario para evitar "Session Fixation", regenerando el token csrf
            request()->session()->regenerate();
            return redirect('home');
        }
        // En caso de no funcionar la sesión me redirige al login
        return redirect('/');
    }

    // Recibimos los datos por medio del objeto "Request", cualquier cosa enviada por el formulario sera almacenada por este objeto
    public function store(Request $request)
    {
        // Se crea el objeto en base a la clase establecida en el modelo
        $user = new User();

        // Se asignan los valores del Request o formulario al objeto a registrar en la Db
        $user->name = $request->name;
        $user->last_name = $request->lastname;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        // Retornar true en caso de ser female ---
        // Creamos una variable para evaluar el género
        $genero = $request->gender;
        // Validación del género
        if ($genero == "male") {
            $user->gender = false;
        } else {
            $user->gender = true;
        };

        // Calcular edad en base a la fecha actual --- 
        $user->birth_date = $request->nacimiento;

        $nacimiento =  $user->birth_date; // Fecha de nacimiento
        $nacimientoInt = strtotime($nacimiento); // Conversión a enteros

        $monthN = date("m", $nacimientoInt); // Extraemos mes 
        $dayN = date("d", $nacimientoInt); // Extraemos día
        $yearN = date("Y", $nacimientoInt); // Extraemos año

        // Fechas actuales
        $monthT = date("m");
        $dayT = date("d");
        $yearT = date("Y");

        $age = $yearT - $yearN;

        if ($monthT < $monthN) {
            $age--;
        } else if ($monthT == $monthN) {
            if ($dayT < $dayN) {
                $age--;
            }
        }

        $user->age = $age;

        // Retornar true en caso de ser marcado como artista ---
        $artista = $request->artista;

        if ($artista == "Artist") {
            $user->artist = true;
        };

        $user->save();
    }
}
