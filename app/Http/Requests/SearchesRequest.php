<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SearchesRequest extends FormRequest
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
            'purpose' => 'nullable|numeric|in:1,2',
            'city' => 'nullable|string|max:50',
            'slider' => 'nullable|boolean',
            'type' => 'nullable|numeric|in:1,2,3,4',
        ];
    }
}
