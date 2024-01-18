<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class RegisterForm extends Component
{
    public $name;
    public $email;
    public $password;
    public $password_confirmation;
    public $successMessage;

    public function render()
    {
        return view('livewire.register-form');
    }

    public function register()
    {
        $validatedData = $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Registration logic
        $user = \App\Models\User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
        ]);

        // Log in the user after registration
        Auth::login($user);

        // Set success message
        $this->successMessage = 'Registration successful!';

        // Redirect or perform any additional logic after registration
        return redirect()->route('home'); // Adjust the route as needed
    }
}
