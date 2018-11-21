<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Cate extends Model
{
    protected $table = 'cates';
    public $timestamps = false;
    protected $fillable = ['name'];
    // protected $primaryKey="id";
    public function shop(){
    	return $this->hasMany('App\Model\Shop','id','cate_id');
    }
}
