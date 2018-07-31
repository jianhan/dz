<?php

namespace App\Http\Controllers\APIv1;

use App\Http\Controllers\APIController;
use App\Http\Requests\CategoryAttachIdeas;
use App\Http\Requests\CategoryDetachIdeas;
use App\Http\Requests\CategorySyncIdeas;
use App\Models\Category;
use App\Transformers\CategoryTransformer;
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
            ->parseIncludes(['ideas'])
            ->serializeWith(new JsonApiSerializer)
            ->paginateWith(new IlluminatePaginatorAdapter($paginator))
            ->toArray();
    }

    /**
     * detach detaches ideas from category.
     *
     * @param Category $category
     * @return \Illuminate\Http\JsonResponse
     */
    public function detach(Category $category, CategoryDetachIdeas $request)
    {
        $category->ideas()->detach($request->validated()['ids']);

        return Fractal::create()
            ->item($category, new CategoryTransformer, 'categories')
            ->parseIncludes(['ideas'])
            ->serializeWith(new JsonApiSerializer);
    }

    /**
     * detachAll detaches all ideas from an give category.
     *
     * @param Category $category
     * @return \Illuminate\Http\JsonResponse
     */
    public function detachAll(Category $category)
    {
        $category->ideas()->detach();

        return Fractal::create()
            ->item($category, new CategoryTransformer, 'categories')
            ->parseIncludes(['ideas'])
            ->serializeWith(new JsonApiSerializer);
    }

    /**
     * sync synchronizes ideas to category.
     *
     * @param Category $category
     * @param CategorySyncIdeas $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function sync(Category $category, CategorySyncIdeas $request)
    {
        $category->ideas()->sync($request->validated()['ids']);

        return Fractal::create()
            ->item($category, new CategoryTransformer, 'categories')
            ->parseIncludes(['ideas'])
            ->serializeWith(new JsonApiSerializer);
    }


    /**
     * attach attaches ideas to category.
     *
     * @param Category $category
     * @param CategoryAttachIdeas $request
     * @return \Spatie\Fractalistic\Fractal
     */
    public function attach(Category $category, CategoryAttachIdeas $request)
    {
        $category->ideas()->attach($request->validated()['ids']);
        $category->load('ideas');

        return Fractal::create()
            ->item($category, new CategoryTransformer, 'categories')
            ->parseIncludes(['ideas'])
            ->serializeWith(new JsonApiSerializer);
    }
}
