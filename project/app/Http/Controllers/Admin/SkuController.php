<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class SkuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function getcates()
    {
        //连贯方法结合原始表达式 防止sql语句注入
        $cate=DB::table("cates")->select(DB::raw('*,concat(path,",",id) as paths'))->orderBy('paths')->get();
        //遍历
        foreach($cate as $key=>$value){
            //转换为数组
            $arr=explode(",",$value->path);
            //获取逗号个数
            $len=count($arr)-1;
            //字符串重复函数
            $cate[$key]->name=str_repeat("--|",$len).$value->name;
        }
        return $cate;
    }

    public function index()
    {
        $data = DB::table('diy_sku')->get();
        return view('Admin.Admin.Sku.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $cate = DB::table('cates')->where('pid','=','0')->get();
        $data = DB::table('diy_shop')->get();
        return view('Admin.Admin.Sku.add',['data'=>$data,'cate'=>$cate]);
    }

    public function change(Request $request)
    {
        $id = $request->input('id');
        $data = DB::table('cates')->where('pid','=',$id)->get();
        return response()->json($data);
    }

    public function shop(Request $request)
    {
        $id = $request->input('id');
        $data = DB::table('diy_shop')->where('cate_id','=',$id)->get();
        return response()->json(['msg'=>$data]);
    }

     public function ship(Request $request)
    {
        $id = $request->input('id');
         $data = DB::table('diy_shoprelation')->select(DB::raw('diy_shoprelation.*,diy_attributes.name as aname,diy_shop_value.name as vname'))->where('sid','=',$id)->join('diy_attributes','diy_attributes.id','=','diy_shoprelation.attid')->join('diy_shop_value','diy_shop_value.id','=','diy_shoprelation.vid')->get();
        return response()->json(['msg'=>$data]);
    }

    public function order(Request $request)
    {
        $id = $request->input('upid');
        $data = DB::table('cates')->where('pid','=',$id)->get();
        return response()->json($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->except('_token');
        dd($data);
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
}
