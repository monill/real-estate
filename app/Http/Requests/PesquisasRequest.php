<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PesquisasRequest extends FormRequest
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
            'id' => '',
            'city' => '',
            'purpose' => '',
            'type' => '',
            'bedrooms' => '',
            'bathrooms' => '',
            'min_price' => '',
            'max_price' => '',
        ];
    }
}
