<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Relation extends Model
{
    protected $table = 'diy_shoprelation';
    public $timestamps = false;
    // protected $fillable = ['name'];
    // protected $primaryKey="id";
    public function shop()
    {
    	return $this->belongsTo('App\Model\Shop','sid','id');
    }

    public function sku()
    {
    	return $this->hasMany('App\Model\Sku','sid','sid');
    }
}
