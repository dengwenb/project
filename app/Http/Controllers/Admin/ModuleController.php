<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class ModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $display = array('1','0');
        $arr = array('禁用','启用');
        $data = DB::table('diy_module')->get();
        return view('Admin.Admin.Module.index',['data'=>$data,'arr'=>$arr,'display'=>$display]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //得到所有模块信息
        $data = DB::table('diy_module')->where('pid','=','0')->get();
        return view('Admin.Admin.Module.add',['data'=>$data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //获取除了token的所有参数
        $data = $request->except('_token');
        //设置添加时间和修改时间
        $data['add_time'] = $data['update_time'] = time();
        //插入数据并返回id值
        $id = DB::table('diy_module')->insertGetId($data);
        //判断用户选择的是父级 还是子级
        if($_POST['pid']==0){
            $newdata ['path'] = '0,'.$id;
        }else{
            $newdata ['path'] = '0,'.$_POST['pid'].','.$id;
        }
        //插入path字段
        if(DB::table('diy_module')->where('id','=',$id)->update($newdata)){
            return redirect('/adminModule')->with('success','添加模块成功');
        }else{
            //插入失败把之前的数据删除
            DB::table('diy_module')->where('id','=',$id)->delete();
            return back()->with('error','添加失败，请重新填写提交');
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
        $data = DB::table('diy_module')->where('id','=',$id)->first();
        $select = array('','');
        $select[$data->status] = 'selected';
        return view('Admin.Admin.Module.edit',['data'=>$data,'select'=>$select]);
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
        if(DB::table('diy_module')->where('id','=',$id)->delete()){
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
        if(DB::table('diy_module')->whereIn('id',$id)->delete()){
            return response()->json(['result'=>'1','msg'=>'删除成功']);
        }else{
            return response()->json(['result'=>'0','msg'=>'删除失败!']);
        }     
    }

    //修改状态
    public function myedit(Request $request)
    {
        //获取对应的id值
        $id = $request->input('id');
        //获取要修改的状态
        $data['status'] = $request->input('display');
        //更新
        if(DB::table('diy_module')->where('id','=',$id)->update($data)){
            //将状态修改为显示，并返回json信息
            if($data['status']==1){
                 return response()->json(['result'=>1,'msg'=>'启用','display'=>0]);
             }else{
            //将状态修改为隐藏，并返回json信息
                 return response()->json(['result'=>1,'msg'=>'禁用','display'=>1]);
             }
        }else{
            //删除失败，返回json信息
            return response()->json(['result'=>0,'msg'=>'操作过于频繁，请不要多次操作']);
        }
    }

}
