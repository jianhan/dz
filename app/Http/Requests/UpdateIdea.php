<?php

namespace App\Http\Requests;

use App\Models\Idea;
use Dingo\Api\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateIdea extends FormRequest
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
                Rule::unique(Idea::getModel()->getTable(), 'name')->ignore(request()->route()->parameter('idea')->id),
            ],
            'slug' => [
                'required',
                Rule::unique(Idea::getModel()->getTable(), 'slug')->ignore(request()->route()->parameter('idea')->id),
            ],
            'visible' => [
                'required',
            ],
            'categories' => [
                'array',
            ],
            'categories_option' => Rule::in(['sync', 'add', 'detach']),
            'tags' => [
                'array',
            ],
            'tags_option' => Rule::in(['sync', 'add', 'detach']),
            'description' => [
                'required',
            ]
        ];
    }
}
