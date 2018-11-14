<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
//导入校验类
use App\Http\Requests\AdminLogInsert;
class LogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //获取数据
        $data=DB::table('logistics')->select()->get();
        // dd($data);
        $state=[];
        foreach ($data as $key => $value) {
            if ($value->state==0) {
                $state[$key]="隐藏";
            }else{
                $state[$key]="显示";
            }
        }
        // dd($state);
        return view("Admin.Log.index",['data'=>$data,'state'=>$state]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("Admin.Log.add");
    }

    /**
     * Store a newly created resource in storage.
          * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //添加物流
    public function store(AdminLogInsert $request)
    {
        
        if (!$request->hasFile('log')) {
            return back()->with('error','请上传图片');
        }
        $data=$request->except('_token');
        // $log=$request->file('log');
        // dd($log);
        $name=time()+rand(1,10000);//获取文件名
        $ext=$request->file('log')->getClientOriginalExtension();//得到后缀名
       $bool=$request->file("log")->move("./uploads",$name.".".$ext);
       $data['log']="/uploads/".$name.".".$ext;
        // dd($data);
        if (!$bool) {
            return back()->with('error','图片上传失败');
        }else{
            if (DB::table('logistics')->insert($data)) {
               return back()->with('success','数据添加成功');
             
            }else{
                return back()->with('error','数据插入失败');
            }
            
        }

        // dd($ext);

    }
    //删除
    public function del(Request $request)
    {
        $id=$request->input('id');
        $path=DB::table('logistics')->where('id','=',$id)->select('log')->get();

        if (DB::table('logistics')->where('id','=',$id)->delete()) {
            //删除图片
            $res = unlink('.'.$path[0]->log);
            return response()->json(['msg'=>1]);
        }else{
            return response()->json(['msg'=>0]);
        }
    }
    //显示隐藏操作
    public function stop(Request $request)
    {
        // dd($request->input('id'));
        $id=$request->input('id');
        $state=DB::table("logistics")->where('id','=',$id)->select('state')->get();
         // //跟换状态
          if ($state[0]->state==0) {
              $data['state']=1;
          }else{
             $data['state']=0;
          }
          if (DB::table('logistics')->where('id','=',$id)->update($data)) {
               //操作成功
                return response()->json(['msg'=>1,'state'=>$data['state']]);
          }else{
             //操作失败
            return response()->json(['msg'=>0]);

          }
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //编辑
    public function show($id)
    {
        //
        // echo "string";
        $id=$id;
        $data=DB::table('logistics')->where('id','=',$id)->get();
        // dd($data[0]->log);
        return view("Admin.Log.edit",['data'=>$data,'id'=>$id]);
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
    //执行修改
    public function update(AdminLogInsert $request, $id)
    {
        $data=$request->except('_token');
        unset($data['_method']);
        $id=$id;
          // dd($data);
          //判断是否修改图片
          if (!$request->hasFile('log')) {
              //没有修改图片 直接更新
              if (DB::table('logistics')->where('id','=',$id)->update($data)) {
               return back()->with('success','数据更新成功');
             
            }else{
                return back()->with('error','数据更新失败');
            }
          }else{
            //更新图片
            $name=time()+rand(1,10000);//获取新文件名
            $ext=$request->file('log')->getClientOriginalExtension();//得到文件后缀
            $bool=$request->file("log")->move("./uploads",$name.".".$ext);//执行添加
            $data['log']="/uploads/".$name.".".$ext;//获取路径
            if ($bool) {
                //新图片插入成功 先删除源图片
                //获取原路径
                $path=DB::table('logistics')->where('id','=',$id)->select('log')->get();
                // dd($path[0]->log);
               $res = unlink('.'.$path[0]->log);

               if (!$res) {
                   //删除失败
                   unlink('.'.$data['log']);
                return back()->with('error','数据更新失败');

               }else{
                //更新成功
                //将数据写入数据库
               if (DB::table('logistics')->where('id','=',$id)->update($data)) {
                   return back()->with('success','数据更新成功');
                } else{
                    //更新失败
                return back()->with('error','数据更新失败');
                }
                

               }
            }else{
                //更新失败
                return back()->with('error','数据更新失败');

            }
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
}
