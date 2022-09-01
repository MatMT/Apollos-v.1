<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class Follow extends Component
{
    public $user;
    public $followers;
    public $IsFollowing;

    // Función similar a un constructor // cuando se "MONTE"...
    public function mount(User $user)
    {
        $this->IsFollowing = $user->siguiendo($user);
        $this->followers = $user->followers->count();
    }

    public function follow()
    {
        // Emito el evento para que el padre escuche
        $this->emit('seguidoresCount', $this->followers);

        if ($this->IsFollowing) {
            // Se elimina el follow mediante el modelo y se método
            $this->user->followers()->detach(auth()->user()->id);
            $this->IsFollowing = false;
            $this->followers--;
        } else {
            // Se registra el follow mediante el modelo y se método
            $this->user->followers()->attach(auth()->user()->id);
            // Reescribir el estado de la función
            $this->IsFollowing = true;
            $this->followers++;
        }
    }

    public function render()
    {
        return view('livewire.follow');
    }
}
