<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=DB::table("diy_article")->get();
         return view("Home.Blog.list",['data'=>$data]);
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

    public function blogpost($id)
    {
        $data=DB::table("diy_article")->where("id",$id)->first();
        $data1=DB::table("diy_article")->get();
        $data2=DB::table("diy_artmessage")->where("artid",$id)->get();
        $data3=DB::table("diy_artmessage")->where("artid",$id)->count();
        return view("Home.Blog.post",['data'=>$data,'data1'=>$data1,'data2'=>$data2,'data3'=>$data3]);
    }

    public function Message(Request $request,$id)
    {
        $data=$request->only('username','email','message');
        $data['add_time']=time();
        $data['artid']=$id;
        if(DB::table("diy_artmessage")->insert($data)){

            return redirect('/blogpost/{id}')->with('success',"发表成功");
        }else{
            return back()->with('error','发表失败');
        }
    }
}
