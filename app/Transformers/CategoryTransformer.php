<?php

namespace App\Transformers;

use App\Models\Category;
use App\Traits\FractalParamBagValidator;
use League\Fractal;

class CategoryTransformer extends Fractal\TransformerAbstract
{
    use FractalParamBagValidator;
    /**
     * List of resources possible to include.
     *
     * @var array
     */
    protected $availableIncludes = [
        'ideas'
    ];


    /**
     * Transform defines how data should be presented.
     *
     * @param Category $category
     * @return array
     */
    public function transform(Category $category)
    {
        return [
            'id' => (int)$category->id,
            'name' => $category->name,
            'slug' => $category->slug,
            'description' => $category->description,
            'sort_order' => $category->sort_order,
        ];
    }

    public function includeIdeas(Category $category, Fractal\ParamBag $params = null)
    {
        if ($params === null || $params->getIterator()->count() == 0) {
            return $this->collection($category->ideas, new IdeaTransformer, 'ideas');
        }

        // validation
        $this->validateParamBag($params, ['limit', 'order']);

        // Processing
        list($limit, $offset) = $params->get('limit');
        list($orderCol, $orderBy) = $params->get('order');

        $ideas = $category->ideas()
            ->take($limit)
            ->skip($offset)
            ->orderBy($orderCol, $orderBy)
            ->get();

        return $this->collection($ideas, new IdeaTransformer, 'ideas');
    }
}