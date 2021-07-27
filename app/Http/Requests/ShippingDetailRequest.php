<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ShippingDetailRequest extends FormRequest
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
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => 'required',
            'country' => 'required',
            'city' => 'required',
            'postal_code' => 'required',
            'address' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'first_name.required' => 'First Name is Required',
            'last_name.required' => 'Last Name is Required',
            'phone.required' => 'Phone Number is Required',
            'country.required' => 'Country Name is Required',
            'city.required' => 'City Name is Required',
            'postal_code.required' => 'Postal Code is Required',
            'address.required' => 'Address is Required',
        ];
    }
}
