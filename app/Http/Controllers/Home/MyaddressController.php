<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class MyaddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // echo '223';
        $userid=$request->input('id');
        $data=DB::table('diy_address')->where('userid','=',$userid)->get();
         $num=DB::table('diy_address')->where('userid','=',$userid)->count();
        // dd($data);
        return view('Home.UserInfo.myaddress',['data'=>$data,'num'=>$num]);
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
        $data=$request->except(['_token']);
        // dd($data);
        $data['checked']='2';
        $id=session('id');
        $num=DB::table('diy_address')->where('userid','=',$id)->count();
        if($num<10){
            $info=DB::table('diy_address')->insert($data);
            if($info){
                return redirect('/myaddress?id='.session('id').'')->with('success','添加成功');
            }else{
                return redirect('/myaddress?id='.session('id').'')->with('error','添加失败');
            }
        }else{
            return redirect('/myaddress?id='.session('id').'')->with('error','添加失败，地址上限');
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
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=DB::table('diy_address')->where('id','=',$id)->first();
        return view('Home.UserInfo.myaddressedit',['data'=>$data]);
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
        // dd($request->all());
        $data=$request->except(['_token','_method']);
        $info=DB::table('diy_address')->where('id','=',$id)->update($data);
        if($info){
            return redirect('/myaddress?id='.session('id').'')->with('success','修改成功');
        }else{
            return redirect('/myaddress?id='.session('id').'')->with('error','修改失败');
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
    //删除
    public function del(Request $request){
        $id=$request->input('id');
        // dd($id);
        $data=DB::table('diy_address')->where('id','=',$id)->delete();
        if($data){
            echo 1;
        }else{
            echo 2;
        }

    }




    //默认地址
    public function moren(Request $request){
        $id=$request->input('id');
        $check['checked']='2';
        $chec['checked']='1';
        $data=DB::table('diy_address')->where('userid',session('id'))->select('id')->get();
        $res=json_decode(json_encode($data),true);
        foreach($res as $key=>$val){
           foreach($val as $k=>$v){
            $arr[]=$v;
           }
        }
        $arr=array_flip($arr);
        unset($arr[$id]);
        // dd($arr);
        $arr=array_flip($arr);
        // dd($arr);
        $info=DB::table('diy_address')->whereIn('id',$arr)->update($check);
        $into=DB::table('diy_address')->whereNotIn('id',$arr)->update($chec);
        if($info && $into){ 
            echo 1;
        }else{
            echo 2;
        }

    }
}
