<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminCouponinsert extends FormRequest
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
            'min_pri'=>'required|regex:/^\d{1,5}(\.\d{1,2})?$/',
            'c_pri'=>'required|regex:/^\d{1,5}(\.\d{1,2})?$/',
            'start_time'=>'required',
            'stop_time'=>'required',

        ];
    }
    public function messages()
    {
        return[
        'name.required'=>'用户名不能为空',
        'min_pri.required'=>'使用金额不能为空',
        'min_pri.regex'=>'使用条件只能是数字',
        'c_pri.required'=>'优惠金额不能为空',
        'c_pri.regex'=>'优惠金额只能是数字',
        'start_time.required'=>'开始时间不能为空',
        'start_time.required'=>'结束时间不能为空',


        ];
    }
}
