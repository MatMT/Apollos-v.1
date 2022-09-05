<?php

namespace App\Http\Livewire;

use App\Models\Album;
use App\Models\Song;
use App\Models\User;
use Livewire\Component;

class Buscador extends Component
{
    public $termino;
    public $usuarios;
    public $canciones;
    public $albums;

    public function BuscarDatosForm()
    {
        // Emito el evento para el padre
        $this->emit('terminoBusquedaGeneral', $this->termino, $this->usuarios, $this->canciones, $this->albums);
    }

    public function render()
    {
        $usuarios = User::all();
        $canciones = Song::where('visibility', true)->get();
        $albums = Album::all();

        return view('livewire.buscador', [
            'users' => $usuarios,
            'songs' => $canciones,
            'albums' => $albums
        ]);
    }
}
