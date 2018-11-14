<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
//导入校验类
use App\Http\Requests\AdminCouponInsert;
class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //获取数据
        $data=DB::table('coupon')->select()->get();
        // dd($data);
        $state=[];
        $cate=[];
        foreach ($data as $key => $value) {
            if ($value->state==0) {
                 $state[$key]='不显示';
            }else{
                 $state[$key]='显示';
            }
            // dd($value->path);
            $cate[]=DB::table('cates')->where('id','=',$value->path)->select('name')->get();
           
        }
        // dd($cate[2][0]->name);
        return view("Admin.Coupon.index",['data'=>$data,'state'=>$state,'cate'=>$cate]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    //调整类别顺序 添加分隔符
    public static function getcates(){
        $cate=DB::table("cates")->select(DB::raw('*,concat(path,",",id) as paths '))->orderBy('paths')->get();
        //遍历数据
        foreach ($cate as $key => $value) {
            //转换为数组
            $arr=explode(",",$value->path);
            $len=count($arr)-1;
            //重复字符串函数
            $cate[$key]->name=str_repeat("--|",$len).$value->name;
        }
        return $cate;
    }
    public function create()
    {
        //
      //获取数据
        $cate=self::getcates();
        // dd($cate);
        return view("Admin.Coupon.add",['cate'=>$cate]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //执行添加优惠券
    public function store(AdminCouponInsert $request)
    {
        //
        $data=$request->except('_token');

         // dd($data);
         
        if (DB::table('coupon')->insert($data)) {
            return redirect("/adminCoupon")->with('success','添加成功');
        }else{
             return redirect("/adminsCoupon/create")->with('success','添加失败');
        }
    
    }
    //删除
    public function del(Request $request)
    {

        $id=$request->input('id');
        // dd($id);
        if (DB::table('coupon')->where('id','=',$id)->delete()) {
            return response()->json(['msg'=>1]);
        }else{
            return response()->json(['msg'=>0]);

        }
    }
    //上下架
    public function stop(Request $request) 
    {
       $id=$request->input('id');
       $data=[];
       $state=DB::table('coupon')->where('id','=',$id)->select('state')->get();
        if ($state[0]->state==0) {
            $data['state']=1;
        }else{
            $data['state']=0;
        }
        if (DB::table('coupon')->where('id','=',$id)->update($data)) {
             //操作成功
           return response()->json(['msg'=>1,'state'=>$data['state']]);
       }else{
            //操作失败
            return response()->json(['msg'=>0]);
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
      
        $data=DB::table('coupon')->where('id','=',$id)->select()->get();
        // 获取数据
        $cate=self::getcates();

        return view("Admin.Coupon.edit",['cate'=>$cate,'data'=>$data,'id'=>$id]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //执行修改
    public function edit(AdminCouponInsert $request,$id)
    {
        //
         $request->except('_token');  
        $data=$request->input();
        unset($data['_token']);

        // dd($data);
        if (DB::table('coupon')->where('id','=',$id)->update($data)) {
            return redirect("/adminCoupon")->with('success','修改成功');
        }else{
            //失败
            return redirect("/adminCoupon/$id")->with('error','修改失败');
        }
       // echo $id;
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
