<?php

namespace App\Http\Livewire;

use App\Models\Testimonial;
use Livewire\Component;

class Testimonials extends Component
{
    public $testimonials;

    public function mount()
    {
        // Fetch testimonials data from your database
        $this->testimonials = Testimonial::all(); // Update with your actual model
    }

    public function render()
    {
        return view('livewire.testimonials');
    }
}
