<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Adminuserinfo extends Model
{
    //添加属性
    //模型类对应得数据表
    protected $table="diy_usersinfo";
    //关闭自动维护时间戳 创建消息时间字段 created_at  修改消息时间字段 updated_at
    public $timestamps=false;
    //可以被批量赋值的属性字段
    
    //修改器
    //在获取数据的字段之后自动进行处理
    //例如：就是状态值转换
    public function getQuestatusAttribute($value){
        // 处理
        $questatus = [1=>'启用',0=>'禁用'];
        // 返回数据
        return $questatus[$value];
    }
}
