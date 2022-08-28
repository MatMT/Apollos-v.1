<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ListaSongs extends Component
{
    public $othersongs;
    public $user;

    public function __construct($othersongs, $user)
    {
        $this->othersongs = $othersongs;
        $this->user = $user;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.lista-songs');
    }
}
