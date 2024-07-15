<?php

namespace App\View\Components\Anggota;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class create_anggota extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.anggota.create_anggota');
    }
}
