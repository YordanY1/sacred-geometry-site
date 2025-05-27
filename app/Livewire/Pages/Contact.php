<?php

namespace App\Livewire\Pages;

use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Contact extends Component
{
    public $name, $email, $message;

    protected $rules = [
        'name' => 'required|min:2',
        'email' => 'required|email',
        'message' => 'required|min:10',
    ];

    public function send()
    {
        $this->validate();

        Mail::raw($this->message, function ($mail) {
            $mail->to('your@email.com')
                ->subject('Ново съобщение от сайта')
                ->replyTo($this->email, $this->name);
        });

        session()->flash('success', 'Благодарим! Съобщението беше изпратено успешно.');
        $this->reset(['name', 'email', 'message']);
    }

    public function render()
    {
        return view('livewire.pages.contact')->layout('layouts.app');
    }
}
