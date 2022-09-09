<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SocialPanel extends Component
{
    public $user;
    public $countersongs;
    public $albums;

    // Escucha al componente hijo al hacer submit
    protected $listeners = ['seguidoresCount' => 'seguidoresCount'];

    // Función de listener
    public function seguidoresCount()
    {
    }

    public function render()
    {
        return view('livewire.social-panel');
    }
}
