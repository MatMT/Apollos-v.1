<?php

namespace App\Http\Livewire;

use App\Models\Song;
use Livewire\Component;

class BuscadorP extends Component
{
    public $termino;
    public $canciones;

    public function BuscarDatosForm()
    {
        // Emito el evento para el padre
        $this->emit('terminoBusqueda', $this->termino, $this->canciones);
    }

    public function render()
    {
        $canciones = Song::all();

        return view('livewire.buscador-p', [
            'songs' => $canciones,
        ]);
    }
}
