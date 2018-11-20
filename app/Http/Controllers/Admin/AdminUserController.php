<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Hash;

class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        // echo 'admin';
        $sql="SELECT a.id,username,password,name FROM admin as a,diy_role as r WHERE a.roleid=r.id";
        $data=DB::select($sql);
        return view('Admin.Admin.User.user',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("Admin.Admin.User.add");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $data=$request->except('_token');
        $data['password']=Hash::make($data['password']);
        // dd($data);
        if(DB::table('admin')->insert($data)){
            return redirect('/adminAdminUser')->with('success','添加成功');
        }else{
            return back()->with('error','添加失败');
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
        // dd($id);
        $sql="SELECT a.id,username,password,name,roleid FROM admin as a,diy_role as r WHERE a.roleid=r.id AND a.id={$id}";
        $info=DB::select($sql);
        // dd($info);
        return view('Admin.Admin.User.edit',['info'=>$info]);
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
        // echo $id;
        // dd($_POST);
        $data=$request->except(['_token','_method']);
        if(DB::table('admin')->where("id","=",$id)->update($data)){
            return redirect("/adminAdminUser")->with('success',"修改成功");
        }else{
            return back()->with('error',"修改失败");
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
        //
    }
    //重置密码
    public function res(Request $request)
    {
        //获取ID
        $id=$request->input('id');
          // echo $id;
          // 定义密码
         $data= '123456';
         //hash加密密码
         $data=Hash::make($data);
         // $data['password']=Hash::make($data['password']);
        // $sql="update admin set password={$password} where id={$id}";
        if(DB::table("admin")->where("id","=",$id)->update(['password'=>$data])){
            return response()->json(['msg'=>1]);
        }else{
            return response()->json(['msg'=>0]);
        }

    }
    //删除操作
    public function del(Request $request)
    {
        //获取ID
        $id=$request->input("id");
        if(DB::table('admin')->where("id","=",$id)->delete()){
            return response()->json(['msg'=>1]);
        }else{
            return response()->json(['msg'=>0]);
        }
    }
}
