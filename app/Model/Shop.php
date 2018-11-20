<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $table = 'diy_shop';
    public $timestamps = false;
    protected $fillable = ['name'];
    // protected $primaryKey="id";
    public function cates(){
    	return $this->belongsTo('App\Model\Cate','cate_id','id');
    }

    public function relation(){
    	return $this->hasMany('App\Model\Relation','sid','id');
    }

      public function sku(){
        return $this->hasMany('App\Model\Sku','sid','id');
    }
    // $info = Link::find(2);
        // dd($info->admin->name);
        // 限定id条件
        //
        // $id = [6,7];
        // // 限定状态条件
        // $status = 1;
        // // 模型关联查询
        // $res = Administrator::with(['link'=>function($query) use($id,$status) {//use 是条件
        //     //$query->whereIn('id',$id);
        //     // admin_id 为外键  当获取数据的时候必须的加上这个字段 才能关联到
        //     $query->select('id','urlname','link_url','status','admin_id')
        //     // when 是过滤条件
        //     ->when(isset($status),function($query) use($status){
        //         $query->where('status',$status);
        //     })
        //     ;
        // }])
        // ->find(8);
        // dd($res->link);

        //link 发起请求  查询 admin
        // $res = Link::get();
        // foreach ($res as $key => $value) {
        //     dd($value->admin->name);
        // }
}


