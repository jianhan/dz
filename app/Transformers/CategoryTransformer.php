<?php

namespace App\Transformers;

use App\Models\Category;
use League\Fractal;

class CategoryTransformer extends Fractal\TransformerAbstract
{
    public function transform(Category $category)
    {
        return [
            'type' => 'categories',
            'id' => (string)$category->id,
            'attributes' => [
                'name' => $category->name,
                'slug' => $category->slug,
                'description' => $category->description,
                'sort_order' => $category->sort_order,
            ],
        ];
    }
}