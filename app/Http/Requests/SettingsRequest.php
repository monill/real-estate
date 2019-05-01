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
            'site_title' => '',
            'meta_keywords' => '',
            'meta_description' => '',
            //Analytics
            'analytics' => '',
            //Empresa
            'about' => '',
            'address' => '',
            'email' => '',
            'phone1' => '',
            'phone2' => '',
            //Social
            'facebook' => '',
            'twitter' => '',
            'googleplus' => '',
            'linkedin' => '',
            'link' => '',
            //Google Maps
            'latitude' => '',
            'longitude' => '',
            //Termos e Privacidade
            'terms' => '',
            'privacy' => ''
        ];
    }
}
