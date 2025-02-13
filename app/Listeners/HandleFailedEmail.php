<?php

namespace App\Listeners;

use Illuminate\Support\Facades\Log;
use Illuminate\Queue\Events\JobFailed;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class HandleFailedEmail
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
    public function handle(JobFailed $event)
    {
        $jobData = $event->job->payload();
        session()->flash('failed_job', 'email gagal terkirim');

        Log::error("Email gagal dikirim. Job ID: {$event->job->getJobId()}");
        Log::error("Data: " . json_encode($jobData));
        Log::error("Terjadi kesalahan: ".$event->exception->getMessage());
    }
}
