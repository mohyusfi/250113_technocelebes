<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CustomerMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $userMessage;
    public $userEmail;

    public function __construct($message, $userEmail)
    {
        $this->userMessage = $message;
        $this->userEmail = $userEmail;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // return $this->from(config('mail.from.address'))
        //     ->replyTo($this->userEmail)
        //     ->subject('User TC Send Message')
        //     ->view('emails.customer')
        //     ->with([
        //         'message' => $this->userMessage
        //     ]);
        return $this->subject('Sample Email')
                        ->view('emails.customer')
                        ->with([
                            'userEmail' => $this->userEmail,
                            'userMessage' => $this->userMessage
                        ]);
    }
}
