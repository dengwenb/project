<?php

namespace App\Providers;


=======
use Illuminate\Http\Request;

use Illuminate\Support\ServiceProvider;
use DB;
class AppServiceProvider extends ServiceProvider
{

     //获取分类数据
    public function getcatesbypid($pid){
        $res=DB::table("cates")->where("pid",'=',$pid)->where('state','=','0')->get();
        $data=[];
        //遍历 把对应得子类信息 添加到suv下标里
        foreach($res as $key=>$value){
            $value->suv=$this->getcatesbypid($value->id);
            $data[]=$value;
        }
        return $data;
    }
   
    //获取商品
    // //获取在线人数
    // public function getonline(){
           
    //         $online_log = 'online.txt';  // 保存用户ip和时间的文件，形式：ip,time = 192.168.xx.xx,1516242630
    //         $timeout = 1800;   // 设置多长时间（30分）用户不在，设为掉线
    //         $temp = array();   // 保存当前在线所有用户，后用来更新文件
             
    //         if (!file_exists($online_log)) {    // 文件不存在，就创建
    //             touch($online_log);
    //         }
    //         $onlines = file($online_log);   // 以数组的形式将用户ip和time取出来array([0]=>'192.168.xx.xx,1516242630', [1]=>...)
             
    //         for ($i=0; $i<count($onlines); $i++) {
    //             $online = explode(',', trim($onlines[$i]));   // 将用户ip和时间分隔开
    //             // 过滤文件中其他的浏览者：前面!=是其他的浏览者，和当前的ip（自己）不一样，过滤掉超时的其他ip
    //             if ($online[0] != $_SERVER['REMOTE_ADDR'] && $online[1] > time()) {
    //                 array_push($temp, $online[0] . ',' . $online[1]);
    //             }
    //         }
    //         // 更新当前的ip（自己）时间
    //         array_push($temp, $_SERVER['REMOTE_ADDR'] . ',' . (time() + $timeout));
             
    //         // 更新在线人数的文件
    //         $onlines = implode("\n", $temp);
    //         $fp = fopen($online_log, 'w');
    //         fputs($fp, $onlines);
    //         fclose($fp);

    //     return count($temp);
    // }


    /**
     * Bootstrap any application services.
     *
     * @return void
     */

    public function boot()
    {
        // $user=session('username');
       
        $cate=$this->getcatesbypid(0);
        // $online=$this->getonline();
        // view()->share('online', $online);
        view()->share('nav', $cate);
       
         
        

    public function boot(Request $request)
    {

        // dd(session('cart'));
        // view()->share('data',$data);

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
