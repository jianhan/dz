<?php

namespace App\Http\Requests;

use App\Models\Category;
use Dingo\Api\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateCategory extends FormRequest
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
                Rule::unique(Category::getModel()->getTable(),
                    'name')->ignore(request()->route()->parameter('category')->id),
            ],
            'slug' => [
                'required',
                Rule::unique(Category::getModel()->getTable(),
                    'slug')->ignore(request()->route()->parameter('category')->id),
            ],
            'description' => [
                'required',
            ]
        ];
    }
}
