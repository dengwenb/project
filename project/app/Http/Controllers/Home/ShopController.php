<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data = Relation::with(['shop' => function ($query) {
        //      }])->groupBy('sid')->get();
        //获取商品信息
        $data = DB::table('diy_shop')
        ->select(DB::raw('min(price) as price,diy_shop.*,diy_sku.id as kid,diy_shopicture.path,diy_shopicture.sid'))
        ->join('diy_sku','diy_shop.id','=','diy_sku.sid')
        ->join('diy_shopicture','diy_shopicture.sid','=','diy_shop.id')
        ->where('diy_shop.status','=','1')
        ->groupby('sid')
        ->get();
        //加载模板
        return view('Home.Shop.index')->with(['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //获取是商品数星星性质库存信息
        $data = DB::table('diy_shop as s')
        ->select(DB::raw('s.*,k.id as kid,k.skuattr,k.price,p.path'))
        ->join('diy_sku as k','s.id','=','k.sid')
        ->join('diy_shopicture as p','p.sid','=','s.id')
        ->where('s.status','=','1')
        ->where('s.id','=',$id)
        ->groupby('p.path')
        ->get();

        //获取该商品下的所有库存属性信息
        $num = DB::table('diy_shoprelation as r')
        ->where('sid','=',$id)
        ->join('diy_attributes as att','att.id','=','r.attid')
        ->groupby('attid')
        ->get();

        //获取该商品下的所有属性和属性值
        $attr = DB::table('diy_shoprelation as r')
        ->select(DB::raw('r.*,att.name as aname,v.name as vname'))
        ->where('sid','=',$id)
        ->join('diy_attributes as att','att.id','=','r.attid')
        ->join('diy_shop_value as v','r.vid','=','v.id')
        ->get();
        //加载模板
        return view('Home.Shop.shopinfo',['data'=>$data,'attr'=>$attr,'num'=>$num]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
