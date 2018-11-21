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
        // $sql="select * from diy_users,diy_usersinfo where diy_users.id=diy_usersinfo.userid";
        // $data=DB::select(DB::raw($sql));
        $data=DB::table('diy_users as u')->join('diy_usersinfo as ui','ui.userid','=','u.id')->select('u.id','u.username','u.password','u.phone','ui.address','u.email','u.rolename','u.status','ui.questatus','u.add_time')->get();
        // dd($data);
        return view('Admin.Admin.Vip.vip',['data'=>$data]);
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
        $id=$request->input('id');
        $status=$request->input('status');
        // 所得互换
     
        if($status== '1' ){
            $status = '0' ;
        }else{
            $status= '1' ;
        }
        $arr['status']=$status;
        $data=DB::table("diy_users")->where("id",'=',$id)->update($arr);
        $info=DB::table("diy_users")->where("id",'=',$id)->first();

        $num=$info->status;

        //修改数据库
        if($data){
             //返回json数组
            return response()->json(['msg'=>1,'num'=>$num]);
        }else{
            return response()->json(['msg'=>2,$status]);
        }
    }
    //用户密保状态修改
    public function que(Request $request)
    {
        $id=$request->input("id");
        $questatus=$request->input("questatus");
        // 所得互换
        if($questatus=='1'){
            $questatus='0';
        }else{
            $questatus='1';
        }

        if(DB::table("diy_usersinfo")->where("userid",$id)->update(['questatus'=>$questatus])){

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
