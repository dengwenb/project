<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Hash;

class AdminloginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //后台用户退出时销毁session
        $request->session()->pull('username');
        return redirect("/adminlogin/create");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //加载登录模板
        return view("Admin.Adminlogin.login");
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
         // dd($request->all());
         // 获取登录的用户名和密码
        $name=$request->input("username");
        $password=$request->input("password");
        // dd($password);
        // 和数据库对比 检测用户名
        $info=DB::table("admin")->where("username",'=',$name)->first();
         // dd($info);
        if($info){
            // echo 'ok';
            // 用hash数据值检测密码
            if(Hash::check($password,$info->password)){
                //把登录信息存在session
                session(['username'=>$name]);
                //获取登录后台用户的权限
                $sql="select n.name,n.aname,n.mname from admin,role_node as rn,node as n where admin.roleid=rn.rid and rn.nid=n.id and rn.aid={$info->id}";
                $list=DB::select(DB::raw($sql));
                    // dd($list);
                   // 新建一个二维数组存储 
                   //让所有管理员都具有访问后台首页权限
                 $nodelist['AdminController'][]="index";
                 foreach($list as $key=>$value){
                    //把登录用户的所有权限写入$nodelist 数组里
                    $nodelist[$value->mname][]=$value->aname;

                    //如果权限列表有create  添加store
                    if($value->aname=="create"){
                        $nodelist[$value->mname][]="store";
                    }
                    //如果权限列表有edit  添加update
                    if($value->aname=="edit"){
                        $nodelist[$value->mname][]="update";
                    }
                 }
                 // echo "<pre>";
                 // var_dump($nodelist);exit;
                 // 3.把所有权限信息 存储在session里
                 session(['nodelist'=>$nodelist]);
                 //   $captcha['url'] = captcha_src();
                 // return $this->responseData($captcha);
                 $this->validate($request, [
                    'captcha' => 'required|captcha',
                    ],[
                     'captcha.captcha' => '验证码错误',
                    ]);
                return redirect("/admin")->with('success','登录成功');
            }else{
                return back()->with('error','密码有误');
            }
        }else{
            return back()->with('error','用户名或密码有误');
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
