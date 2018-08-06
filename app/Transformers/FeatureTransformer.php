<?php

namespace App\Transformers;

use App\Models\Feature;
use App\Models\Idea;
use League\Fractal;

class FeatureTransformer extends Fractal\TransformerAbstract
{
    /**
     * Transform defines how data should be presented.
     *
     * @param Idea $idea
     * @return array
     */
    public function transform(Feature $feature)
    {
        return [
            'id' => (int)$feature->id,
            'role' => $feature->role,
            'task' => $feature->task,
            'goal' => $feature->goal,
            'display_order' => $feature->display_order,
            'priority' => $feature->priority,
            'notes' => $feature->notes,
        ];
    }
}
