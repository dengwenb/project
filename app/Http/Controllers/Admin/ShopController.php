<?php

namespace App\Http\Controllers\Admin;

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
        //
        //echo 'this is shop';
        $res=DB::table('shop')->select()->get();
       $cate=[];
        $state=[];
        foreach ($res as $key => $value) {
           $cate=DB::table('brand')->where('id','=',$value->pid)->select('name')->get();
             // dd($cate[$key]->name);
            if ($value->state==0) {
                $state[$key]= "已下架";
            }else{
                $state[$key]="正常";
            }
        }
    

       return view("Admin.Shop.index",['res'=>$res,'cate'=>$cate,'state'=>$state]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    //获取商品栏目
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
    //商品添加
    public function create()
    {
        //
        // echo "niglai";
        $data=self::getcates();
        
        return view("Admin.shop.add",['data'=>$data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //执行添加
    public function store(Request $request)
    {
        //
        // echo "this store";
         $data=[];
        $data['name']=$request->input('name');
        $data['pid']=$request->input('pid');
        $data['addtime']=$request->input('addtime');
        $data['state']=$request->input('state');
        // dd($data);
        // 不能为空
        if ($data['name']==null||$data['addtime']==null||
        $data['state']==null) {
            return redirect("/adminshop/create")->with('error','请输入正确信息。');
        }
        //插入数据
        if ($id=DB::table("shop")->insertGetId($data)) {

            return redirect("/adminshop/$id")->with('success','添加成功，请输入商品详情。');
        }else{
            return redirect("/adminshop/create")->with('error','添加失败');
        }
        // DB::enableQueryLog();
      
        // dd($request->input());
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
        // echo 'this is show';
        // $id
        return view("Admin.Shop.addinfo");
    }

  //查看详情
  //
   

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
