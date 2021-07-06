<?php

namespace App\View\Components;

use Illuminate\View\Component;

class middle_bar extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
   public $results,$count; 
    public function __construct($results,$count)
    {
                
     $this->results=$results;
     $this->$count=$count;

            }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.middle_bar');
    }
}
