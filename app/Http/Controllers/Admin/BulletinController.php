<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class BulletinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $display = array('1','0');
        $dis = array('','','','');
        $priority = array('普通','一般','紧急','十分紧急');
        $arr = array('草稿','发布');
        $data = DB::table('diy_bulletin')->get();
        return view('Admin.Admin.Bulletin.index',['data'=>$data,'arr'=>$arr,'priority'=>$priority,'dis'=>$dis,'display'=>$display]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Admin.Bulletin.add');
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
        $data['add_time']=$data['update_time']=time();
        if(DB::table('diy_bulletin')->insert($data)){
                return redirect('/adminBulletin')->with('success','添加公告成功');
        }else{
                return back()->with('error','添加公告失败,请重新填写');
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
        $data = DB::table('diy_bulletin')->where('id','=',$id)->first();
        return view('Admin.Admin.Bulletin.edit',['data'=>$data]);
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
        if(DB::table('diy_bulletin')->where('id','=',$id)->delete()){
            return response()->json(['result'=>'1','msg'=>'删除成功!']);
        }else{
            return response()->json(['result'=>'0','msg'=>'删除失败!']);
        }
    }

    public function status(Request $request)
    {
        $id = $_GET['id'];
        $data['status'] = $request->input('display');
        if(DB::table('diy_bulletin')->where('id','=',$id)->update($data)){
            if($data['status']==1){
                 return response()->json(['result'=>'1','msg'=>'已显示','display'=>'0']);
             }else{
                 return response()->json(['result'=>'1','msg'=>'已隐藏','display'=>'1']);
             }
           
        }else{
            return response()->json(['result'=>'0','msg'=>'失败']);
        }
    }

    public function myedit(Request $request)
    {
        $id = $request->input('id');
        $aaa = $data['priority'] = $request->input('priority');
        $priority = array('普通','一般','紧急','非常紧急');
        if(DB::table('diy_bulletin')->where('id','=',$id)->update($data))
        {
            return response()->json(['result'=>'1','msg'=>'已将优先级改为'.$priority[$aaa].'成功','status'=>$aaa]);
        }else{
            return response()->json(['result'=>'0','msg'=>'修改优先级失败']);
        }
    }

    //批量删除
    public function delall(Request $request){
        //获取删除的id字符串
        $id = $request->input('id');
        //将字符串转换为数组
        $id = explode(',',$id);
        //判断是否删除成功
        if(DB::table('diy_bulletin')->whereIn('id',$id)->delete()){
            return response()->json(['result'=>'1','msg'=>'删除成功']);
        }else{
            return response()->json(['result'=>'0','msg'=>'删除失败!']);
        }     
    }
}
