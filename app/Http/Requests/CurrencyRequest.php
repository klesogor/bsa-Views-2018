<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CurrencyRequest extends FormRequest
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
            'title' => 'required|string|min:1|max:255',
            'short_name' => 'required|string|min:2|max:10',
            'logo_url' => 'required|url|active_url|max:255',
            'price' => 'required|regex:/^\d+(\.\d+)?$/'
        ];
    }

    public function messages()
    {
        return [
            'title.min' => 'Name shouldn\'t be empty',
            'title.required' => 'Name field is required',
            'title.max' => 'Name should be shorter than 255 characters',
            'short_name.required' => 'Symbol field is required',
            'short_name.min' => 'Symbol should be longer than 1 characters',
            'short_name.max' => 'Symbol should be shorter than 11 characters',
            'logo_url.url' => 'Logo url should be a url',
            'logo_url.active_url' => 'Logo url looks like inactive',
            'logo_url.max' => 'Too long url',
            'price' => 'Your price should be unsigned float'
        ];
    }
}
