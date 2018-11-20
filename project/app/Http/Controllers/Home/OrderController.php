<?php 

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
    
     //获取商品id
    
     if (session('cart')) {
         $data=session('cart');
    
    // dd(session('cart'));
     $sku=[];
     foreach ($data[0]['skuattr'] as $key => $value) {
        
        $sku=DB::table('diy_shop_value')->where('attid','=',$key)->where('id','=',$value)->select('name')->get();

     }
    // dd($sku);
        //获取物流
        $wl=DB::table('logistics')->where('state','=',1)->select('name','postage','id')->get();
        //获取用户收货地址
        $dz=DB::table('diy_address')->where('userid','=',1)->get();
        // //用户的优惠券
        // $coupon=DB::table('user_coupon')->where('user_coupon.userid','=','1')->join('coupon','user_coupon.coupon_id','=','coupon.id')->get();
        //获取商品信息
        $shop=DB::table('diy_shop as s')->join('diy_shopicture as d','s.id','=','d.sid')->where('s.id','=',$data[0]['sid'])->where('s.status','=','1')->where('d.main','=','1')->select('s.name','d.path','s.cate_id','s.id as sid')->get();
         // dd($shop);
        
        $coupon=[];
         
        foreach ($shop as $key => $value) {
                 //用户的优惠券
        $coupon=DB::table('user_coupon')->where('user_coupon.userid','=','1')->join('coupon','user_coupon.coupon_id','=','coupon.id')->where('coupon.path','=',$value->cate_id)->get();
               }       
    //获取图片地址
        
        return view('Home.Order.index',['wl'=>$wl,'dz'=>$dz,'shop'=>$shop,'data'=>$data,'sku'=>$sku,'coupon'=>$coupon]);
         }else{
            echo "你没有选择商品 <a href='/'> 返回首页</a>";
         }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dis(Request $request){
        $upid=$request->input('upid');
        $list=DB::table('district')->where('upid','=',$upid)->get();
        return json_decode($list);
    }

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
        $userid=1;
        // dd($request->input());
        $data['userid']=1;
        $data['address']=$request->input('city');
        $data['name']=$request->input('name');
        $data['phone']=$request->input('phone');
        $data['code']='000000';
        $data['remarks']=$request->input('remarks');
        if (count(DB::table('diy_address')->where('userid','=',1)->get())<6) {
             if (DB::table('diy_address')->insert($data)) {
             return redirect("/homeOrder")->with('success','添加成功');
      }else{
         return redirect("/homeOrder")->with('error','添加失败');
      }
        }else{
         return redirect("/homeOrder")->with('error','添加失败，只能存在6个地址');
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
        echo "update";
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
