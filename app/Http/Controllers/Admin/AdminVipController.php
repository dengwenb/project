<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Hash;
use App\Model\Adminvip;
use App\Model\Adminuserinfo;

class AdminVipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        //显示用户所有信息
        $sql="select * from diy_users,diy_usersinfo where diy_users.id=diy_usersinfo.userid";
        $data=DB::select(DB::raw($sql));
        //模块类绑定
        $user=Adminuserinfo::get();
        $infos = Adminvip::get();
        return view('Admin.Admin.Vip.vip',['data'=>$data,'infos'=>$infos,'user'=>$user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view("Admin.Admin.Vip.add");
        echo "暂无此功能";
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

        $user=DB::table("diy_users")->where("id","=",$id)->first();
        $info=DB::table("diy_usersinfo")->where("userid","=",$id)->first();
        return view("Admin.Admin.Vip.edit",['user'=>$user,'info'=>$info]);
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

        $data=$request->except(['_token','_method','email']);
        if(DB::table("diy_users")->where("id","=",$id)->update($data)){
            return redirect("/adminAdminVip")->with("succss","修改成功");
        }else{
            return back()->with("error","修改失败");
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
    //用户状态修改
    public function sta(Request $request)
    {   
        //获取传递过来的值
        $id=$request->input("id");
        $status=$request->input("status");
        $arr=[0=>'禁用',1=>'启用'];
        //函数 通过值获得键
        $status = array_search($status, $arr);
        // 所得键互换
        if($status=='1'){
            $status='0';
        }else{
            $status='1';
        }
        //修改数据库
        if(DB::table("diy_users")->where("id","=",$id)->update(["status"=>$status])){
            //把互换后的键通过数组得到值
             $status = $arr[$status];
             // $status = $status=='禁用' ? '启用' : '禁用';
             //返回json数组
            return response()->json(['msg'=>1,'status'=>$status]);
        }else{
            return response()->json(['msg'=>0]);
        }
    }
    //用户密保状态修改
    public function que(Request $request)
    {
        $id=$request->input("id");
        $questatus=$request->input("questatus");

        $status = $questatus == '禁用' ? 1 : 0;

        if(DB::table("diy_usersinfo")->where("userid","=",$id)->update(['questatus'=>$status])){

            $questatus = $questatus=='禁用' ? '启用' : '禁用';
            return response()->json(['msg'=>1,'questatus'=>$questatus]);
        }else{
            return response()->json(['msg'=>0]);
             }
    }
    //会员重置密码
    public function res(Request $request)
    {
        //获取id
        $id=$request->input("id");
        //默认密码123
        $data='123';
        //加密
        $data=Hash::make($data);
        //操作数据库
        if(DB::table("diy_users")->where("id","=",$id)->update(['password'=>$data])){
            return response()->json(['msg'=>1]);
        }else{
            return response()->json(['msg'=>0]);
        }
    }
    //密保遍历
    public function ques($id)
    {

        $data=DB::table("diy_question")->where("userid","=",$id)->get();
        return view("Admin.Admin.Vip.ques",['data'=>$data]);
    }

    public function address($id)
    {
        $data=DB::table("diy_address")->where("userid","=",$id)->get();
        return view("Admin.Admin.Vip.address",['data'=>$data]);
    }
}
