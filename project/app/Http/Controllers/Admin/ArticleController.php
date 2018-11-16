<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleInsert;
use DB;
class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $arr = array('草稿','发布');
        $data = DB::table('diy_article')->get();
        return view('Admin.Admin.Article.index',['data'=>$data,'arr'=>$arr]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Admin.Admin.Article.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleInsert $request)
    {
        // //判断是否有上传文件
        if(!$request->hasFile('file')){
            return redirect('/adminarticle/create')->with('error','没有上传图片');
        }
        // //随机命名
        // $name=time()+rand(1,10000);
        // var_dump($name);  
        // //获取上传图片信息
        // $file=$request->file("file");
        // var_dump($file);
        // //遍历
        // foreach($file as $key=>$value){

        //     echo $key.'<br>'.$value;exit;
        //     //获取文件后缀
        //     $ext=$value->getClientOriginalExtension();
        //     //上传文件
        //     $value->move("./uploads",$name.$key.".".$ext);
        // }
        //获取除了token和图片的表单信息
        $path=myupload('file','./uploads/article',$request);
        $data = $request->except(['_token','file']);
        //给文章的更新时间和创建时间设置值
        $data['update_time'] = $data['add_time'] = time();
        //数据库插入操作
        foreach($path as $key=>$value){
            $data['path']=substr($value,1);
            if(DB::table('diy_article')->insert($data)){
                return redirect('/adminArticle')->with('success','添加文章成功');
            }else{
                return back()->with('error','添加文章失败,请重新填写');
            }
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
        $data = DB::table('diy_article')->where('id','=',$id)->first();
        return view('Admin.Admin.Article.show',['data'=>$data]);
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
        $data = DB::table('diy_article')->where('id','=',$id)->first();
        return view('Admin.Admin.Article.edit',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ArticleInsert $request, $id)
    {
        //如果没有文件上传
        if(!$request->hasFile('file')){
            $data = $request->except(['_method','_token']);
            if(DB::table('diy_article')->where('id','=',$id)->update($data)){    
                    return redirect('/adminArticle')->with('success','编辑文章成功');
                }else{
                    return back()->with('error','编辑文章失败');
                }
        }
        //获取上传文件
        $path=myupload("file","./uploads/article",$request);
        //获取已有数据找到图片地址
        $da=DB::table('diy_article')->where('id','=',$id)->first();
        //把旧图片删除
        unlink(".".$da->path);
        $data = $request->except(['_method','_token','file']);
            foreach($path as $key=>$value){
                //获得上传图片的后缀以及去点
                $data['path']=substr($value,1);   
                //把新数据重新插入数据库
                if(DB::table('diy_article')->where('id','=',$id)->update($data)){    
                    return redirect('/adminArticle')->with('success','编辑文章成功');
                }else{
                    return back()->with('error','编辑文章失败');
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

    public function del(Request $request)
    {
        $id = $request->input('id');
        $data=DB::table('diy_article')->where('id','=',$id)->first();
        if(DB::table('diy_article')->where('id','=',$id)->delete()){  
            unlink('.'.$data->path);
            return response()->json(['result'=>'1','msg'=>'删除成功']);
        }else{
            return response()->json(['result'=>'0','msg'=>'删除失败']);
        }
    }
}
