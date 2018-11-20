<?php

namespace App\Http\Middleware;

use Closure;

class IndexMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $actions=explode('\\', \Route::current()->getActionName());
            //或$actions=explode('\\', \Route::currentRouteAction());
        $modelName=$actions[count($actions)-2]=='Controllers'?null:$actions[count($actions)-2];
        $func=explode('@', $actions[count($actions)-1]);
            //控制器名
        $func[0]=substr($func[0],0,-10);
        session(['controller'=>$func]);
        // session_start();
        // $_SESSION['controller']=$func;
            //方法
        // $_SESSION[actionName=$func[1];
        //      // echo $controllerName.":".$actionName;
        //     //4.权限对比
        //     //获取登录用户的权限信息
        // $nodelist=session('nodelist');
        //     // dd($nodelist);
        // if(empty($nodelist[$controllerName]) ||!in_array($actionName,$nodelist[$controllerName])){
        //         return redirect("/mes")->with('error','抱歉,您没有权限访问该模块,请联系狗东');
        // }
        return $next($request);
    }
}
