<?php

namespace App\Http\Controllers\APIv1;

namespace App\Http\Controllers\APIv1;

use App\Http\Controllers\APIController;
use App\Http\Requests\IdeaSyncCategories;
use App\Models\Idea;
use App\Transformers\CategoryTransformer;
use App\Transformers\IdeaTransformer;
use Fractal;
use Illuminate\Http\Request;
use League\Fractal\Pagination\IlluminatePaginatorAdapter;
use League\Fractal\ParamBag;
use League\Fractal\Serializer\JsonApiSerializer;

class IdeaCategoryController extends APIController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Idea $idea, Request $request)
    {
        $paginator = $idea->categories()->paginate();

        return Fractal::create()
            ->collection($paginator->getCollection(), new CategoryTransformer(new ParamBag($request->all())),
                'categories')
            ->serializeWith(new JsonApiSerializer)
            ->paginateWith(new IlluminatePaginatorAdapter($paginator))
            ->toArray();
    }

    public function sync(Idea $idea, IdeaSyncCategories $request)
    {
        $idea->categories()->sync($request->validated()['ids']);

        return Fractal::create()
            ->item($idea, new IdeaTransformer, 'ideas')
            ->parseIncludes(['categories'])
            ->serializeWith(new JsonApiSerializer)
            ->toArray();
    }

    public function add(Idea $idea, IdeaSyncCategories $request)
    {
        $idea->categories()->sync($request->validated()['ids']);

        return Fractal::create()
            ->item($idea, new IdeaTransformer, 'ideas')
            ->parseIncludes(['categories'])
            ->serializeWith(new JsonApiSerializer)
            ->toArray();
    }
}
