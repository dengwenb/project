<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Hash;
// 引入图片验证码类
use Gregwar\Captcha\CaptchaBuilder;
// 引入邮箱类
use Mail;
class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // 图片验证码
    public function captcha() 
    { 
    // ob_clean();//清除操作
    $builder = new CaptchaBuilder;
    //可以设置图片宽高及字体
    $builder->build($width = 90, $height = 40, $font = null);
    //获取验证码的内容
    $phrase = $builder->getPhrase();
    //把内容存入session
    session(['vcode'=>$phrase]);
    //生成图片
    header("Cache-Control: no-cache, must-revalidate");
    header('Content-Type: image/jpeg');
    $builder->output();
  
    }

    // 邮箱
    public function send(){
        //邮件消息生成器
        Mail::raw('this is test  hello world', function ($message) {
        //发送主题
        $message->subject('o2o27');
        //接收方
        $message->to("1027227555@qq.com");
        });
    }
    //发送纯文本 视图和数据 $email 接收方 $id注册用户id $token 校验参数
        public function sendMail($email,$id,$token)
        {
        //在闭包函数内部使用闭包函数外部的变量 必须use 导入
        Mail::send('Home.Registr.jihuo',['id'=>$id,'token'=>$token],
        function($message)use($email){
        //发送主题
        $message->subject('邮箱用户激活');
        //接收方
        $message->to($email);
        });
        return true;
        }
    public function index()
    {
        return view('Home.Registr.registr');
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
  
        // echo '21312';       passwords
        $data=$request->only(['phone']);
        $data['password']=Hash::make($request->input('passwords'));
        $data['username']='用户'.rand(1,100000);
        $data['add_time']=date('Y-m-d h:i:s');
        $data['status']=2;
        $data['rolename']='普通用户';
        $data['_token']=rand(1,10000);
        // dd($data);
        $info=DB::table('diy_users')->insert($data);
        if($info){
            echo '注册成功';
        }else{
            echo '注册失败';
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
    //判断手机号是否被注册
    public function homeloginphone(Request $request){
        $phone=$request->input('phone');
        $data=DB::table('diy_users')->where('phone','=',$phone)->first();
        if($data){
            echo 1;
        }else{
            echo 2;
        }
    }
    //获取验证码
    public function homephone(Request $request){
         // echo 'dfsdf';
        $phones=$request->input('phones');
        // echo $phones;
        sendsphone($phones);
    }
    //验证码码对比
    public function homecode(Request $request){
        $code=$request->input('code');
        if(\Cookie::get('code')!=null){
            if(\Cookie::get('code')==$code){
                echo 1;//一致
            }else{
                echo 2;//不一致
            }
        }elseif(empty($code)){
            echo 3;//校验码不能为空
        }else{
            echo 4;//校验码过期
        }
    }
    //邮箱注册界面
    public function homeemail(Request $request){
        return view('Home.Registr.registremail');
    }
    //判断邮箱是否被注册
    public function dohomeemailajax(Request $request){
        $email=$request->input('email');
        $data=DB::table('diy_users')->where('email','=',$email)->first();
        if($data){
            echo 1;
        }else{
            echo 2;
        }
    }
    //判断输入的图片验证码
    public function yanzhengma(Request $request){
        $yzm=$request->input('yzm');
        // var_dump(session('vcode'));
        $vcode=session('vcode');
        if($yzm==$vcode){
            echo 1;//一致
        }elseif(empty($yzm)){
            echo 2;//不能为空
        }else{
            echo 3;//验证码错误
        }
    }
    public function dohomeemail(Request $request){
        $data=$request->except(['_token','yanzhenma']);
        // var_dump($data);
        $data['password']=Hash::make($data['password']);
        $data['_token']=rand(1,10000);
        $data['username']='普通用户'.rand(1,10000);
        $data['status']=1;
        $data['rolename']='普通用户';   
        $data['add_time']=date('Y-m-d h:i:s');
         // dd($data);
        $id=DB::table('diy_users')->insertGetId($data);
        if($id){
            //发送邮件激活用户  把status值变为2
            // 调用发送邮件方法
            $res=$this->sendMail($data['email'],$id,$data['_token']);
            if($res){
                echo '快去邮箱登录激活';
            }else{
                echo '邮箱发送失败';
            }
      
        }else{
            echo '注册失败';
        }
    }
    // 邮箱激活
    public function jihuo(Request $request){
        $id=$request->input('id');
        $data=DB::table('diy_users')->where('id','=',$id)->first();
        //获取token
        
        $token=$request->input('token');
        // echo $token;
        // dd($token);
        //判断
        if($token==$data->_token){
            //封装需要的数据
            $info['_token']=rand(1,10000);
            $info['status']=2;
            if(DB::table('diy_users')->where('id','=',$id)->update($info)){
                echo '用户已经激活';
            }else{
                echo '激活失败';
            }
        }
    }
}
