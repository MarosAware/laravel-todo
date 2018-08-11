<?php

namespace App\Http\Requests;

use App\Models\Category;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreCategory extends FormRequest
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
    public function rules(Category $category)
    {
        if (request()->isMethod('PUT')) {
            $modelId = $category->where(['name' => request()->name])->first()->id;
        } else {
            $modelId = null;
        }


        return [
            'name' => [
                'required',
                'min:2',
                Rule::unique('categories', 'name')->ignore($modelId)
            ],

            'color' => 'required|integer|between:0,4'
        ];
    }

    public function messages()
    {
        return [
            'name.unique' => 'Name need to be unique.',
            'color.between'  => 'Your color is invalid.',
        ];
    }
}
