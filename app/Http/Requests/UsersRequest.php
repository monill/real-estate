<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsersRequest extends FormRequest
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
            'name' => 'required|string|max:200',
            'email' => 'required|string|email|max:70|unique:users',
            'password' => 'required|string|between:6,16',
            'avatar' => 'image|mimes:jpeg,png,jpg|max:3072',
            'job' => 'string|max:200',
            'about' => 'string|max:65530',
            'admin' => 'boolean'
        ];
    }
}