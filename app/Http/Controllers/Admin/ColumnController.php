<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class ColumnController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //分配主页数据
        // $info=DB::select('SELECT *,concat(path,",",id) as paths FROM diy_column order by paths');
        $data=DB::table("diy_column")->select(DB::raw('*,concat(path,",",id) as paths'))->orderBy('paths')->get();
        // dd($info);
        

        foreach($data as $key=>$value){
            // echo $value->path;
            $arr=explode(",",$value->path);
            // echo "<pre>";
            // var_dump($arr);
            $len=count($arr)-1;
            // echo $len;
            $data[$key]->name=str_repeat("--|", $len).$value->name;
        }
        // dd($info);
        return view("Admin.Admin.Column.column",['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $info=DB::table("diy_column")->get();
        $info=DB::table("diy_column")->select(DB::raw('*,concat(path,",",id) as paths'))->orderBy('paths')->get();
        // dd($info);
        

        foreach($info as $key=>$value){
            // echo $value->path;
            $arr=explode(",",$value->path);
            // echo "<pre>";
            // var_dump($arr);
            $len=count($arr)-1;
            // echo $len;
            $info[$key]->name=str_repeat("--|", $len).$value->name;
        }
        return view("Admin.Admin.Column.add",['info'=>$info]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //栏目分类
    public function store(Request $request)
    {
        //获取传递过来的数据
        $data=$request->except(['_token']);
        $pid=$request->input('pid');
        if($pid==0){
            $data['path']='0';
        }else{
            $info=DB::table("diy_column")->where("id","=",$pid)->first();
            $data['path']=$info->path.",".$info->id;
        }

        if(DB::table("diy_column")->insert($data)){
            return redirect("/adminColumn")->with("success","添加成功");
        }else{
            return back()->with("error","添加失败");
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
    //栏目等级前缀
    public function edit($id)
    {
        $info=DB::table("diy_column")->select(DB::raw('*,concat(path,",",id) as paths'))->orderBy('paths')->get();
        // dd($info);
        

        foreach($info as $key=>$value){
            // echo $value->path;
            $arr=explode(",",$value->path);
            // echo "<pre>";
            // var_dump($arr);
            $len=count($arr)-1;
            // echo $len;
            $info[$key]->name=str_repeat("--|", $len).$value->name;
        }
        $infos=DB::table("diy_column")->where("id","=",$id)->first();

        return view("Admin.Admin.Column.edit",['info'=>$info,'infos'=>$infos]);
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
        // $id=$request->input("id");
        // dd($id);
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
    //删除
    public function del(Request $request)
    {
         $id=$request->input("id");
         // return $id;
        if(DB::table("diy_column")->where("id","=",$id)->delete()){
             return response()->json(['msg'=>1]);
        }else{
            return response()->json(['msg'=>0]);
        }
    }
}
