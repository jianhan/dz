<?php

namespace App\Observers;

use App\Models\Idea;

class IdeaObserver
{

    /**
     * Handle the idea "deleted" event.
     *
     * @param  \App\Models\Idea $idea
     * @return void
     */
    public function deleting(Idea $idea)
    {
        $idea->tags()->detach();
        $idea->categories()->detach();
    }
}
