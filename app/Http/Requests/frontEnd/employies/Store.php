<?php

namespace App\Http\Requests\frontEnd\employies;

use Illuminate\Foundation\Http\FormRequest;

class Store extends FormRequest
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
            'firstName' => 'required',
            'lastName'  => 'required',
            'userName'  => 'required',
            'email'  => 'required|email',
            'password'  => 'required',
            'phoneNumber'   => 'required',
            'image' => 'required|image'
        ];
    }
}
