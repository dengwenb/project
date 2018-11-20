<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Broadcastinsert extends FormRequest
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
            'content'=>'required|regex:/^\w{5,50}$/'
        ];
    }

    public function messages()
    {
        return[
            'content.required'=>'文章内容不能为空',
            'content.regex'=>'内容不少于5个字,不多于50个字'
        ];
    }
}
