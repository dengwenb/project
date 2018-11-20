<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class PayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
   
        $data=$request->except('_token','num','sid','price','c_pri');
        $total="";
        if ( $request->input('postage')!=="") {
          $total=$request->input('total') + $request->input('postage');
            
        }
       if ($request->input('coupon_id')!=="") {
           $total=$request->input('total')+$request->input('postage') - $request->input('c_pri');
       }
     
        $data['state']=0;//待支付
        $data['uid']=1;
        $data['ctime']=time();
        // dd($data);
        $data['order_num']=rand(0,10000).time();
        $v['num']=$request->input('num');
        $v['sid']=$request->input('sid');
        $v['price']=$request->input('price');
        // dd($data);
        // 写入订单
        $v['order_id']=DB::table('Order')->insertGetId($data);
        session('order_num',$data['order_num']);
        // dd($v);
        if ($v['order_id']) {
             if (DB::table('order_shop')->insert($v)){
                //清除cart购物车
                session()->pull('cart');
               return redirect('/Pays?order='.$data['order_num'].'&total='.$total);             }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function pays(Request $request){
        $num=$request->input('order');
        $total=$request->input('total');
        pay($num,$total);
    }
    public function cg(){
        echo '支付ok';
    }
}
