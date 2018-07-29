<?php

namespace App\Transformers;

use App\Models\Idea;
use League\Fractal;

class IdeaTransformer extends Fractal\TransformerAbstract
{
    /**
     * List of resources possible to include
     *
     * @var array
     */
    protected $availableIncludes = [
        'categories',

    ];

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
            'id' => (int)$idea->id,
            'name' => $idea->name,
            'slug' => $idea->slug,
            'visible' => $idea->visible,
            'description' => $idea->description,
        ];
    }

    public function includeAppType(Idea $idea)
    {
        return $idea->appType ? $this->item($idea->appType, new AppTypeTransformer, 'appTypes') : $this->null();
    }

    public function includeCategories(Idea $idea)
    {
        return $this->collection($idea->categories, new CategoryTransformer, 'categories');
    }
}
