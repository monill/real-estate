<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogsRequest extends FormRequest
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
            'title' => 'required|string|max:255',
            'image' => 'image|mimes:jpeg,png,jpg|max:3072',
            'content' => 'required|string|max:65530',
            'meta_keywords' => 'string|max:65530',
            'meta_description' => 'string|max:65530',
            'published' => 'boolean'
        ];
    }
}
