<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class StoreServiceRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|min:3|max:255|string',
            'description' => 'required|min:3|string',
            'status' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'service title is required.',
            'description.required' => 'service description is required.',
            'status.required' => 'service status is required.',
        ];
    }
}
