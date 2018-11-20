<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Http\Requests\LinkInsert;
class LinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //链接列表页
    public function index(Request $request)
    {
        $data = DB::table('diy_link')->get();
        $arr = array('隐藏','显示');
        $display = array(0=>1,1=>0);
        return view('Admin.Admin.Link.index',['data'=>$data,'arr'=>$arr,'display'=>$display]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    //添加链接页面
    public function create()
    {
        return view('Admin.Admin.Link.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //插入链接数据
    public function store(LinkInsert $request)
    {
        $data = $request->except('_token');
        if(DB::table('diy_link')->insert($data)){
            return redirect('/adminLink')->with('success','添加链接成功');
        }else{
            return back()->with('error','添加链接失败,请重新输入');
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
        $data = DB::table('diy_link')->where('id','=',$id)->first();
        return view('Admin.Admin.Link.edit',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(LinkInsert $request, $id)
    {
        //
        $data = $request->except(['_token','_method']);
        if(DB::table('diy_link')->where('id','=',$id)->update($data)){
            return redirect('/adminLink')->with('success','修改链接信息成功');
        }else{
            return back()->with('error','修改链接信息失败');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //删除
        dd($_POST);
    }

    public function del(Request $request)
    {
        $id = $request->input('id');
        if(DB::table('diy_link')->where('id','=',$id)->delete()){
            return response()->json(['result'=>'1','msg'=>'删除成功']);
        }else{
            return response()->json(['result'=>'0','msg'=>'删除失败']);
        }
    }

    public function delall(Request $request)
    {
        $id = $request->input('id');
        $id = explode(',',$id);
        if(DB::table('diy_link')->whereIn('id',$id)->delete()){
            return response()->json(['result'=>'1','msg'=>'删除成功']);
        }else{
            return response()->json(['result'=>'0','msg'=>'删除失败']);
        }
    }

    public function under(Request $request)
    {
        //获取链接的id值
        $id = $_GET['id'];
        //得到要修改的状态值
        $data['display']=$_GET['display'];
        //修改操作
        if(DB::table('diy_link')->where('id','=',$id)->update($data)){
            if($data['display']==1){
                return response()->json(['result'=>'1','msg'=>'显示','display'=>'0']);
            }else{
                return response()->json(['result'=>'1','msg'=>'隐藏','display'=>'1']);
            }    
        }else{
            return response()->json(['result'=>'0','msg'=>'操作失败']);
        }
    }
}
