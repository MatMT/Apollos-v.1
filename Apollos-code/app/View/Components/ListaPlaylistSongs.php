<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ListaPlaylistSongs extends Component
{
    public $othersongs;
    public $actuallysong;
    public $playlist;
    public $user;


    public function __construct($othersongs, $actuallysong, $playlist, $user)
    {
        $this->othersongs = $othersongs;
        $this->playlist = $playlist;
        $this->actuallysong = $actuallysong;
        $this->user = $user;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.lista-playlist-songs');
    }
}
