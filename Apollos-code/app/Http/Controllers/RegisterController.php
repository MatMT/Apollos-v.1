<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.signup');
    }

    public function store(Request $request)
    {
        // Validación - Se interrumpe el flujo, en caso de no cumplirse se retorna.
        $request->validate([
            'nombre' => 'required|min:2|max:20 ',
            'apellido' => 'required|min:4|max:25 ',
            'email' => 'required|email|unique:users,email|max:50',
            'password' => 'required|min:4',
            'nacimiento' => 'required|date',
            'usuario' => 'required|unique:users,name_artist|min:3|max:30'
        ]);

        // Modificar el Request
        $username = $request->usuario;
        $request->request->add(['usuario' => Str::slug($request->usuario)]);

        // Género --- 
        $gender = $request->gender;

        if ($gender == "male") {
            $gender = false;
        } else {
            $gender = true;
        };

        // Edad actual --- 
        $nacimiento =  $request->nacimiento;
        $nacimientoInt = strtotime($nacimiento); // Conversión a enteros

        $monthN = date("m", $nacimientoInt); // Extraemos mes 
        $dayN = date("d", $nacimientoInt); // Extraemos día
        $yearN = date("Y", $nacimientoInt); // Extraemos año

        // Fechas actuales
        $monthA = now()->month;
        $dayA = now()->day;
        $yearA = now()->year;

        $age = $yearA - $yearN;

        if ($monthA < $monthN) {
            $age--;
        } else if ($monthA == $monthN) {
            if ($dayA < $dayN) {
                $age--;
            }
        }

        // Validación de edad
        if ($age < 13) {
            return "¡Edad mínima insuficiente!";
        } elseif ($age > 102) {
            return "¡Edad máxima lógica permitida!";
        }

        // Artista
        $artist = $request->user_type;
        (empty($artist)) ? $artist = 'user' : $artist = 'artist';

        // Creación 
        User::create([
            'name' => $request->nombre,
            'last_name' => $request->apellido,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'gender' => $gender,
            'birth_date' => $nacimiento,
            'age' => $age,
            'rol' => $artist,
            'name_artist' =>  $request->usuario,
            'username' => $username
        ]);

        // Autentificación
        auth()->attempt($request->only('email', 'password'));

        return redirect('home');
    }
}
