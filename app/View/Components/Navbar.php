<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Navbar extends Component
{
    public $menus;

    public function __construct($menus = [])
    {
        $this->menus = $menus;
    }

    public function render()
    {
        return view('components.navbar');
    }
}
