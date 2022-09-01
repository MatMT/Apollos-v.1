<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ListaPlaylistSongs extends Component
{
    public $othersongs;
    public $actuallysong;
    public $playlist;

    public function __construct($othersongs, $actuallysong, $playlist)
    {
        $this->othersongs = $othersongs;
        $this->playlist = $playlist;
        $this->actuallysong = $actuallysong;
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
