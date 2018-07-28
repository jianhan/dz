<?php

namespace App\Http\Controllers\APIv1;

use App\ElasticSearchRules\CategorySearchRule;
use App\Http\Controllers\APIController;
use App\Http\Requests\StoreCategory;
use App\Http\Requests\UpdateCategory;
use App\Models\Category;
use App\Transformers\CategoryTransformer;
use Fractal;
use Illuminate\Http\Request;
use League\Fractal\Pagination\IlluminatePaginatorAdapter;
use League\Fractal\Serializer\JsonApiSerializer;

class CategoryController extends APIController
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $query = Category::query();
        if ($request->get('query', false)) {
            $query = Category::search($request->get('query'))->rule(CategorySearchRule::class);
        }
        $paginator = $query->paginate();

        return Fractal::create()
            ->collection($paginator->getCollection(), new CategoryTransformer, 'categories')
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
    public function store(StoreCategory $request)
    {
        return Fractal::create(Category::create($request->validated()), new CategoryTransformer);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        return Fractal::create($category, new CategoryTransformer);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Models\Category $category
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategory $request, Category $category)
    {
        $category->update($request->validated());

        return Fractal::create($category, new CategoryTransformer);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();

        return response()->json([
            'meta' => [
                'message' => 'Category deleted',
                'status_code' => 200
            ]
        ]);
    }
}
