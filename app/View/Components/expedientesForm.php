<?php

namespace App\View\Components;

use App\Models\Expediente;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class expedientesForm extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public Collection $estatus,
        public Expediente $expediente
    )
    {
        //
        
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.expedientes-form');
    }
}
