<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      
        //获取属性表
        $attributes = DB::table('diy_attributes')->get();
        //获取属性值表
        $attrvalue  = DB::table('diy_shop_value')->get();
        foreach ($attributes as $key => $value) {
            $newatt[$value->id] = $value->name;
        }
        foreach ($attrvalue as $key => $value) {
            $newval[$value->id] = $value->name;
        }
        $cart = session('cart'); 
        if(!empty($cart)){
            foreach ($cart as $key => $value) {
                $id[] = $value['sid'];
            }
            $olddata = DB::table('diy_shop')->whereIn('id',$id)->get();
            foreach ($olddata as $key => $value) {
                $data[$value->id]=$value;
            }
        }else{
            $data = array();
        }
        $total = 0;
        return view('Home.Cart.index',['data'=>$data,'att'=>$newatt,'vvv'=>$newval,'total'=>$total]);
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
        $kid=$request->input('skuid');
        session(['kid'=>$kid]);
        //获取数据
        $data = $request->except('_token');
        //判断是从哪里进来的
        if(empty($request->input('num'))){
            $data['num'] = 1;
            $data['skuattr'] = explode(',',substr($data['skuattr'],1,-1));
            foreach ($data['skuattr'] as $key => $value) {
                $value = explode(':',$value);
                $newdata[$value[0]] = $value[1];
            }
            $data['skuattr'] = $newdata; 
        }
        //得到购物车的session信息
        $cart = session('cart');
        if(!empty($cart)){
            //遍历判断是否是第一次添加该商品
            foreach ($cart as $key => $value) {
                if($value['skuattr']==$data['skuattr']){
                    $cart[$key]['num']+=$data['num'];
                    $status = 1;
                    //跳出循环
                    break;
                }
            }
        }
        //如果不是第一次 重新赋值
        if(!empty($status)){
            session(['cart'=>$cart]);
        }else{
        //否则直接在购物车信息加一个数组单元
            $distant=1;
            if(!empty($cart)){
                foreach ($cart as $key => $value) {
                    if($data['sid']==$value['sid']){
                        $distant++;
                    }
                }
            }
            $data['distant']=$distant;
            $request->session()->push('cart',$data);
        }    
        return redirect('/homeCart')->with('success','添加成功');

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
        $sku = DB::table('diy_sku')->where('sid','=',$id)->get();
        $data = session('cart');
        $arr = array();
        foreach($sku as $key=>$value){
            $key = $key.'#'.$value->stock;
            $arr[$key] = $value->skuattr;
        }
        $distant = $request->input('distant');
        $suanfa = $request->input('suanfa');
            foreach($data as $key=>$value){
                if($value['distant']==$distant && $value['sid']==$id){
                    if($suanfa == '+'){
                        //数值加一
                       foreach($data[$key]['skuattr'] as $k=>$val){
                            $newdata[] = $k.':'.$val;
                       }
                        $newdata='['.join(',',$newdata).']';
                        foreach($arr as $akey=>$aval){
                            if($aval==$newdata){
                                $akey = explode('#',$akey)[1];
                                if($akey >= $value['num']+1){
                                    $num = $data[$key]['num'] = $value['num']+1;
                                }else{
                                    $num = $data[$key]['num'];
                                }
                                break;
                            }else{
                                 $num = 0;
                            }   
                        }
                    }else{
                        if($value['num']-1>=1){
                            $num = $data[$key]['num'] = $value['num']-1;
                        }else{
                            $num = 1;
                        }
                    }
                }
            }
            session(['cart'=>$data]);
        return response()->json(['result'=>'1','msg'=>$num]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $distant = $request->input('distant');
        $data = session('cart');
        foreach($data as $key=>$value){
            if($value['distant']==$distant && $value['sid']==$id){
                //直接删除
                unset($data[$key]);
            }
        }
        //重新赋值
        session(['cart'=>$data]);
        return response()->json(['result'=>'1','msg'=>'删除成功']);
    }

    public function getprice(Request $request)
    {
        $id = $request->input('id');
        $skuattr = $request->input('skuattr');
        $data = DB::table('diy_sku')->where('sid','=',$id)->where('skuattr','=',$skuattr)->first();
        if($data != null){
            return response()->json(['result'=>'1','msg'=>$data->price]);
        }
        return response()->json(['result'=>'0','msg'=>'该商品暂时缺货']);
    }
}
