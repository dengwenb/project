<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class ShopController extends Controller
{
    public function getcates()
    {
        //连贯方法结合原始表达式 防止sql语句注入
        $cate=DB::table("cates")->select(DB::raw('*,concat(path,",",id) as paths'))->orderBy('paths')->get();
        //遍历
        foreach($cate as $key=>$value){
            //转换为数组
            $arr=explode(",",$value->path);
            //获取逗号个数
            $len=count($arr)-1;
            //字符串重复函数
            $cate[$key]->name=str_repeat("--|",$len).$value->name;
        }
        return $cate;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $display = array('1','0');
        $arr = array('下架','上架');
        $data = DB::table('diy_shop')->select(DB::raw('diy_shop.*,sid,diy_shopicture.path,cates.name as cname'))->join('diy_shopicture','diy_shop.id','=','diy_shopicture.sid')->join('cates','cates.id','=','diy_shop.cate_id')->groupBy('sid')->get();
        return view('Admin.Admin.Shop.index',['data'=>$data,'arr'=>$arr,'display'=>$display]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = $this->getcates();
        return view('Admin.Admin.Shop.add',['data'=>$data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //判断图片是否上传
        if(!$request->hasFile('file')){
            return back()->with('error','请上传商品图片');
        }
        //判断是否为图片操作
        if(!empty($_POST['shop_id'])){
            //保存到本地并获取图片路径
            $path = myupload('file','./uploads/shop',$request);
            $pic = $request->except(['_token','file','shop_id']);
            $pic['sid'] = $_POST['shop_id'];
            $pic['add_time']=$pic['update_time']=time();
            foreach ($path as $key => $value) {
                $pic['path']=$value;
                if(!DB::table('diy_shopicture')->insert($pic)){
                    return back()->with('error','添加失败,请重新提交图片信息');
                }
            }
            return redirect('/adminShop/'.$pic['sid'])->with('success','添加图片成功');
        }
        //获取除了token和图片以外的信息
        $data = $request->except(['_token','file']);
        //设置添加时间和修改时间
        $data['add_time'] = $data['update_time'] = time();
        //插入数据并返回id值
        $id = DB::table('diy_shop')->insertGetId($data);
        //判断是否插入商品信息成功
        if($id){
            //将图片保存到本地 并返回图片的路径
            $path = myupload('file','./uploads/shop',$request);
            $pic['sid'] = $id;
            $pic['add_time']=$pic['update_time']=$data['add_time'];
            foreach ($path as $key => $value) {
                $pic['path']=$value;
                if(!DB::table('diy_shopicture')->insert($pic)){
                    return back()->with('error','添加失败,请重新提交商品信息');
                }
            }
             return redirect('/adminShop')->with('success','添加商品成功');
        }else{
            return back()->with('error','添加失败,请重新提交商品信息');
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
        $data = DB::table('diy_shopicture')->where('sid','=',$id)->get();
        return view('Admin.Admin.Shop.show',['data'=>$data]);
    }

    public function attrshow($id)
    {
        $i = 1;
        $data = DB::table('diy_shoprelation')->select(DB::raw('diy_shoprelation.*,diy_attributes.name as aname,diy_shop_value.name as vname'))->where('sid','=',$id)->join('diy_attributes','diy_attributes.id','=','diy_shoprelation.attid')->join('diy_shop_value','diy_shop_value.id','=','diy_shoprelation.vid')->get();
        return view('Admin.Admin.Shop.attr',['data'=>$data,'i'=>$i,'id'=>$id]);
    }

    public function attrupdate(Request $request,$id)
    {
        //判断过来的是什么操作
        if($_POST['order']==0){
           $relationid = $request->input('reslation');
           $data['status'] = 1;
           $data1['status'] = 0;
           if(count($relationid)>0){
                DB::table('diy_shoprelation')->whereIn('id',$relationid)->update($data); 
                DB::table('diy_shoprelation')->whereNotIn('id',$relationid)->update($data1);
           }else{
                DB::table('diy_shoprelation')->where('sid','=',$id)->update($data1);
           }
           return back()->with('success','修改成功');
        }
        //获取属性名
        $attrname['name'] = $request->input('attrname');
        $value['attid'] = DB::table('diy_attributes')->insertGetId($attrname);
        $value['name'] = $request->input('valuename');
        $value['vid'] = DB::table('diy_shop_value')->insertGetId($value);
        unset($value['name']);
        $value['sid'] = $request->input('id');
        if(DB::table('diy_shoprelation')->insert($value)){
            return back()->with('success','成功');
        }else{
            return back()->with('error','失败');
        }
    }

    public function attrdel(Request $request)
    {   
        $id = explode(',',$request->input('id'));
        // $data = DB::table('diy_shoprelation')->whereIn('id',$id)->get();
        // foreach ($data as $key => $value) {
        //     $attid[] = $value->attid;
        //     $vid[]   = $value->vid;  
        // }
        if(DB::table('diy_shoprelation')->whereIn('id',$id)->delete()){
            return response()->json(['result'=>'1','msg'=>'删除成功']);
        }else{
            return response()->json(['result'=>'0','msg'=>'删除失败']);
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
        $data = $this->getcates();
        $result = DB::table('diy_shop')->where('id','=',$id)->first();
        return view('Admin.Admin.Shop.edit',['data'=>$data,'result'=>$result]);
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
        //删除商品信息
        if(DB::table('diy_shop')->where('id','=',$id)->delete()){
            //获取文件路径
            $data = DB::table('diy_shopicture')->where('sid','=',$id)->get();
            //遍历删除文件
            foreach ($data as $key => $value) {
                unlink($value->path);
            }
            //删除图片表信息
            DB::table('diy_shopicture')->where('sid','=',$id)->delete();
            //成功返回信息
            return response()->json(['result'=>'1','msg'=>'删除成功!']);
        }else{
            return response()->json(['result'=>'0','msg'=>'删除失败!']);
        }
    }

    public function picadd(Request $request,$id)
    {
        return view('Admin.Admin.Shop.picadd',['id'=>$id,'data'=>array()]);
    }

      //修改状态
    public function myedit(Request $request)
    {
        //获取对应的id值
        $id = $request->input('id');
        //获取要修改的状态
        $data['status'] = $request->input('display');
        //更新
        if(DB::table('diy_shop')->where('id','=',$id)->update($data)){
            //将状态修改为显示，并返回json信息
            if($data['status']==1){
                 return response()->json(['result'=>1,'msg'=>'已上架!','display'=>0]);
             }else{
            //将状态修改为隐藏，并返回json信息
                 return response()->json(['result'=>1,'msg'=>'已下架!','display'=>1]);
             }
        }else{
            //删除失败，返回json信息
            return response()->json(['result'=>0,'msg'=>'操作过于频繁，请不要多次操作']);
        }
    }

}
