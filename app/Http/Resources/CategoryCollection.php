<?php

namespace App\Http\Resources;

use App\Models\Idea;
use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Support\Collection;

class CategoryCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        $ideas = $this->collection->flatMap(function ($category) {
            return $category->ideas;
        });

//        $included = $ideas->merge($comments)->unique();
        $included = $ideas->unique();

        return [
            'data' => CategoryResource::collection($this->collection),
            'links' => [
                'self' => route('categories.index'),
            ],
            'included' => $this->withIncluded($included),
        ];
    }

    private function withIncluded(Collection $included)
    {
        return $included->map(
            function ($include) {
                if ($include instanceof Idea) {
                    return new IdeaResource($include);
                }
            }
        );
    }

}
