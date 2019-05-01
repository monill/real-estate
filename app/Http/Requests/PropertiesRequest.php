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
            'purpose' => 'required|number|in:1,2,3,4',
            'type' => 'required|number|in:1,2',
            'price' => 'required|number',
            'address' => 'required|string|max:250',
            'bathrooms' => 'number',
            'bedrooms' => 'number',
            'garage' => 'number',
            'year' => 'number',
            'city' => 'required|string|max:250',
            'area' => 'required|string|max:50',
            'description' => 'required|string|max:65530',
            'latitude' => 'regex:^[-]?(([0-8]?[0-9])\.(\d+))|(90(\.0+)?)$',
            'longitude' => 'regex:^[-]?((((1[0-7][0-9])|([0-9]?[0-9]))\.(\d+))|180(\.0+)?)$',
            'video1' => 'url|string',
            'video2' => 'url|string',
            'slider' => 'boolean',
            'featured' => 'boolean',
            'avaliable' => 'boolean',
        ];
    }
}
