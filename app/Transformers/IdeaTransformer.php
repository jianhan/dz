<?php

namespace App\Transformers;

use App\Models\Idea;
use League\Fractal;

class IdeaTransformer extends Fractal\TransformerAbstract
{
    public function transform(Idea $idea)
    {
        return [
            'id' => $idea->id,
            'name' => $idea->name,
            'slug' => $idea->slug,
            'description' => $idea->description,
        ];
    }
}
