<?php

namespace App\Http\Controllers\APIv1;

use App\Http\Controllers\APIController;
use App\Models\Feature;
use App\Models\Idea;
use App\Transformers\FeatureTransformer;
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
            ->collection($idea->features, new FeatureTransformer, 'features')
            ->serializeWith(new JsonApiSerializer)
            ->toArray();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Idea $idea, Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show(Idea $idea, Feature $feature)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Idea $idea, Request $request, Feature $feature)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Idea $idea, Feature $feature)
    {
        //
    }
}
