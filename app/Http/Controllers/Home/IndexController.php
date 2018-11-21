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
        $cates = DB::table('cates')->where('pid','=','0')->get();
        $shop = DB::table('diy_shop as s')
        ->select(DB::raw('s.*, MAX(s.sales) as sales,MIN(k.price) as price,k.sid,p.path as pic,k.skuattr'))
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

        $type = empty($_GET['type'])?'type':$_GET['type'];
        $xinwen = xinwen($type);
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

    public function myemjoy($id)
    {
        $xiaohua = emjoy($id);
        return response()->json(['msg'=>$xiaohua]);
    }

    public function tianqi(Request $request)
    {
        $name = $request->input('city');
        $name = urlencode($name);
        $key = 'f617c43149a84e894002981af366b671';
        $array = "format=2&cityname={$name}&key={$key}";
        $url = 'http://v.juhe.cn/weather/index';
        $data = jiekou($url,$array);
        if($data['resultcode']=='200'){
            $data = $data['result']['today']; 
        }
        return response()->json(['msg'=>$data]);
    }

    public function getaddress()
    {
        if(getenv('HTTP_CLIENT_IP')) { 
            $onlineip = getenv('HTTP_CLIENT_IP'); 
        } elseif(getenv('HTTP_X_FORWARDED_FOR')) { 
            $onlineip = getenv('HTTP_X_FORWARDED_FOR'); 
        } elseif(getenv('REMOTE_ADDR')) { 
            $onlineip = getenv('REMOTE_ADDR'); 
        } else { 
            $onlineip = $HTTP_SERVER_VARS['REMOTE_ADDR']; 
        }
        if($onlineip=='127.0.0.1'){
            $onlineip = '122.226.183.87';
        }
        $content = file_get_contents("https://api.map.baidu.com/location/ip?ip={$onlineip}&ak=PCVCqLC2P7YalcaPuEKfnWGjKMduqDXS&coor=bd09ll");
        $json = json_decode($content);
        //按层级关系提取经度数据
        $address['jingdu'] = $json->{'content'}->{'point'}->{'x'};
        //按层级关系提取纬度数据
        $address['weidu']  = $json->{'content'}->{'point'}->{'y'};
        //按层级关系提取address数
        $address['info']   = $json->{'content'}->{'address'};
        return $address;
    }

    public function showmap()
    {
        $name = '麦当劳';
        $name = urlencode($name);
        $address = $this->getaddress();
        $url = "http://api.map.baidu.com/place/search?query={$name}&location={$address['weidu']},{$address['jingdu']}&radius=1000&output=html&src=webapp.baidu.openAPIdemo"; 
        $myaddress = $address['info'];
        return view('Home.Index.map',['url'=>$url,'myaddress'=>$myaddress]);
    }

    public function zhoubian()
    {
        $address = $this->getaddress();
        $url = "http://api.map.baidu.com/geocoder/v2/?callback=renderReverse&location={$address['weidu']},{$address['jingdu']}&output=json&pois=1&ak=PCVCqLC2P7YalcaPuEKfnWGjKMduqDXS";
        dd($url);
        $str = file_get_contents($url);
        preg_match('/\(.*\)/', $str, $result);
        $ha=$result[0];   
        $hb=substr($ha, 0, -1);
        $hb = substr($hb,1);
        $json = json_decode($hb);
        dd($json);
    }
}
