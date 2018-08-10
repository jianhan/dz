<?php

namespace App\Listeners;

use App\Events\IdeaCreated;
use Illuminate\Contracts\Queue\ShouldQueue;

class IdeaCreatedNotification implements ShouldQueue
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
     * @param  IdeaCreated $event
     * @return void
     */
    public function handle(IdeaCreated $event)
    {

    }
}
