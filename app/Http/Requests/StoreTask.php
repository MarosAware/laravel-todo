<?php

namespace App\Http\Requests;

use App\Models\Task;
use Illuminate\Foundation\Http\FormRequest;

class StoreTask extends FormRequest
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
        $arg = $this->method('PUT') ? $this->route('task')->deadline : 'today';
        return [
            'name' => 'required|min:3',
            'category_id' => 'required|integer',
            'priority' => 'required|integer|between:0,2',
            'deadline' => 'required|date|after_or_equal:' . $arg
        ];
    }

    /**
     * @return array
     */
    public function messages()
    {
        $arg = $this->method('PUT') ? 'last date.' : 'today date.';
        return [
            'name.required' => 'Name of the task is required and must be at least 3 character.',
            'category_id.required' => 'Please assign category to the task.',
            'priority.integer' => 'Invalid priority.',
            'deadline.date' => 'Deadline must be a date.',
            'deadline.after_or_equal' => 'Deadline must be greater or equal ' . $arg
        ];
    }
}
