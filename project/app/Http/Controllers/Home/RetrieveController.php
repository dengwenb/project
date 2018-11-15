<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Hash;
//引入邮箱类
use Mail;
class RetrieveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    // 邮箱
    public function send(){
        //邮件消息生成器
        Mail::raw('this is test hello world',function($message){
            //发送主题
            $message->subject('邮箱测试');
            //接收方
            $message->to('1027227555@qq.com');
        });
    }
    // 发送纯文本    
    public function sendMail($email,$id,$token){
        // 在闭包函数内部使用闭包函数外部的变量 必须 use 导入
        Mail::send('Home.Retrieve.email',['id'=>$id,'token'=>$token],function($message)use($email){
            //发送主题
            $message->subject('邮箱找回密码');
            // 接收方
            $message->to($email);
        });
        return true;
    }

    public function index()
    {
        return view("Home.Retrieve.phoneretrieve");
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
    //判断找回密码输入的手机号是否存在和输入的验证码是否正确
    public function phoneretrieveajax(Request $request){
        $phone=$request->input('phone');
        sendsphone($phone);
    }
    //引入页面
    public function phoneretrieves(Request $request){
        $phone=$request->input('phone');
        $yzm=$request->input('yzm');
        $data=DB::table('diy_users')->where('phone','=',$phone)->first();
        // dd($data);
        if($data){
            if($yzm==\Cookie::get('code')){
                return view('Home.Retrieve.phoneretrieves',['data'=>$data]);
            }elseif(empty(\Cookie::get('code'))){  
                return back()->with('kong','验证码不能为空');
            }else{
                return back()->with('error','验证码错误');
            }
        }else{
            return back()->with('phone','该手机号还未注册');
        }
    }
    //处理短信找回密码
    public function dophoneretrieves(Request $request){
        $data=$request->except(['_token','passwords','id','token']);
        $data['_token']=$request->input('token');
        $id=$request->input('id');
        $data['password']=Hash::make($data['password']);
        $res=DB::table('diy_users')->where('id','=',$id)->first();
        if($data['_token']==$res->_token){
            $data['_token']=rand(1,10000);
            $info=DB::table('diy_users')->where('id','=',$id)->update($data);
            if($info){
                echo '密码修改成功';
            }
        }else{
            return back()->with('token','修改失败，页面信息有误');
        }
    }

    //邮箱找回密码
    public function emailretrieve(){
        return view('Home.Retrieve.emailretrieve');
    }
    //判断输入的邮箱地址
    public function emailretrieves(Request $request){
        // dd($request->all());
        $email=$request->input('email');
        $yanzhengma=$request->input('yanzhengma');
        $data=DB::table('diy_users')->where('email','=',$email)->first();
        if($data){
            if($yanzhengma==session('vcode')){
                $res=$this->sendMail($email,$data->id,$data->_token);
                if($res){
                    echo '已发送邮箱';
                }else{
                    echo 'error';
                }
            }else{
                return back()->with('error','验证码错误');
            }
        }else{
            return back()->with('error','该邮箱还未注册');
        }
    }
    //密码重置页面
    public function emailpass(Request $request){
        $id=$request->input('id');
        $data=DB::table('diy_users')->where('id','=',$id)->first();
        return view('Home.Retrieve.doemailpass',['data'=>$data]);
    }
    public function doemailpass(Request $request){
        $data['password']=$request->input('password');
        $id=$request->input('id');
        $data['_token']=rand(1,10000);
        $info=DB::table('diy_users')->where('id','=',$id)->update($data);
        if($info){
            return redirect('/homelogin')->with('success','重置成功');
        }else{
            return redirect('/emilretrieve')->with('error','找回密码失败');
        }
    }
}
