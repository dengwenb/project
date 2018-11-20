<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Linkinsert extends FormRequest
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
            //url地址规则设置
            'url'=>'required|regex:/https?:\/\/(\w){5,15}\.\w{2,5}/',
            'name'=>'required'
        ];
    }


    public function messages()
    {
        return[
            'url.required'=>'url地址不能为空',
            'url.regex'=>'url地址格式不正确',
            'name.required'=>'链接名字不能为空'
        ];
    }
}
