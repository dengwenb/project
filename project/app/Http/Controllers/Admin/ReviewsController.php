<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class ReviewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        $k=$request->input('keyword');
        $data=DB::table('order_comment')
        ->where('id','like','%'.$k.'%')->paginate(5);
        // var_dump($request->());
        return view('Admin.Admin.reviews',['data'=>$data]);
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
            // 显示订单评论
        // echo $id;
        $data=DB::table('order_comment')->where('goods_id','=',$id)->first();
        
        if($data==null){
             return redirect('adminorder')->with('success','暂无评论');
        }else{
             return view('Admin.Admin.reviewss',['data'=>$data]);
        }
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
        // dd($id);
        $data=DB::table('order_comment')->where('id','=',$id)->delete();
        if($data){
            return redirect('/adminreviews')->with('success','删除成功');
        }else{
            return redirect('/adminreviews')->with('error','删除失败');
        }
    }
    //评论删除
    public function reviewsajax(Request $request){
        $id=$request->input('id');
        // echo $id;
        if(DB::table('order_comment')->where('id','=',$id)->delete()){
            // echo '1';
            return response()->json(['msg'=>1]);
        }else{
            return response()->json(['msg'=>2]);
            // echo '2';
        }
    }
}
