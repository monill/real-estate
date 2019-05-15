<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SettingsRequest extends FormRequest
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
            'site_title' => 'required|string|max:200',
            'meta_keywords' => 'nullable|string|max:65530',
            'meta_description' => 'nullable|string|max:65530',
            //Analytics
            'analytics' => 'nullable|string|max:65530',
            //Empresa
            'about' => 'nullable|string|max:65530',
            'address' => 'nullable|string|max:250',
            'email' => 'nullable|email|max:250',
            'phone1' => 'nullable|string|max:250',
            'phone2' => 'nullable|string|max:250',
            //Social
            'facebook' => 'nullable|string|max:250',
            'twitter' => 'nullable|string|max:250',
            'googleplus' => 'nullable|string|max:250',
            'linkedin' => 'nullable|string|max:250',
            'link' => 'nullable|string|max:250',
            //Termos e Privacidade
            'terms' => 'nullable|string|max:65530',
            'privacy' => 'nullable|string|max:65530'
        ];
    }
}
