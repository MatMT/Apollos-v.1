<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;
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

        return view('settingsPf', [
            'user' => $user
        ]);
    }


    public function store(Request $request)
    {
        $userAuth = Auth::user();

        // Nombre artístico
        if ($request->username != "" && $userAuth->username != $request->username) {
            // Validación
            $this->validate($request, [
                'username' => 'unique:users,username|min:3|max:30',
            ]);

            $username       = $request->username;
            $sqlBDUpdateName = DB::table('users')
                ->where('id', $userAuth->id)
                ->update(['username' => $username]);
            return Redirect::back()->with('cambios');
        }

        // Nombre - Si el campo no esta vació y es diferente al ya registrado
        if ($request->new_name != "" && $userAuth->name != $request->new_name) {
            // Validación
            $this->validate($request, [
                'new_name' => 'min:2|max:20',
            ]);
            $name       = $request->new_name;
            $sqlBDUpdateName = DB::table('users')
                ->where('id', $userAuth->id)
                ->update(['name' => $name]);
            return Redirect::back()->with('cambios');
        }

        // Apellido
        if ($request->new_lastname != "" && $userAuth->last_name != $request->new_lastname) {
            // Validación
            $this->validate($request, [
                'new_lastname' => 'min:4|max:25',
            ]);
            $last_name       = $request->new_lastname;
            $sqlBDUpdateName = DB::table('users')
                ->where('id', $userAuth->id)
                ->update(['last_name' => $last_name]);
            return Redirect::back()->with('cambios');
        }

        // Imagen de perfil
        if ($request->image) {

            // GUARDAR ARCHIVO ================
            // Imagen en memoria
            $imagen = $request->file('image');
            // Str::uuid() - Genera un id único para cada archivo
            $nombreImagen = Str::uuid() . '.' . $imagen->extension();
            // Imagen de Intervetion/Image
            $imagenServidor = Image::make($imagen);
            $imagenServidor->fit(1000, 1000);
            // Ruta de la imagen - storage_path() - apunta hacia la carpeta storage
            $imagenStorage = storage_path('app') . '/public/uploads/pfp/' . $nombreImagen;
            // Guardando en storage
            $imagenServidor->save($imagenStorage);

            // GUARDAR REGISTRO ==============
            $sqlBDUpdateName = DB::table('users')
                ->where('id', $userAuth->id)
                ->update(['image' => $nombreImagen]);
            return Redirect::back()->with('cambios');
        }

        $userPassword = $userAuth->password;

        // Contraseña
        if ($request->password_actual != "") {
            $NewPass = $request->password;
            $confirmPass = $request->confirm_password;
            $name = $request->name;

            // Verificar si la clave actual es igual a la clave del usuario en session
            if (Hash::check($request->password_actual, $userPassword)) {

                //Valido que tanto la 1 como 2 clave sean iguales
                if ($NewPass == $confirmPass) {
                    //Valido que la clave no sea Menor a 6 digitos
                    if (strlen($NewPass) >= 6) {
                        $userAuth->password = Hash::make($NewPass);

                        $sqlBD = DB::table('users')
                            ->where('id', $userAuth->id)
                            ->update(['password' => $userAuth->password], ['name' => $userAuth->name]);

                        return Redirect::back()->with('cambios');
                    } else {
                        Redirect::back()->with('cambios');
                    }
                } else {
                    dd('contraseña no igual o igual a la anterior');
                    Redirect::back()->with('cambios');
                }
            } else {
                // Contraseña actual incorrecta
                Redirect::back()->withErrors(['password_actual' => 'La Clave no Coinciden']);
            }
        }

        return Redirect::back();
    }
}
