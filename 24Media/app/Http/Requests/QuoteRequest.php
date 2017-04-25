<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuoteRequest extends FormRequest
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

        'firstName' => 'required|min:2|max:32',
        'surname' => 'required|min:2|max:32',
        'email' => 'required|email|unique:quoteRequest',
        'phoneNumber' => 'required|min:10',
        'idNumber' => 'required|max:15',  
        'created_at' => 'require'
        ];

   }

       public function messages()
{
    return [
        'firstName.required' => 'Please enter First name',
        'firstName.min' => 'Must between 2 and 32 characters',
        'firstName.max' => 'Must be between 2 and 32 characters',
        'surname.required' => 'Please enter Surname',
        'surname.min' => 'Must be between 2 and 32 characters',
        'surname.max' => 'Must be between 2 and 32 characters',
        'email.required' => 'Please enter Email',
        'email.email' => 'Must be a valid email',
        'email.unique' => 'Request has already been made using Email',
        'phoneNumber.required' => 'Please enter Phone number',
        'phoneNumber.min' => 'Must be greater than 10 characters',
        'idNumber.required' => 'Please enter ID number',
        'idNumber.max' => 'Must be less than 15 characters'

    ];
}
}
