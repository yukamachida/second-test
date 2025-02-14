<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'name' => 'required',
            'price' => 'integer|min:0|max:10000',
            //'image' => 
            'description' => 'string'
        ];
    }

    public function messages()
    {
        return [
            'name' => '商品名を入力してください',
            'price' => '値段を入力してください',
            'price.integer' => '数値で入力してください',
            'price.min.max' => '0~10000円以内で入力してください',
            'description' => '商品説明を入力してください',
        ];
    }
}
