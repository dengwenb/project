<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminBrandinsert extends FormRequest
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
            'name'=>'required',
            'sid'=>'required|regex:/^\d{1,5}(\.\d{1,2})?$/',
            'describe'=>'required',
            'state'=>'required',
        ];
    }
     public function messages()
    {
        return[
            'name.required'=>'品牌名不能为空',
            'sid.required'=>'商品id、不能为空',
            'sid.regex'=>'注意商品id格式，只能是数字',
            'state.required'=>'请选择是否上架',



        ];
    }
}
