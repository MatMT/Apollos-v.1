<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ListaFavSongs extends Component
{
    public $othersongs;
    public $actuallysong;
    public $user;



    public function __construct($othersongs, $actuallysong, $user)
    {
        $this->othersongs = $othersongs;
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
        return view('components.lista-fav-songs');
    }
}
