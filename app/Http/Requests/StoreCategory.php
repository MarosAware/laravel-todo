<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

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
    public function rules()
    {
        return [
            'name' => 'required|min:2|unique:categories',
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
