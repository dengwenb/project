<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Http\Requests\BroadcastInsert;
class BroadcastController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //设置状态数组
        $display = array(0=>1,1=>0);
        $arr = array('隐藏','显示');
        //获取轮播图的所有信息
        $data = DB::table('diy_cast')->get();
        //返回页面，分配数据
        return view('Admin.Admin.Broadcast.index',['data'=>$data,'arr'=>$arr,'display'=>$display]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //添加页面
        return view('Admin.Admin.Broadcast.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BroadcastInsert $request)
    {
        //判断是否上传了文件
        if(!$request->hasFile('file')){
            //返回添加页面并设置错误信息
            return back()->with('error','必须要上传图片');
        } 
        //获取除了token和图片信息的数据
        $data = $request->except(['_token','file']);
        //记录路径
        $data['path'] = myupload('file','./uploads/cast',$request)[0];
        //设置创建时间
        $data['add_time'] =time(); 
        if(DB::table('diy_cast')->insert($data)){
            return redirect('/adminBroadcast')->with('success','添加轮播图信息成功');
        }else{
            //删除刚刚上传的图片
            unlink($data['path']);
            return back()->with('error','添加轮播图信息失败');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //查看轮播图单挑信息
    public function show($id)
    {
        //查询数据库
        $data = DB::table('diy_cast')->where('id','=',$id)->first();
        //返回页面模板
        return view('Admin.Admin.Broadcast.show',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //获取单条数据
        $data = DB::table('diy_cast')->where('id','=',$id)->first();
        //返回修改页面
        return view('Admin.Admin.Broadcast.edit',['data'=>$data]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BroadcastInsert $request, $id)
    {
        $data = $request->except(['_method','_token','file']);
        //判断是否上传了文件
        if ($request->hasFile('file')){
            //如果上传了文件，则删除原来的文件
            //获取数据
            $row = DB::table('diy_cast')->where('id','=',$id)->first();
            //删除原来的文件
            if(file_exists($row->path)){
                unlink($row->path);
            }
            //获取新文件路径
            $data['path'] = myupload('file','./uploads/cast',$request)[0];
        }
        //没有上传文件继续执行 更新操作
        if (DB::table('diy_cast')->where('id','=',$id)->update($data)){
            return redirect('/adminBroadcast')->with('success','修改轮播图信息成功');
        }else{
            return back()->with('error','修改失败，请重新填写');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //删除操作
    public function destroy(Request $request, $id)
    {
        //拼接路径
        $path = '.'.$_POST['path'];
        //判断是否删除成功
        if(DB::table('diy_cast')->where('id','=',$id)->delete()){
                //判断文件是否存在
                if(file_exists($path)){
                //存在就删除
                 unlink($path);
             }
            return response()->json(['result'=>'1','msg'=>'删除成功!']);
        }else{
            return response()->json(['result'=>'0','msg'=>'删除失败!']);
        }
    }

    //批量删除
    public function delall(Request $request){
        //获取删除的id字符串
        $id = $request->input('id');
        //将字符串转换为数组
        $id = explode(',',$id);
        //判断是否删除成功
        if(DB::table('diy_cast')->whereIn('id',$id)->delete()){
            return response()->json(['result'=>'1','msg'=>'删除成功']);
        }else{
            return response()->json(['result'=>'0','msg'=>'删除失败!']);
        }     
    }

    //修改状态
    public function under(Request $request)
    {
        //获取对应的id值
        $id = $request->input('id');
        //获取要修改的状态
        $data['status'] = $request->input('display');
        //更新
        if(DB::table('diy_cast')->where('id','=',$id)->update($data)){
            //将状态修改为显示，并返回json信息
            if($data['status']==1){
                 return response()->json(['result'=>1,'msg'=>'显示','display'=>0]);
             }else{
            //将状态修改为隐藏，并返回json信息
                 return response()->json(['result'=>1,'msg'=>'隐藏','display'=>1]);
             }
        }else{
            //删除失败，返回json信息
            return response()->json(['result'=>0,'msg'=>'操作过于频繁，请不要多次操作']);
        }
    }
}
