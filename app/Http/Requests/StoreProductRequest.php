<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
            'slug' => 'required|string|unique:products,slug,',
            'status' => 'required',
            'price' => 'required',
            'description' => 'required|min:20',
            'photo' => 'required',
        ];
    }

    /**
     * Summary of message
     * @return array<string>
     */
    public function messages()
    {
        return [
            'name.required' => 'Product Name is Required.',
            'slug.required' => 'Product slug is Required.',
            // 'slug.unique' => 'Product slug Already taken.',
            'status.required' => 'Product status is Required.',
            'price.required' => 'Product price is Required.',
            'description.required' => 'Product description is Required.',
            'photo.required' => 'Product photo is Required.',
        ];
    }
}
