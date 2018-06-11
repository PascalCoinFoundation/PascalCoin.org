<?php

namespace App\Listeners;

use App\Cron;
use Illuminate\Console\Events\CommandFinished;

class CronEventListener
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
     * @param  Event  $event
     * @return void
     */
    public function handle(CommandFinished $event)
    {
        if(substr($event->command, 0, 6) === 'pascal') {
            (new Cron(['title' => $event->command]))->save();
        }
    }
}
