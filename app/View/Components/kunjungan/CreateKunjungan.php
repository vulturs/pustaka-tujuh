<?php

namespace App\View\Components\kunjungan;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CreateKunjungan extends Component
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
        return view('components.kunjungan.create-kunjungan');
    }
}
