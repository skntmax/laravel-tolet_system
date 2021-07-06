<?php

namespace App\View\Components;

use Illuminate\View\Component;

class room_cards extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $results; 
    public function __construct($results)
    {
        $this->results=$results;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.room_cards');
    }
}
