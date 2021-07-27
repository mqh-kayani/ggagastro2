<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveProductRequest extends FormRequest
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
            'product_category' => 'required',
            'product_name' => 'required',
            'product_price' => 'required',
            'product_description' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'product_category.required' => 'Please Select One Category',
            'product_name.required' => 'Product Name is Required',
            'product_price.required' => 'Product Price is Required',
            'product_description.required' => 'Product Description is Required'
        ];
    }
}
