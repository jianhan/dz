<?php

namespace App\Transformers;

use App\Models\Category;
use League\Fractal;

class CategoryTransformer extends Fractal\TransformerAbstract
{

    /**
     * List of resources to automatically include
     *
     * @var array
     */
    protected $defaultIncludes = [
        'ideas'
    ];


    public function transform(Category $category)
    {
        return [
            'id' => $category->id,
            'name' => $category->name,
            'slug' => $category->slug,
            'description' => $category->description,
            'sort_order' => $category->sort_order,
        ];
    }

    public function includeIdeas(Category $category)
    {
        return $this->collection($category->ideas, new IdeaTransformer);
    }
}