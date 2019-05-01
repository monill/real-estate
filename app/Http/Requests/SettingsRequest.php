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
            'meta_keywords' => 'string|max:65530',
            'meta_description' => 'string|max:65530',
            //Analytics
            'analytics' => 'string|max:65530',
            //Empresa
            'about' => 'string|max:65530',
            'address' => 'string|max:250',
            'email' => 'email|max:250',
            'phone1' => 'string|max:250',
            'phone2' => 'string|max:250',
            //Social
            'facebook' => 'url|string|max:250',
            'twitter' => 'url|string|max:250',
            'googleplus' => 'url|string|max:250',
            'linkedin' => 'url|string|max:250',
            'link' => 'url|string|max:250',
            //Termos e Privacidade
            'terms' => 'string|max:65530',
            'privacy' => 'string|max:65530'
        ];
    }
}
