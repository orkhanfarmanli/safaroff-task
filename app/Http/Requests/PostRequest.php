<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'title' => 'required|max:250',
            'main_img' => 'required',
            'short_desc' => 'required|max:500',
            'body' => 'required',
        ];
    }

    /**
     * Request messages
     *
     * @param $var1 $var2
     * @return Type $var
     */

    public function messages()
    {
        return [
            'title.required' => 'Başlıq vacibdir',
            'title.max' => 'Başlıq 250 hərfdən çox ola bilməz',
            'main_img.required' => 'Şəkil vacibdir',
            'short_desc.required' => 'Qısa məlumat vacibdir',
            'short_desc.max' => 'Qısa məlumat 500 hərfdən çox ola bilməz',
            'body.required' => 'Mətn vacibdir',
        ];
    }
}
