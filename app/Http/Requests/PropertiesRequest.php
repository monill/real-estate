<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PropertiesRequest extends FormRequest
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
            'name' => '',
            'purpose' => '',
            'type' => '',
            'price' => '',
            'address' => '',
            'bathrooms' => '',
            'bedrooms' => '',
            'garage' => '',
            'year' => '',
            'views' => '',
            'city' => '',
            'area' => '',
            'description' => '',
            'latitude' => '',
            'longitude' => '',
            'video1' => '',
            'video2' => ''
        ];
    }
}
