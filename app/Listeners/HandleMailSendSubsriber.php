<?php

namespace App\Listeners;

use App\Events\EmailSendSubsriber;
use App\Mail\SubscribtionMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class HandleMailSendSubsriber
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(EmailSendSubsriber $event)
    {
        Mail::to($event->email)->send(new SubscribtionMail(
            $event->article,
        ));
    }
}
