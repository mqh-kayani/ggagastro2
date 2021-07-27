<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SignUpRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required|unique:users',
            'phone' => 'required',
            'password' => 'required',
        ];
    }
    public function messages()
    {
        return [
          'name.required' => 'Name is Required',
          'email.required' => 'Email Address is Required',
          'email.unique' => 'Email Already Exist',
          'password.required' => 'Password is Required'
        ];
    }
}
