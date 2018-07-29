<?php

namespace App\Transformers;

use App\Models\Category;
use League\Fractal;

class CategoryTransformer extends Fractal\TransformerAbstract
{

    private $ideasParams = ['limit', 'order'];

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
        if ($params === null) {
            return $this->collection($category->ideas, new IdeaTransformer, 'ideas');
        }

        // Optional params validation
        $paramsArray = array_keys(iterator_to_array($params));
        if ($invalidParams = array_diff($paramsArray, $this->ideasParams)) {
            throw new \Exception(sprintf(
                'Invalid param(s): "%s". Valid param(s): "%s"',
                implode(',', $paramsArray),
                implode(',', $this->ideasParams)
            ));
        }

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