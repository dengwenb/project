<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class RolelistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //首页获取全部用户
    public function index()
    {
        //获取所有用户的用户名和权限等级
        $sql="select admin.id,username,name from admin,diy_role where admin.roleid=diy_role.id";
        $data=DB::select(DB::raw($sql));
        return view("Admin.Admin.Role.role",['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("Admin.Admin.Role.add");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //添加权限
    public function store(Request $request)
    {
        $data=$request->except(["_token"]);
        $data['status']=0;
        if(DB::table("node")->insert($data)){
            return redirect("/adminRolelist")->with("success","添加成功");
        }else{
             return back()->with("error","添加失败");
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
    //分配权限
    public function auth($id)
    {
        //获取当前操作角色信息
        $data=DB::table("admin")->where("id",'=',$id)->first();
        //获取所有权限信息
        $node=DB::table("node")->get();
        //获取当前用户已有的权限信息
        $auth=DB::table("role_node")->where("aid","=",$id)->get();
        //获取用户管理员身份
        $sql="select name from admin,diy_role where admin.roleid=diy_role.id and admin.id={$id}";
        $role=DB::select(DB::raw($sql));
        //判断
        if(count($auth)){
            foreach($auth as $v){
                $nid[]=$v->nid;
            }
            return view("Admin.Admin.Role.edit",['node'=>$node,'data'=>$data,'nid'=>$nid,'role'=>$role]);
        }else{
            //当前角色没有权限信息
            //加载模板
            return view("Admin.Admin.Role.edit",['node'=>$node,'data'=>$data,'role'=>$role,'nid'=>array()]);
        }
    }

    //保存权限到角色
    public function saveauth(Request $request)
    {
        $aid=$request->input('aid');
        $rid=$request->input('rid');
        $nid=$_POST['nid'];
        // 把已有权限删除
        $eee=DB::table("role_node")->where("aid","=",$aid)->delete();
        //遍历获得的权限再插入数据库
        foreach($nid as $key=>$value){
            $data['aid']=$aid;
            $data['rid']=$rid;
            $data['nid']=$value;
           $aa= DB::table("role_node")->insert($data);

        }
        return redirect("/rolelist")->with('success','权限分配成功');
    }
}
