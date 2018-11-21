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

        $total="";
        $v['num']=$request->input('num');//获取订单数量
        $kid=session('kid');//库存id
        $stock=DB::table('diy_sku')->where('id','=',$kid)->select('stock')->get();//获取库存
        $sku['stock']=$stock[0]->stock-$v['num'];
        //判断库存
        if ($sku['stock']>=0) {
        $data['address_id']=$request->input('address_id');
        $data['total']=$request->input('total');
         //if有优惠券id 改变状态
        if ($request->input('coupon_id')) {
            $state['state']=1;
            $cid=$request->input('coupon_id');
            DB::table('user_coupon')->where('coupon_id','=',$cid)->where('userid','=',1)->update($state);
            
        }
        //data 写入订单表
        
        $total=$request->input('total') - $request->input('c_pri');//减优惠金额
        $data['state']=0;//待支付
        $data['uid']=1;
        $data['ctime']=time();
        $data['order_num']=rand(0,10000).time();
        //v 写入详情
      
        $v['sid']=$request->input('sid');
        $v['price']=$request->input('price');
        $v['skuid']=$kid;
        // 写入订单 获取id
        $v['order_id']=DB::table('Order')->insertGetId($data);
        if ($v['order_id']) {
             if (DB::table('order_shop')->insert($v)){
                // 去库存
                DB::table('diy_sku')->where('id','=',$kid)->update($sku);
                //清除缓存
                session()->pull('cart','kid');

                return redirect('/Pays?order='.$data['order_num'].'&total='.$total);    
            }

        }
        }else{
            //库存不足
            echo '库存不足 暂时只有'.$stock[0]->stock.'件，<a href="/homeCart">返回购物车</a>' ;
               
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
    public function cg(Request $request){
        //改变订单状态 添加支付时间
        $order_num=$request->input('out_trade_no');
        $data['state']=1;//已支付
        $data['paytime']=time();
        if (DB::table('order')->where('order_num','=',$order_num)->update($data)) {
             echo "支付ok <a href='/'>返回首首页</a>";
        }
        
      
    }
}
