<?php

namespace App\View\Components;

use Illuminate\View\Component;

class reproductor extends Component
{
    public $actuallysong;
    public $user;

    public function __construct($actuallysong, $user)
    {
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
        return view('components.reproductor');
    }
}
