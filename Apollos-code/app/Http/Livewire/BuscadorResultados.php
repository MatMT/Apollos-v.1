<?php

namespace App\Http\Livewire;

use App\Models\Album;
use App\Models\Song;
use App\Models\User;
use Livewire\Component;

class BuscadorResultados extends Component
{
    public $termino;
    public $usuarios;
    public $canciones;
    public $albums;

    // Escucha al componente hijo al hacer submit
    protected $listeners = ['terminoBusqueda' => 'buscarGeneral'];

    public function buscarGeneral($termino, $usuarios, $canciones, $albums)
    {
        // Valores a enviar a nuestro render
        $this->termino = $termino;

        // Valores a buscar en los modelos(DB)
        $this->usuarios = $usuarios;
        $this->canciones = $canciones;
        $this->albums = $albums;
    }

    public function render()
    {
        // "when" = Ejecutarse en caso de que el termino de busqueda tenga un valor 
        // "%" = Buscar coincidencia en cualquier parte del string

        $canciones = Song::when($this->termino, function ($query) { // Calllback
            $query->where('name_song', 'LIKE', "%" . $this->termino . "%");
        })->get();

        $albums = Album::when($this->termino, function ($query) { // Calllback
            $query->where('name_album', 'LIKE', "%" . $this->termino . "%");
        })->get();

        $usuarios = User::when($this->termino, function ($query) { // Calllback
            $query->where('name_artist', 'LIKE', "%" . $this->termino . "%");
        })->get();

        return view('livewire.buscador-resultados', [
            'songs' => $canciones,
            'users' => $usuarios,
            'albumes' => $albums
        ]);
    }
}
