<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Hash;
// 引入图片验证码类
use Gregwar\Captcha\CaptchaBuilder;
class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    


    public function index(Request $request)
    {
        $request->session()->pull('username');
        return view('Home.Login.homelogin');
    }


  
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // echo 'ddd';
        $username=$request->input('username');
        $password=$request->input('password');
        if(!empty($username)){
            if(!empty($password)){
                $data=DB::table('diy_users')->where('username','=',$username)->first();
                if($data){
                    if(Hash::check($password,$data->password)){
                            if($data->status==2){
                                session(['username'=>$data->username]);
                                session(['id'=>$data->id]);
                                return redirect('/');
                            }else{
                                return back()->with('user','用户未激活');
                            }
                    }else{
                         return back()->with('pass','密码错误');
                    }
                }else{
                    return back()->with('user','用户名不存在');
                }
            }else{
                return back()->with('pass','密码不能为空');
            }
        }else{
            return back()->with('user','用户名不能为空');
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
    //手机短信登录
    public function dophonelogin(Request $request)
    {
        $phone=$request->input('phonelogin');
        $data=DB::table('diy_users')->where('phone','=',$phone)->first();
        if($data){

            if($data->status==2){
               	session(['username'=>$data->username]);
                session(['id'=>$data->id]);
               return redirect('/');
            }else{
                return back()->with('error','账户未激活');
            }
        }else{
            return back()->with('error','手机号还未注册');
        }
    }
    //登录短信ajax
    public function phoneloginajax(Request $request)
    {
        $phone=$request->input('phone');
        sendsphone($phone);
    }
    //验证码对比
    public function phoneloginajaxyzm(Request $request)
    {
        $code=$request->input('code');
        if(\Cookie::get('code')!==null){
            if(\Cookie::get('code')==$code){
                echo 1;//一致
            }else{
                echo 2;//不一致
            }
        }elseif(empty($code)){
            echo 3;//验证码不能为空
        }else{
            echo 4;//校验码过期
        }
    }
    //邮箱登录
    public function doemaillogin(Request $request)
    {
        $password=$request->input('password');
        $email=$request->input('email');
        $yanzhengma=$request->input('yanzhengma');
        $vcode=session('vcode');
        if($vcode==$yanzhengma){
            $data=DB::table('diy_users')->where('email','=',$email)->first();
            if($data){
                if(Hash::check($password,$data->password)){
                    if($data->status==2){

                        session(['username'=>$data->username]);
                         session(['id'=>$data->id]);
                        return redirect('/');

                        echo '登录成功';

                    }else{
                        return back()->with('youxiang','改账号还未激活');
                    }
                }else{
                return back()->with('pass','密码错误');
                }
            }else{
                return back()->with('youxiang','该邮箱还未注册');
            }
        }else{
            return back()->with('yzm','验证码错误');
        }
    }
}
