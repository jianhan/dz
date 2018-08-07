<?php

namespace App\Http\Controllers\APIv1;

use App\Http\Controllers\APIController;
use App\Http\Requests\IdeaDestroyManyFeatures;
use App\Http\Requests\IdeaStoreFeature;
use App\Http\Requests\IdeaUpdateFeature;
use App\Http\Requests\IdeaUpsertManyFeatures;
use App\Models\Feature;
use App\Models\Idea;
use App\Transformers\FeatureTransformer;
use App\Transformers\IdeaTransformer;
use Fractal;
use Illuminate\Http\Request;
use League\Fractal\Serializer\JsonApiSerializer;

class IdeaFeatureController extends APIController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Idea $idea, Request $request)
    {
        return Fractal::create()
            ->collection($idea->features()->orderByPriority()->get(),
                new FeatureTransformer, 'features')
            ->serializeWith(new JsonApiSerializer)
            ->toArray();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Idea $idea, IdeaStoreFeature $request)
    {
        $idea->features()->create($request->validated());

        return Fractal::create($idea, new IdeaTransformer);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show(Idea $idea, Feature $feature)
    {
        return Fractal::create($feature, new FeatureTransformer);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Idea $idea, IdeaUpdateFeature $request, Feature $feature)
    {
        $feature->update($request->validated());

        return Fractal::create($feature, new FeatureTransformer);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Idea $idea, Feature $feature)
    {
        $feature->delete();

        return Fractal::create($idea, new IdeaTransformer);
    }

    /**
     * destroyMany delete many features at once.
     *
     * @param Idea $idea
     * @param IdeaDestroyManyFeatures $request
     * @return \Spatie\Fractalistic\Fractal
     */
    public function destroyMany(Idea $idea, IdeaDestroyManyFeatures $request)
    {
        $idea->features()->whereIn('id', $request->validated()['ids'])->delete();

        return Fractal::create($idea, new IdeaTransformer);
    }

    /**
     * upsertMany create / update many features for idea.
     *
     * @param Idea $idea
     * @param IdeaUpsertManyFeatures $request
     * @return \Spatie\Fractalistic\Fractal
     */
    public function upsertMany(Idea $idea, IdeaUpsertManyFeatures $request)
    {
        foreach ($request->validated()['features'] as $feature) {
            if (isset($feature['id'])) {
                $idea->features()->where(['id' => $feature['id']])->update($feature);
            } else {
                $idea->features()->create($feature);
            }
        }

        return Fractal::create($idea, new IdeaTransformer);
    }

}
