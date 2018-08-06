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

    /**
     * getValidatorInstance overwrites parent method to do some pre-validation process.
     *
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public function getValidatorInstance()
    {
        $this->autoFillSlug();
        return parent::getValidatorInstance();
    }

    /**
     * autoFillSlug automatically filled slug with name if it is not presented.
     */
    protected function autoFillSlug()
    {
        $slug = $this->request->get('slug', '');
        $name = $this->request->get('name', '');
        $slug = $slug == '' ? str_slug($name, '-') : str_slug($slug, '-');
        $this->merge([
            'slug' => $slug
        ]);
    }
}
