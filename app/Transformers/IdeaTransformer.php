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
        'appType',
        'tags',
        'features',
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

    public function includeTags(Idea $idea)
    {
        return $this->collection($idea->tags, new TagTransformer, 'tags');
    }

    public function includeFeatures(Idea $idea)
    {
        return $this->collection($idea->features()->orderByPriority()->get(), new FeatureTransformer, 'features');
    }
}

