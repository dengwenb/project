<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class SkuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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

    public function index()
    {

        $sid  = $_GET['sid'];
        $attr = DB::table('diy_attributes')->get();
        foreach ($attr as $key => $value) {
            $attribute[$value->id] = $value->name;
        }
        $val = DB::table('diy_shop_value')->get();
        foreach ($val as $key => $value) {
            $va[$value->id] = $value->name;
        }
        $data = DB::table('diy_sku')->join('diy_shop','diy_shop.id','=','diy_sku.sid')->select(DB::raw('diy_sku.*,diy_shop.name as sname'))->where('sid','=',$sid)->get();
        $newarr = array();
        foreach ($data as $key => $value) {
            $skuattr  = substr($value->skuattr,1,-1);
            $arr[$key]=explode(',',$skuattr);
            foreach ($arr[$key] as $k => $v) {
                $newarr[$key][$k] =  explode(':',$v);
                $newarr[$key][$k] = $attribute[$newarr[$key][$k][0]].':'.$va[$newarr[$key][$k][1]];
            }
        }
        return view('Admin.Admin.Sku.index',['data'=>$data,'newarr'=>$newarr]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        //获取商品id
        $id = $request->input('sid');       
        //判断是从哪个地方进来
        if($id){
             $copyatt = $attval = $this->getattval($id);
             $num = count($attval);
             return view('Admin.Admin.Sku.add',['attval'=>$attval,'copyatt'=>$copyatt,'num'=>$num]);
        }else{
            $cate = DB::table('cates')->where('pid','=','0')->get();
            $data = DB::table('diy_shop')->get();
            return view('Admin.Admin.Sku.add',['data'=>$data,'cate'=>$cate]);
        }
    }

    public function change(Request $request)
    {
        $id = $request->input('id');
        $data = DB::table('cates')->where('pid','=',$id)->get();
        return response()->json($data);
    }

    public function shop(Request $request)
    {
        $id = $request->input('id');
        $data = DB::table('diy_shop')->where('cate_id','=',$id)->get();
        return response()->json(['msg'=>$data]);
    }

     public function ship(Request $request)
    {
        $id = $request->input('id');
        $data = $this->getattval($id);
        return response()->json(['msg'=>$data]);
    }

    //获取属性名和属性值
    public function getattval($id)
    {
        $data = DB::table('diy_shoprelation')->select(DB::raw('diy_shoprelation.*,diy_attributes.name as aname,diy_shop_value.name as vname,diy_shop_value.attid as pid'))->where('sid','=',$id)->join('diy_attributes','diy_attributes.id','=','diy_shoprelation.attid')->join('diy_shop_value','diy_shop_value.id','=','diy_shoprelation.vid')->get();
        return $data;
    }

    public function order(Request $request)
    {
        $id = $request->input('upid');
        $data = DB::table('cates')->where('pid','=',$id)->get();
        return response()->json($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->except(['_token','manyattr']);
        $manyattr = $request->input('manyattr');
        foreach ($manyattr as $key => $value) {
            if($value != ''){
                   $arr[] = $key.':'.$value;
            }
        }
        $data['skuattr'] = '['.join(',',$arr).']';

        $num = DB::table('diy_sku')->where('sid','=',$data['sid'])->where('skuattr','=',$data['skuattr'])->count();
        if($num >0){
            return back()->with('error','添加库存失败,该商品的属性库存已存在');
        }
        $data['sales'] = 0;
        if(DB::table('diy_sku')->insert($data)){
            return redirect('/adminSku?sid='.$data['sid'])->with('success','添加库存成功');
        }else{
            return back()->with('error','添加库存失败');
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

    public function getshop($id)
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
        $data = DB::table('diy_sku')->where('id','=',$id)->first();
        return view('Admin.Admin.Sku.edit',['data'=>$data]);
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
        $data = $request->except(['_token','_method']);
        if(DB::table('diy_sku')->where('id','=',$id)->update($data)){
            return redirect('/adminShop')->with('success','修改库存信息成功');
        }else{
            return back()->with('error','修改库存信息失败');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $id = $request->input('id');
        if(DB::table('diy_sku')->where('id','=',$id)->delete()){
            return response()->json(['result'=>'1','msg'=>'删除成功']);
        }else{
            return response()->json(['result'=>'0','msg'=>'删除失败']);
        }
    }
}
