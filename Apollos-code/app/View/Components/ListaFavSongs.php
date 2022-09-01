<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ListaFavSongs extends Component
{
    public $othersongs;
    public $actuallysong;


    public function __construct($othersongs, $actuallysong)
    {
        $this->othersongs = $othersongs;
        $this->actuallysong = $actuallysong;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.lista-fav-songs');
    }
}
