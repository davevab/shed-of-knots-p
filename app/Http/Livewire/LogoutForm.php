<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class LogoutForm extends Component
{
    public function render()
    {
        return view('livewire.logout-form');
    }

    public function logout()
    {
        Auth::logout();

        // Redirect or perform any additional logic after logout
        return redirect()->route('home'); // Adjust the route as needed
    }
}
