<?php

namespace App\Http\Controllers\APIv1;

namespace App\Http\Controllers\APIv1;

use App\Http\Controllers\APIController;
use App\Http\Requests\IdeaAttachCategories;
use App\Http\Requests\IdeaDetachCategories;
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

    /**
     * attach attaches categories to ideas.
     *
     * @param Idea $idea
     * @param IdeaAttachCategories $request
     * @return \Spatie\Fractal\Fractal
     */
    public function attach(Idea $idea, IdeaAttachCategories $request)
    {
        $idea->categories()->attach($request->validated()['ids']);

        return $this->fractalIdea($idea);
    }

    /**
     * detach detaches categories from ideas.
     *
     * @param Idea $idea
     * @param IdeaDetachCategories $request
     * @return \Spatie\Fractal\Fractal
     */
    public function detach(Idea $idea, IdeaDetachCategories $request)
    {
        $idea->categories()->detach($request->validated()['ids']);

        return $this->fractalIdea($idea);
    }

    /**
     * detachAll detaches all categories from idea.
     *
     * @param Idea $idea
     * @return \Spatie\Fractal\Fractal
     */
    public function detachAll(Idea $idea)
    {
        $idea->categories()->detach();

        return $this->fractalIdea($idea);
    }

    /**
     * sync syncs categories to idea.
     *
     * @param Idea $idea
     * @param IdeaSyncCategories $request
     * @return \Spatie\Fractal\Fractal
     */
    public function sync(Idea $idea, IdeaSyncCategories $request)
    {
        $idea->categories()->sync($request->validated()['ids']);

        return $this->fractalIdea($idea);
    }

    /**
     * fractalIdea is a helper function returns a fractal in current context.
     *
     * @param Idea $idea
     * @return \Spatie\Fractal\Fractal
     */
    private function fractalIdea(Idea $idea): \Spatie\Fractal\Fractal
    {
        $idea->load('categories');

        return Fractal::create()
            ->item($idea, new IdeaTransformer, 'ideas')
            ->parseIncludes(['categories'])
            ->serializeWith(new JsonApiSerializer)
            ->toArray();
    }
}
