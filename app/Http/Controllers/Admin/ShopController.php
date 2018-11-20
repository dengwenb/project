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

        // echo "22";
        $data=DB::table("diy_shop")->get();
        return view("Admin.Admin.User.shop",['data'=>$data]);

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

        //

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
        //
    }

    public function relation($id,$request)
    {
        $attr = $request->only(['attr','value']);
        $attr = array_combine($attr['value'],$attr['attr']);
            $i=0;
        foreach ($attr as $key => $value) { 
            $str[$i]['vid'] =$key;
            $str[$i]['attid']=$value;
            $str[$i]['sid']=$id;
            $i=$i+1;
        }
            //存属性
        $result = DB::table('diy_shoprelation')->insert(
               $str
            );
        return $result;
    }

    //添加属性方法
    public function store(Request $request)
    {

        //判断那里来的
        if(!empty($_POST['id'])){
            $bool = $this->relation($_POST['id'],$request);
            if($bool){
                return back()->with('success','添加属性成功');
            }else{
                return back()->with('error','添加属性失败');
            }
        }

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
        $data = $request->except(['_token','file','attr','value']);
        //设置添加时间和修改时间
        $data['add_time'] = $data['update_time'] = time();
        //插入数据并返回id值
        
        $id = DB::table('diy_shop')->insertGetId($data);
        //判断是否插入商品信息成功
        // dd($str);
        if($id){
            $attr = $request->only(['attr','value']);

            $attr = array_combine($attr['value'],$attr['attr']);
            $i=0;
            foreach ($attr as $key => $value) { 
                $str[$i]['vid'] =$key;
                $str[$i]['attid']=$value;
                $str[$i]['sid']=$id;
                $i=$i+1;
            }
            //存属性
            DB::table('diy_shoprelation')->insert(
               $str
            );
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

        //
    }


        $data = DB::table('diy_shopicture')->where('sid','=',$id)->get();
        return view('Admin.Admin.Shop.show',['data'=>$data]);
    }

    //显示商品属性
    public function attrshow($id,$cateid)
    {
        $i = 1;
        //规定查找的条件
        $cates = DB::table('cates')->where('id','=',$cateid)->first();
        $array= array(
            'sid'=>$id,
            'cid'=>$cateid
        );
        //查询数据
        $data = DB::table('diy_shoprelation')->select(DB::raw('diy_shoprelation.*,diy_attributes.name as aname,diy_shop_value.name as vname'))->where($array)->join('diy_attributes','diy_attributes.id','=','diy_shoprelation.attid')->join('diy_shop_value','diy_shop_value.id','=','diy_shoprelation.vid')->get();
        //加载模板
        return view('Admin.Admin.Shop.attr',['data'=>$data,'i'=>$i,'id'=>$id,'cateid'=>$cateid,'cates'=>$cates]);
    }

    public function attrupdate(Request $request,$id)
    {

        //判断过来的是什么操作
        //进来的是修改状态
        if($_POST['order']==0){
            //获取选中的属性id
            $relationid = $request->input('reslation');
            if($relationid != null){
                //查询该商品下所有的属性关系
                $arr = DB::table('diy_shoprelation')->where('sid','=',$id)->whereIn('id',$relationid)->get();
                //拼接属性和属性值
                foreach($arr as $row){
                    $sku[]=$row->attid.':'.$row->vid;
                }
                //组合
                $order['skuattr'] = '['.join(',',$sku).']';
                //获取该商品下库存的所有信息
                $newarr = DB::table('diy_sku')->select('skuattr')->where('sid','=',$id)->get();
                //定义一个新数组
                $skuarr = array();
                //拼接数据成数组
                foreach ($newarr as $key => $value) {
                    $skuarr[] = $value->skuattr; 
                }
                //不存在，设置初始库存
                if(!in_array($order['skuattr'],$skuarr)){
                    //设置初始值
                    $order['sid']=$id;
                    $order['stock']=0;
                    $order['sales']=0;
                    $order['price']=0;
                    if(DB::table('diy_sku')->insert($order)){
                     }else{
                        return back()->with('error','修改失败');
                     }
                }
            }
           $data[0]['status'] = 1;
           $data[1]['status'] = 0;
           if(count($relationid)>0){
                DB::table('diy_shoprelation')->whereIn('id',$relationid)->update($data[0]); 
                DB::table('diy_shoprelation')->whereNotIn('id',$relationid)->update($data[1]);
           }else{
                DB::table('diy_shoprelation')->where('sid','=',$id)->update($data[1]);
           }
           return back()->with('success','修改成功');
        }

        //获取属性名
        $atname = $attrname['name'] = $request->input('attrname'); 
        //获取商品分类id
        $attrname['cid'] = $request->input('cateid');
        $attnum = DB::table('diy_attributes')->where('name','=',$atname)->first();
        //判断是否存在数据 
        if($attnum!=null){
            //不需要插入到属性表，获取属性表的id
            $value['attid'] = $attnum->id;
        }else{
            //插入属性到表格 返回插入的id值
            $value['attid'] = DB::table('diy_attributes')->insertGetId($attrname);
        }
        //获取属性值的值
        $value['name'] = $request->input('valuename');
        //返回插入的id值
        $value['vid'] = DB::table('diy_shop_value')->insertGetId($value);
        //删除数组的name单元
        unset($value['name']);
        //获取商品的id
        $value['sid'] = $request->input('id');
        //插入数据
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

         return redirect('/adminShop')->with('success','成功');

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

    //获取属性名
    public function getattr(Request $request)
    {
        $id = $request->input('id');
        $data = DB::table('diy_attributes')->where('cid','=',$id)->get();
        return response()->json(['msg'=>$data]);
    }

    //获取属性值
    public function getvalue(Request $request)
    {
        $id = $request->input('id');
        $data = DB::table('diy_shop_value')->where('attid','=',$id)->get();
        return response()->json(['msg'=>$data]);
    }

}
