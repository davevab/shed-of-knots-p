<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Subscriber;

class SubscribeForm extends Component
{
    public $name;
    public $email;

    public function render()
    {
        return view('livewire.subscribe-form');
    }

    public function subscribe()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email|unique:subscribers,email',
        ]);

        Subscriber::create([
            'name' => $this->name,
            'email' => $this->email,
        ]);

        session()->flash('message', 'Thank you for subscribing!');

        // Clear the input fields after submission
        $this->name = '';
        $this->email = '';
    }
}

