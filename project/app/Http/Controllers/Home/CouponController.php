<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //获取所有上线的优惠券
        $cate=[];
        $coupon=DB::table('coupon')->where('state','=','1')->get();
        // dd($coupon);
        foreach ($coupon as $key => $value) {
            $cate[$key]=DB::table('cates')->where('id','=',$value->path)->select('name')->first();  
        }
        
        return view('Home.Coupon.index',['coupon'=>$coupon,'cate'=>$cate]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    //我的购物券
    public function create()
    {
      //   //获取数据 
        $coupon=DB::table('user_coupon')->where('userid','=','1')->join('coupon','coupon.id','=','user_coupon.coupon_id')->select('user_coupon.state as state','coupon.id as cid','coupon.name as cname','coupon.min_pri as cmin','coupon.c_pri as cpri','coupon.start_time as cstart','coupon.stop_time as cstop','coupon.path as cpath')->get();
    
      $cate=[];
      $use=[];
      $wei=[];
      $guo=[];
      // dd($coupon);
       foreach ($coupon as $key => $value) {
          $cate[$key]=DB::table('cates')->where('id','=',$value->cpath)->select('name')->first();
       
          if ($value->state==1) {
                $use[$key]=$value;
            }else{
                $wei[$key]=$value;
            } 
            if (date('Y-m-d h:i:s',time()) > $value->cstop) {
                $guo[$key]=$value;
            }

       }
    
      
       return view('Home.Coupon.my',['coupon'=>$coupon,'cate'=>$cate,'use'=>$use,'wei'=>$wei,'guo'=>$guo]);
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
        
    }
        public function lq(Request $request)
    {
         // return response()->json(['msg'=>1]);
        //将优惠券id写入表
        //获取用户idsession('id')
        $data['userid']=1;
        $data['coupon_id']=$request->input('id');
        $data['state']=0;
        //查询是否领取
        if (DB::table('user_coupon')->where('coupon_id','=', $data['coupon_id'])->where('userid','=','1')->first()) {
            return response()->json(['msg'=>0]);
        }else{
        if (DB::table('user_coupon')->insert($data)) {
             return response()->json(['msg'=>1]);
        }else{
              return response()->json(['msg'=>2]);
        }

   }
       
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
