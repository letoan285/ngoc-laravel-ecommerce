<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveProduct extends FormRequest
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
            'name' => 'required|max:255',
            'sell_price' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Ten khong duoc de trong',
            'name.max' => 'Ten toi da 255 ky tu',
            'sell_price.required'  => 'Gia ban khong de trong',
        ];
    }
}
