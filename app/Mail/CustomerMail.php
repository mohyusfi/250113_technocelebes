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
    public $subject;
    public $userMessage;
    public $userEmail;

    public function __construct($message, $userEmail, $subject)
    {
        $this->subject = $subject;
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
        return $this->subject($this->subject)
                        ->from(env('MAIL_FROM_ADDRESS'), env('APP_NAME'))
                        ->to($this->userEmail, 'someone')
                        ->replyTo($this->userEmail)
                        ->view('emails.customer')
                        ->with([
                            'userEmail' => $this->userEmail,
                            'userMessage' => $this->userMessage
                        ]);
    }
}
