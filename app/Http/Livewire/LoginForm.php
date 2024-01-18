<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class LoginForm extends Component
{
    public $email;
    public $password;
    public $successMessage;

    public function render()
    {
        return view('livewire.login-form');
    }

    public function login()
    {
        $credentials = $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            // Authentication passed
            $this->successMessage = 'Login successful!';

            // Redirect to the home page or any other desired location
            return redirect()->route('home');
        } else {
            // Authentication failed
            $this->addError('email', 'Invalid credentials. Please try again.');
        }
    }
    public function logout()
    {
        Auth::logout();

        // Redirect to the login page or any other desired location
        return redirect()->route('login');
    }
}
