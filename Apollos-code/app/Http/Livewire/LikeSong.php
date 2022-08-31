<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LikeSong extends Component
{
    // Al registrar un atributo este se envía automáticamente a la vista
    public $song;
    public $isLiked;
    public $likes;

    // Función similar a un constructor // cuando se "MONTE"...
    public function mount($song)
    {
        $this->isLiked = $song->checkLike(auth()->user());
        $this->likes = $song->likes->count();
    }

    // Nombre del evento en la vista
    public function like()
    {
        if ($this->song->checkLike(auth()->user())) {
            // Se elimina el like mediante el modelo y su método
            $this->song->likes()->where('song_id', $this->song->id)->delete();
            $this->isLiked = false;
            $this->likes--;
        } else {
            // Se registra el like mediante el modelo
            $this->song->likes()->create([
                'user_id' => auth()->user()->id
            ]);
            // Reescribir el estado de la función
            $this->isLiked = true;
            $this->likes++;
        }
    }

    public function render()
    {
        return view('livewire.like-song');
    }
}
