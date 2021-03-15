<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class updateUserRequest extends FormRequest
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
            'avatar'=>'image|max:2500',
            'email' =>'required|unique:users,email,'.$this->route('usuario'),
        ];
    }
}
