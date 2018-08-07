<?php

namespace App\Http\Requests;

use App\Models\Feature;
use Dingo\Api\Http\FormRequest;
use function array_merge;

class IdeaStoreManyFeatures extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return array_merge(['features' => 'array|required'], Feature::$manyFeaturesValidationRules);
    }
}
