<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class FollowerController extends Controller
{
    public function store(User $user)
    {
        // Attach - para relaciones de una misma tabla || Muchos a muchos
        $user->followers()->attach(auth()->user()->id);
        // Al usuario visitado , se le agrega la persona autentificada que lo esta siguiendo
        return back();
    }

    public function destroy(User $user)
    {
        // Detach - contrario a Attach, elimina relación || Muchos a muchos
        $user->followers()->detach(auth()->user()->id);

        return back();
    }
}
