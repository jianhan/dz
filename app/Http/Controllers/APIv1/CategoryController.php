<?php

namespace App\Http\Controllers\APIv1;

use App\ElasticSearchRules\CategorySearchRule;
use App\Http\Controllers\APIController;
use App\Models\Category;
use App\Transformers\CategoryTransformer;
use Dingo\Api\Exception\ValidationHttpException;
use Fractal;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use League\Fractal\Pagination\IlluminatePaginatorAdapter;
use League\Fractal\Serializer\JsonApiSerializer;
use Validator;

class CategoryController extends APIController
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $categoryQuery = Category::query();
        if ($request->get('query', false)) {
            $categoryQuery = Category::search($request->get('query'))->rule(CategorySearchRule::class);
        }
        $paginator = $categoryQuery->paginate();

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
    public function store(Request $request)
    {
        $request['slug'] = $request->get('slug', '') == '' ? str_slug($request->name, '-') : str_slug($request->slug,
            '-');
        $validator = Validator::make($request->all(), [
            'name' => [
                'required',
                Rule::unique(Category::getModel()->getTable()),
            ],
            'slug' => [
                'required',
                Rule::unique(Category::getModel()->getTable()),
            ],
            'description' => [
                'required',
            ]
        ]);
        if ($validator->fails()) {
            throw new ValidationHttpException($validator->errors());
        }

        return Category::create($request->all());
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
    public function update(Request $request, Category $category)
    {

        $request['slug'] = $request->get('slug', '') == '' ? str_slug($request->name, '-') : str_slug($request->slug,
            '-');
        $validator = Validator::make($request->all(), [
            'name' => [
                'required',
                Rule::unique(Category::getModel()->getTable())->ignore($category->id),
            ],
            'slug' => [
                'required',
                Rule::unique(Category::getModel()->getTable())->ignore($category->id),
            ],
            'description' => [
                'required',
            ]
        ]);
        if ($validator->fails()) {
            throw new ValidationHttpException($validator->errors());
        }
        $category->update($validator->validate());

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
