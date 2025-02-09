<?php

namespace App\Http\Livewire;

use App\Mail\CustomerMail;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class EmailSendCustomer extends Component
{
    public $email;
    public $message;
    public function send()
    {
        $this->validate([
            'email' => 'email|required',
            'message' => 'required|string'
        ]);

        Mail::to(env('MAIL_FROM_ADDRESS', 'mohammadyusfi039@gmail.com'))
                ->send(new CustomerMail($this->message, $this->email));

        return session()->flash('success', 'success send mail');
    }
    public function render()
    {
        return view('livewire.email-send-customer');
    }
}
