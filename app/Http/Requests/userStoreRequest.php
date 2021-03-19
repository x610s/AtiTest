<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class userStoreRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

  
    public function rules()
    {
        return [
            'name' => 'required',
            'phone' => 'required',
            'company' =>'required',
            'address' =>'required',
            'roles' =>'nullable',
            'password' =>'required|min:4|confirmed',
            'email' =>'required|unique:users',
        ];
    }
}
