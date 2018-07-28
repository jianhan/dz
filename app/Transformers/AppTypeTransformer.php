<?php

namespace App\Transformers;

use App\Models\AppType;
use League\Fractal;

class AppTypeTransformer extends Fractal\TransformerAbstract
{
    public function transform(AppType $appType)
    {
        return [
            'id' => $appType->id,
            'name' => $appType->name,
            'description' => $appType->description,
        ];
    }
}
