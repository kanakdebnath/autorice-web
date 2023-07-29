<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
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
            'name' => 'required|string',
            'slug' => 'required|string|unique:products,slug,' . $this->product->id,
            'status' => 'required',
            'price' => 'required',
            'description' => 'required|min:20',
        ];
    }


    /**
     * Summary of messages
     * @return array<string>
     */
    public function messages()
    {
        return [
            'name.required' => 'Product Name is Required.',
            'slug.required' => 'Product slug is Required.',
            'slug.unique' => 'Product slug has already been taken.',
            'status.required' => 'Product status is Required.',
            'price.required' => 'Product price is Required.',
            'description.required' => 'Product description is Required.',
        ];
    }
}
