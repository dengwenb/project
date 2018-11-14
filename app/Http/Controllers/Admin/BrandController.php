<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
//加载校验类
use App\Http\Requests\AdminBrandInsert;
class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //获取数据
        $data=DB::table('brand')->join('cates','brand.cateid','=','cates.id')->select('brand.id as bid','cates.id as cid','brand.name as bname','cates.name as cname','brand.state','brand.describe','brand.log')->get();
       // dd($data);
        $state=[];
        foreach ($data as $key => $value) {
            if ($value->state==0) {
              $state[$key]="不显示";
            }else{
                $state[$key]="显示";
            }
        }
        return view("Admin.Brand.index",['data'=>$data,'state'=>$state]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    //调整类别顺序 添加分隔符
    public static function getcates(){
        $cate=DB::table("cates")->select(DB::raw('*,concat(path,",",id) as paths '))->orderBy('paths')->get();
        //遍历数据
        foreach ($cate as $key => $value) {
            //转换为数组
            $arr=explode(",",$value->path);
            $len=count($arr)-1;
            //重复字符串函数
            $cate[$key]->name=str_repeat("--|",$len).$value->name;
        }
        return $cate;
    }
    public function create()
    {
        //获取栏目数据
        $data=self::getcates();
        return view("Admin.Brand.add",['data'=>$data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //添加
    public function store(AdminBrandInsert $request)
    {
        //
         if (!$request->hasFile('log')) {
            return back()->with('error','请上传品牌log');
        }
        $data=$request->except('_token');
        $name=time()+rand(1,10000);//获取文件名
        $ext=$request->file('log')->getClientOriginalExtension();//得到后缀名
        $bool=$request->file("log")->move("./uploads",$name.".".$ext);
        $data['log']="/uploads/".$name.".".$ext;
        // dd($data);
        if (!$bool) {
            return back()->with('error','图片上传失败');
        }else{
            if (DB::table('brand')->insert($data)) {
               return back()->with('success','数据添加成功');
             
            }else{
                return back()->with('error','数据插入失败');
            }
            
        }
    }
 //删除
    public function del(Request $request)
    {
        $id=$request->input('bid');

        $path=DB::table('brand')->where('id','=',$id)->select('log')->get();

        if (DB::table('brand')->where('id','=',$id)->delete()) {
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
        $id=$request->input('bid');
        $state=DB::table("brand")->where('id','=',$id)->select('state')->get();
         // //跟换状态
          if ($state[0]->state==0) {
              $data['state']=1;
          }else{
             $data['state']=0;
          }
          if (DB::table('brand')->where('id','=',$id)->update($data)) {
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
    public function show($bid)
    {
        
        $id=$bid;
        $cate=self::getcates();
        $data=DB::table('brand')->where('id','=',$id)->first();        
        return view("Admin.Brand.edit",['data'=>$data,'id'=>$id,'cate'=>$cate]);
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
    //编辑
    public function update(AdminBrandInsert $request, $id)
    {
        //
       $data=$request->except('_token');
        unset($data['_method']);
        $id=$id;
          // dd($data);
          //判断是否修改图片
          if (!$request->hasFile('log')) {
              //没有修改图片 直接更新
              if (DB::table('brand')->where('id','=',$id)->update($data)) {
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
            // dd($data);
            if ($bool) {
                //新图片插入成功 先删除源图片
                //获取原路径
                $path=DB::table('brand')->where('id','=',$id)->select('log')->get();
                // dd($path[0]->log);
               $res = unlink('.'.$path[0]->log);

               if (!$res) {
                   //删除失败
                   unlink('.'.$data['log']);
                return back()->with('error','数据更新失败');

               }else{
                //更新成功
                //将数据写入数据库
               if (DB::table('brand')->where('id','=',$id)->update($data)) {
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
