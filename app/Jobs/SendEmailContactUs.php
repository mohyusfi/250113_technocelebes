<?php

namespace App\Jobs;

use App\Mail\CustomerMail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Throwable;

class SendEmailContactUs implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public $subject;
    public $email;
    public $message;
    public function __construct($email, $message, $subject)
    {
        $this->subject = $subject;
        $this->email = $email;
        $this->message = $message;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Mail::send(new CustomerMail($this->message, $this->email, $this->subject));
    }

    public function failed(Throwable $exception)
    {
        Log::info("terjadi kesalahan : ". $exception->getMessage());
    }
}
