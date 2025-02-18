<?php

namespace App\Http\Livewire;

use App\Jobs\SendEmailContactUs;
use App\Mail\CustomerMail;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class EmailSendCustomer extends Component
{
    public $subject;
    public $email;
    public $message;
    public function send()
    {
        $this->validate([
            'subject' => 'required|string',
            'email' => 'required|string|string',
            'message' => 'required|string'
        ]);

        SendEmailContactUs::dispatch($this->email, $this->message, $this->subject);

        return session()->flash('success', 'proses kirim email');
    }
    public function render()
    {
        return view('livewire.email-send-customer');
    }
}
