<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ListaSongs extends Component
{
    public $othersongs;
    public $actuallysong;
    public $user;

    public function __construct($othersongs, $user, $actuallysong)
    {
        $this->othersongs = $othersongs;
        $this->user = $user;
        $this->actuallysong = $actuallysong;
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
