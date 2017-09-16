<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MenuRequest extends FormRequest
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
            'title' => 'required',
            'desc' => 'required',
            'url' => 'required',
            'menu_order' => 'required|integer',
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
            'desc.required' => 'Qısa məlumat vacibdir',
            'url.required' => 'Url vacibdir',
            'menu_order.required' => 'Sıra vacibdir',
            'menu_order.integer' => 'Yalnır rəqəm istifadə olunmalıdır',
        ];
    }
}
