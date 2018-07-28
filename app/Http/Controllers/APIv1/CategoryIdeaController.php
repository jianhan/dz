<?php

namespace App\Http\Controllers\APIv1;

use App\Http\Controllers\APIController;
use App\Http\Requests\StoreIdea;
use App\Http\Requests\UpdateIdea;
use App\Models\Category;
use App\Models\Idea;
use App\Transformers\IdeaTransformer;
use Fractal;
use Illuminate\Http\Request;
use League\Fractal\Pagination\IlluminatePaginatorAdapter;
use League\Fractal\Serializer\JsonApiSerializer;

class CategoryIdeaController extends APIController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Category $category)
    {
        $paginator = $category->ideas()->paginate();

        return Fractal::create()
            ->collection($paginator->getCollection(), new IdeaTransformer(), 'ideas')
            ->serializeWith(new JsonApiSerializer)
            ->paginateWith(new IlluminatePaginatorAdapter($paginator))
            ->toArray();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreIdea $request, Category $category)
    {
        return Fractal::create($category->ideas()->create($request->validated()), new IdeaTransformer);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category, Idea $idea)
    {
        return Fractal::create($idea, new IdeaTransformer);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Category $category, UpdateIdea $request, Idea $idea)
    {
        $idea->update($request->validated());

        return Fractal::create($idea, new IdeaTransformer);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category, Idea $idea)
    {
        $category->ideas()->detach([$idea->id]);

        return response()->json([
            'meta' => [
                'message' => 'Idea has been detached from category',
                'status_code' => 200
            ]
        ]);
    }
}
