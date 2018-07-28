<?php

namespace App\Transformers;

use App\Models\Idea;
use League\Fractal;

class IdeaTransformer extends Fractal\TransformerAbstract
{

    /**
     * List of resources to automatically include
     *
     * @var array
     */
    protected $defaultIncludes = [
        'appType'
    ];

    public function transform(Idea $idea)
    {
        return [
            'id' => $idea->id,
            'name' => $idea->name,
            'slug' => $idea->slug,
            'visible' => $idea->visible,
            'description' => $idea->description,
        ];
    }

    public function includeAppType(Idea $idea)
    {
        return $this->collection($idea->appType(), new AppTypeTransformer, 'appTypes');
    }
}
