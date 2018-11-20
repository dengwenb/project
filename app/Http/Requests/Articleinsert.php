<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Articleinsert extends FormRequest
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
            'title'=>'required',
            'source'=>'regex:/\w+/',
            'click'=>'required|regex:/https?:\/\/(\w){3,15}\.\w{2,5}/',
            'content'=>'regex:/\w+/'
        ];
    }

    public function messages()
    {
        return[
            'title.required'=>'文章标题不能为空',
            'source.regex'=>'文章来源不能为空',
            'click.regex'=>'链接格式不正确',
            'click.required'=>'链接不能为空',
            'content.regex'=>'文章内容不能为空'
        ];
    }
}
