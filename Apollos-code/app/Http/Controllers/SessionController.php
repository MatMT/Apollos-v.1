<?php

// https://www.youtube.com/watch?v=wmq2hxsh6lQ&t=496s - referencia

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class SessionController extends Controller
{
    public function index(Request $request, Redirector $redirect)
    {
        // Objeto request devuelve los atributos completos y le especificamos cuáles deseamos validar.
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // Recordar la sesión y no cerrar con el navegador 
        $remember = $request->filled('remember');

        // Attempt intenta coincidir las credenciales, devuelve un bool.
        // $remember es la variable encargado de generar una cookie encriptada del id del usuario atenticado, mientras la cookie exista la sesión permanece abierta
        if (Auth::attempt($credentials, $remember)) {
            // Regenerar la sesión del usuario para evitar "Session Fixation", regenerando el token csrf
            $request->session()->regenerate();
            // En caso de no estar autenticado y se intenta acceder a una url protegida que no sea home luego de un login exitoso se le reenvia a la url anterior a iniciar sesión

            $data = $request->session()->all();
            dd($data);

            return $redirect
                ->intended('home')
                ->with('status', "You're logged in");
        }
        // En caso de no funcionar la sesión manda un error
        throw ValidationException::withMessages([
            'email' => __('auth.failed')
        ]);
    }

    public function logout(Request $request, Redirector $redirect)
    {
        Auth::logout();

        // Invalida la sesión y genera una nueva con el csrf
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return $redirect->to(route('login'))->with('status', "You're logged out");
    }

    // ------
    public function store(Request $request)
    {
        // Validaciones - se interrumpe el flujo, en caso de no cumplirse nos retorna la misma vista con los respectivos erroes
        $request->validate([
            'name' => 'required|min:2|max:20 ',
            'lastname' => 'required|min:4|max:25 ',
            'email' => 'required|email|unique:users,email|max:50',
            'password' => 'required|min:4',
            'nacimiento' => 'required|date',
            'artista' => 'nullable',
            'name_artist' => 'nullable|unique:users,name_artist|min:3|max:30'
        ]);

        // Se crea el objeto - siguiendo la clase establecida en el modelo
        $user = new User();

        // Se asignan los valores del Request(formulario) al objeto a registrar en la Db
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

        $user->name_artist = $request->name_artist;

        // Se guarda el registro
        $user->save();

        // Se inicia sesión
        // Auth::login($user);

        return redirect('home');
    }
}
