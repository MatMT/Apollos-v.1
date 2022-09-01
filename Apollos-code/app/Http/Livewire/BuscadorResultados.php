<?php

namespace App\Http\Livewire;

use App\Models\Song;
use Livewire\Component;

class BuscadorResultados extends Component
{
    public $termino;
    public $usuarios;
    public $canciones;
    public $albums;

    // Escucha al componente hijo al hacer submit
    protected $listeners = ['terminoBusqueda' => 'buscar'];

    public function buscar($termino, $usuarios, $canciones, $albums)
    {
        // Valores a enviar a nuestro render
        $this->termino = $termino;
        $this->usuarios = $usuarios;
        $this->canciones = $canciones;
        $this->albums = $albums;
    }

    public function render()
    {
        // Ejecutarse en caso de que el termino de busqueda tenga un valor 
        $canciones = Song::when($this->termino, function ($query) { // Calllback
            // "%" = Buscar coincidencia en cualquier parte del string
            $query->where('name_song', 'LIKE', "%" . $this->termino . "%");
        })->get();

        return view('livewire.buscador-resultados', ['songs' => $canciones]);
    }
}
