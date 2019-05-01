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
            'id' => 'nullable|numeric',
            'city' => 'nullable|string|max:50',
            'purpose' => 'nullable|numeric|in:1,2',
            'type' => 'nullable|numeric|in:1,2,3,4',
            'bedrooms' => 'nullable|numeric',
            'bathrooms' => 'nullable|numeric',
            'min_price' => 'nullable|numeric',
            'max_price' => 'nullable|numeric',
        ];
    }
}
