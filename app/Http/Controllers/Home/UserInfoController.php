<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class UserInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('Home.UserInfo.userinfo');
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
      $order_num=$id;
      dd($order_num);

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
    public function myorder(){
        //获取用户订单数据
        $uid=1;

        $data=DB::table('order as od')->where('od.uid','=',$uid)
        ->join('order_shop as o','o.order_id','=','od.id')
        ->join('diy_shop as d','d.id','=','o.sid')
        ->join('diy_shopicture as ds','ds.sid','=','d.id')
        ->where('ds.main','=','1')
        ->select(DB::raw('od.*,od.id as oid,o.*,d.name as dname,d.id as sid,ds.path'))
        ->get();
        $state=[];
        foreach ($data as $key => $value) {
           if ($value->state ==0) {
               $state[$key]="未支付";
           }
           if ($value->state ==1) {
               $state[$key]="已支付";
           }
            if ($value->state ==2) {
               $state[$key]="已发货";
           }
            if ($value->state ==3) {
               $state[$key]="已收货";
           }
            if ($value->state ==4) {
               $state[$key]="交易完成";
           }
           if ($value->state ==5) {
               $state[$key]="已取消";
           }
        }
       
        return view('Home.UserInfo.myorder',['data'=>$data,'state'=>$state]);
    }
    public function qx(Request $request)
    {
        $id=$request->input('orderid');
 
        //判断是否是用户操作
          
               
        $uid="1";
        $user=DB::table('order')->where('uid','=',1)->where('id','=',$id)->get();
        if (!empty($user)) {
            $state['state']=5;//取消
            if (DB::table('order')->where('id','=',$id)->update($state)) {
                // 释放库存
                $stock=DB::table('order_shop')->where('order_shop.order_id','=',$id)
                ->join('diy_sku','diy_sku.id','=','order_shop.skuid')
                ->select('order_shop.num','order_shop.skuid','diy_sku.stock')
                ->get();
                $new['stock']=$stock[0]->num +$stock[0]->stock; 
                DB::table('diy_sku')->where('id','=',$stock[0]->skuid)->update($new);

                echo '取消成功, 3秒后返回<a href="/myorder">我的订单</a>';
              

            }
           

        }else{
            echo '非法操作';
        }
    }
}
