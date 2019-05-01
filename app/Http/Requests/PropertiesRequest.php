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
            'name' => 'required|string|max:250',
            'purpose' => 'required|numeric|in:1,2,3,4',
            'type' => 'required|numeric|in:1,2',
            'price' => 'required|numeric',
            'address' => 'required|string|max:250',
            'bathrooms' => 'numeric',
            'bedrooms' => 'numeric',
            'garage' => 'numeric',
            'year' => 'numeric',
            'city' => 'required|string|max:250',
            'area' => 'required|string|max:50',
            'description' => 'required|string|max:65530',
            'video1' => 'url|string',
            'video2' => 'url|string',
            'slider' => 'boolean',
            'featured' => 'boolean'
        ];
    }
}
