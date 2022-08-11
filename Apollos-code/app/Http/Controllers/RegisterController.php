<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\AgeController;

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
            'usuario' => 'required|unique:users,name_artist|min:3|max:30',
        ]);

        // Modificar el Request
        $username = $request->usuario;
        $request->request->add(['usuario' => Str::slug($request->usuario)]);

        // Género --- 
        $gender = $request->gender;

        // 0 hombre - 1 mujer
        $gender == 'male' ? $gender = false : $gender;
        $gender == 'female' ? $gender = true : $gender;

        // Objeto - Calculo de la edad
        $age = new AgeController($request->nacimiento);

        // Validación de edad
        if ($age->age < 13) {
            return "¡Edad mínima insuficiente!";
        } elseif ($age->age > 102) {
            return "¡Edad máxima lógica permitida!";
        }

        // Artista
        $artist = $request->user_type;
        $artist == '' ? $artist = 'user' : $artist;

        // Creación 
        User::create([
            'name' => $request->nombre,
            'last_name' => $request->apellido,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'gender' => $gender,
            'birth_date' => $request->nacimiento,
            'age' => $age->age,
            'rol' => $artist,
            'name_artist' =>  $request->usuario,
            'username' => $username
        ]);

        // Autentificación
        auth()->attempt($request->only('email', 'password'));

        return redirect('home');
    }
}
