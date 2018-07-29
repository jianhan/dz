<?php

namespace App\Http\Controllers\APIv1;

use App\Http\Controllers\APIController;
use App\Http\Requests\StoreIdea;
use App\Http\Requests\UpdateIdea;
use App\Models\Idea;
use App\Transformers\IdeaTransformer;
use Fractal;
use League\Fractal\Pagination\IlluminatePaginatorAdapter;
use League\Fractal\Serializer\JsonApiSerializer;
use Spatie\Tags\Tag;

class IdeaController extends APIController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query = Idea::query();
        $paginator = $query->paginate();
        return Fractal::create()
            ->collection($paginator->getCollection(), new IdeaTransformer, 'ideas')
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
    public function store(StoreIdea $request)
    {
        $idea = Idea::create($request->except(['categories']));

        // sync categories if there are some
        if ($request->get('categories', false)) {
            $idea->categories()->sync($request->get('categories'));
        }

        // sync tags if there are some
        if ($request->get('tags', false)) {
            $tags = [];
            foreach ($request->get('tags') as $tag) {
                array_push($tags, Tag::findOrCreate($tag, 'ideasTag'));
            }
            $idea->attachTags($tags);
        }

        return Fractal::create($idea, new IdeaTransformer);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show(Idea $idea)
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
    public function update(UpdateIdea $request, Idea $idea)
    {
        if ($request->get('categories', false) && $request->get('categories_option', false)) {
            switch ($request->get('categories_option')) {
                case 'sync':
                    $idea->categories()->sync($request->get('categories'));
                case 'detach':
                    $idea->categories()->detach($request->get('categories'));
                case 'add':
                    $idea->categories()->attach($request->get('categories'));
            }
        }
        $idea->update($request->except(['categories', 'categories_option']));

        return Fractal::create()
            ->item($idea, new IdeaTransformer, 'ideas')
            ->serializeWith(new JsonApiSerializer)
            ->toArray();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
