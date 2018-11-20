<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Config;
class InformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $id=session('id');
        $data=DB::table('diy_users')->join('diy_usersinfo','diy_users.id','=','diy_usersinfo.userid')->where('diy_users.id','=',$id)->first();
        if($data){
                //有信息就是编辑操作
                return view('Home.UserInfo.myinformation',['data'=>$data]);
            }else{
                // 没有个人信息就添加
                return view('Home.UserInfo.myinformation',['data'=>$data]);
            } 
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
        $userid=$_POST['userid'];
        // dd($userid);
        if($userid==" "){
         // 用户添加操作
          
                 // 检测是否有文件上传
                if($request->hasFile('pic')){
                    //初始化名字
                    $name=time()+rand(1,10000);
                    //获取上传文件后缀
                    $ext=$request->file('pic')->getClientOriginalExtension();
                    // 移动到指定的目录下
                    $request->file('pic')->move(Config::get('app.uploads'),$name.".".$ext);
                    $data['pic']=trim(Config::get('app.uploads').'/'.$name.".".$ext);
                }
                // var_dump($request->all());
                $data['name']=$request->input('username');
                $data['address']=$request->input('city');
                $data['sex']=$request->input('sex');
                $data['userid']=$_POST['id'];
                $data['question_status']=1;
            
                $res=DB::table('diy_usersinfo')->insert($data);
                if($res){
                    return redirect('/myinformation')->with('success','添加成功');
                }else{
                    return redirect('/myinformation')->with('success','添加失败');
                }
        }else{
            // 修改操作
            if($request->hasFile('pic')){
                    // 删除原来的图片
                    $pic=DB::table('diy_usersinfo')->where('userid','=',$userid)->first();
                    unlink($pic->pic);
                    // dd($pic);
                // 修改图片
                 //初始化名字
                    $name=time()+rand(1,10000);
                    //获取上传文件后缀
                    $ext=$request->file('pic')->getClientOriginalExtension();
                    // 移动到指定的目录下
                    $request->file('pic')->move(Config::get('app.uploads'),$name.".".$ext);
                    $data['pic']=trim(Config::get('app.uploads').'/'.$name.".".$ext);

                    $data['name']=$request->input('username');
                    $data['address']=$request->input('city');
                    $data['sex']=$request->input('sex');
                    $data['userid']=$_POST['id'];
                    $data['question_status']=1;
                    $info['username']=$request->input('user');
                    $info['phone']=$request->input('phone');
                    $info['email']=$request->input('email');
                    // dd($data);
                    $num=DB::table('diy_users')->where('id','=',$userid)->update($info);
                    $res=DB::table('diy_usersinfo')->where('userid','=',$userid)->update($data);
                    if($res && $num){
                         return redirect('/myinformation')->with('success','修改成功');
                    }else{
                        return redirect('/myinformation')->with('success','修改失败');
                    }

            }else{
                // 不修改图片
                    
                    $data['name']=$request->input('username');
                    $data['address']=$request->input('city');
                    $data['sex']=$request->input('sex');
                    $data['userid']=$_POST['id'];
                    $data['question_status']=1;
                    // dd($data);
                    // if()
                    $info['username']=$request->input('user');
                    $info['phone']=$request->input('phone');
                    $info['email']=$request->input('email');
                    // dd($data);
                    $num=DB::table('diy_users')->where('id','=',$userid)->update($info);
                    $res=DB::table('diy_usersinfo')->where('userid','=',$userid)->update($data);
                    if($res ){
                        return redirect('/myinformation')->with('success','修改成功');
                    }else{ 
                        return redirect('/myinformation')->with('success','修改失败');
                    }
            }
        }
    }

   

    //居住地址选择
    public function infoaddress(Request $request){
        // echo '1';
        $upid=$request->input('upid');
        $data=DB::table('district')->where('upid','=',$upid)->get();
        return json_decode($data);
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
