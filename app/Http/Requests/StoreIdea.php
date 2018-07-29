<?php

namespace App\Http\Requests;

use App\Models\Idea;
use Dingo\Api\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreIdea extends FormRequest
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
        $this->slug = !isset($this->slug) || $this->slug == '' ? str_slug($this->name, '-') : str_slug($this->slug,
            '-');

        return [
            'name' => [
                'required',
                Rule::unique(Idea::getModel()->getTable(), 'name'),
            ],
            'slug' => [
                'required',
                Rule::unique(Idea::getModel()->getTable(), 'slug'),
            ],
            'visible' => [
                'required',
            ],
            'categories' => [
                'array',
            ],
            'tags' => [
                'array',
            ],
            'description' => [
                'required',
            ]
        ];
    }
}
