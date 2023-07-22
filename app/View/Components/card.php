<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class card extends Component
{
    public $imageName;
    public $imageDetails;
    public $image;
    public $status;


    /**
     * Create a new component instance.
     */
    public function __construct($imageName,$imageDetails,$image,$status)
    {
        $this->imageName = $imageName;
        $this->imageDetails = $imageDetails;
        $this->image = $image;
        $this->status = $status;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card');
    }
}
