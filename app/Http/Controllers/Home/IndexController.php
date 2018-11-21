<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lunbotu = DB::table('diy_cast')->get();
        $cates = DB::table('cates')->get();
        $shop = DB::table('diy_shop as s')
        ->select(DB::raw('s.*, MAX(s.sales) as sales,MIN(k.price) as price,k.sid,p.path as pic'))
        ->join('diy_shopicture as p','s.id','=','p.sid')
        ->join('diy_sku as k','s.id','=','k.sid')
        ->groupby('sid')
        ->orderby('sales','desc')
        ->where('p.main','=','1')
        ->get();
        $xinwen = xinwen()->data;
        return view('Home.Index.welcome',['lunbotu'=>$lunbotu,'cates'=>$cates,'shop'=>$shop,'xinwen'=>$xinwen]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $xinwen = xinwen('yule');
        if($xinwen->stat == 1){
            $xinwen = $xinwen->data;
        }else{
            $xinwen = array();
        }
        return view('Home.Index.xinwen',['xinwen'=>$xinwen]);
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
}
