<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class CateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request )
    {
        //分类列表
        // echo 'this is cate'
        // 获取搜索的关键词
        $k=$request->input("keywords");
        // dd($k);
        // var_dump($k);
        //获取列表数据
        $data=DB::table("cates")->select(DB::raw('*,concat(path,",",id ) as paths'))->where("name","like","%".$k."%")->orderBy('paths')->get();
        //遍历
        $state=array();
        foreach ($data as $key=>$value){
            // echo $value->path."<br>";
            //转换为数组
            $arr=explode(",",$value->path);
            //获取逗号个数
            $len=count($arr)-1;
            //拼接
            $data[$key]->name=str_repeat("--|",$len).$value->name;
             
            if ($value->state==1) {
                $state[$key]= "已下架";
            }else{
                $state[$key]="正常";
            }
        }
        return view("Admin.Cate.index",['data'=>$data,'request'=>$request->all(),'state'=>$state]);
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
        //
        // echo 'this is add';
        // 
        //获取数据
        $data=self::getcates();
        // 加载模板
        return view("Admin.Cate.add",['data'=>$data]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //执行添加分类
    public function store(Request $request)
    {
        $data=$request->except('_token');
        //获取pid值
        $data['state']=$request->input("state");
        $data['name']=$request->input("name");
        if (empty($data['name'])) {
        return redirect("/adminCate/create")->with('error','请输入分类名。');

        }
        $pid=$request->input("pid");
       
        //判断
        if ($pid==0) {
            //添加顶级分类
            $data['path']='0';
        }else{
            //添加的是子分类
            //获取父类信息
            $info =DB::table("cates")->where("id",'=',$pid)->first();
            $data['path']=$info->path.",".$info->id;
        }
        //执行插入
        if (DB::table("cates")->insert($data)) {
            return redirect("/adminCate")->with('success','添加成功');
        }else{
            return redirect("/adminCate/create")->with('error','添加失败');
        }

    }
    //删除分类
    public function del(Request $request){
         // dd($request);
       $id=$request->input('id');
       //获取当前类别下子类个数
       $res=DB::table("cates")->where('pid','=',$id)->count();
       if ($res>0) {
           //有子分类不能删除
           return response()->json(['msg'=>0]);
       }else{
       if (DB::table("cates")->where("id",'=',$id)->delete()) {
           return response()->json(['msg'=>1]);
       }else{
        return response()->json(['msg'=>0]);
       }
   }
    }
   //  //分类下架
     public function stop(Request $request ){
         // dd($request);
          $id=$request->id;
          // dd($res);
          $data=[];
          $state=DB::table("cates")->where('id','=',$id)->select('state')->get();
        
          // //跟换状态
          if ($state[0]->state==0) {
              $data['state']=1;
          }else{
             $data['state']=0;
          }
   //     获取当前类别下子类个数
        $res=DB::table("cates")->where('pid','=',$id)->count();
       if ($res>0) {
   //         //有子分类不能直接下架
           return response()->json(['msg'=>0]);
       }else{
       if (DB::table("cates")->where("id",'=',$id)->update($data)) {
           //操作成功
           return response()->json(['msg'=>1,'state'=>$data['state']]);
       }else{
        //操作失败
        return response()->json(['msg'=>0]);
       }
   }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //分类修改
    public function show($id)
    {
        //
        // echo 'this is edit';
        //查询该id下的信息
       
        $data=DB::table("cates")->where('id','=',$id)->select()->get();
        // 获取所有分类
        $cate=self::getcates();
        return view("Admin.Cate.edit",['data'=>$data,'cate'=>$cate]);
        // return view("Admin.Cate.index",['cate'=>$cate,'request'=>$request->all(),'state'=>$state]);
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
    public function update(Request $request, $id)
    {
        //
        // echo "this is update";
        
        //获取id值
        // $id=$request->input("id");
         $request->except('_token');
        $request->except('_method');
        // dd($request->all());
        //放在data里面
        $data['state']=$request->input('state');
        $data['name']=$request->input('name');
        if (empty($data['name'])) {
        return redirect("/adminCate/$id")->with('error','请输入分类名。');

        }
        // dd($data);
        

        if (DB::table("cates")->where("id",'=',$id)->update($data)) {
                // 修改成功
                 return redirect("/adminCate")->with('success','修改成功');
            }else{
                //修改失败
                return redirect("/adminCate/$id")->with('error','数据未修改');

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
        dd($id);
    }
}
