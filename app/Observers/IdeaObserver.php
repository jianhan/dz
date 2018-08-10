<?php

namespace App\Observers;

use App\Events\IdeaCreated;
use App\Models\Idea;
use App\Transformers\IdeaTransformer;
use Fractal;

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

    /**
     * Handle to the Idea "created" event.
     *
     * @param  \App\User $user
     * @return void
     */
    public function created(Idea $idea)
    {
        event(new IdeaCreated(Fractal::create($idea, new IdeaTransformer)->toArray()));
    }

}
