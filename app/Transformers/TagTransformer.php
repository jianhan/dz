<?php

namespace App\Transformers;

use League\Fractal;
use Spatie\Tags\Tag;

class TagTransformer extends Fractal\TransformerAbstract
{
    public function transform(Tag $tag)
    {
        return [
            'id' => (int)$tag->id,
            'name' => $tag->name,
            'slug' => $tag->slug,
            'type' => $tag->type,
            'order_column' => $tag->order_column,
        ];
    }
}
