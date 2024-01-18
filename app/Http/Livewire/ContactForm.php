<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $message;

    public function render()
    {
        return view('livewire.contact-form');
    }

    public function submitForm()
    {
        // Validation (you can customize this based on your requirements)
        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        // Save the data to the database using the Contact model
        Contact::create([
            'name' => $this->name,
            'email' => $this->email,
            'message' => $this->message,
        ]);

        // Clear the form fields after submission
        $this->reset(['name', 'email', 'message']);

        // Optionally, you can add a success message or perform other actions here
        session()->flash('message', 'Your message has been sent successfully!');

    }
}
