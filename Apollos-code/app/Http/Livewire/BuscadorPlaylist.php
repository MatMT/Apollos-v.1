<?php

namespace App\Http\Livewire;

use App\Models\Song;
use Livewire\Component;

class BuscadorPlaylist extends Component
{
    public $termino;
    public $canciones;
    public $mysongs;

    // Escucha al componente hijo al hacer submit
    protected $listeners = ['terminoBusqueda' => 'buscarPlaylist'];

    public function buscarPlaylist($termino, $canciones)
    {
        // Valores a enviar a nuestro render
        $this->termino = $termino;
        // Canciones a buscar
        $this->canciones = $canciones;
    }

    public function render()
    {
        // "when" = Ejecutarse en caso de que el termino de busqueda tenga un valor 
        // "%" = Buscar coincidencia en cualquier parte del string

        $canciones = Song::when($this->termino, function ($query) { // Calllback
            $query->where([['name_song', 'LIKE', "%" . $this->termino . "%"], ['visibility', true]]);
        })->get();

        return view('livewire.buscador-playlist', [
            'songs' => $canciones,
        ]);
    }
}
