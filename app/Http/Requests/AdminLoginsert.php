<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminLoginsert extends FormRequest
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
            'postage'=>'required|regex:/^\d{1,5}(\.\d{1,2})?$/',
            'state'=>'required',
        ];
    }
    public function messages()
    {
        return[
            'name.required'=>'物流名不能为空',
            'postage.required'=>'邮费不能为空',
            'postage.regex'=>'邮费注意格式，只能是数字',
            'state.required'=>'请选择是否上架',



        ];
    }
}
