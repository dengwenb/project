@extends('js')
@section('content')
<div class="page-container">

    <form action="/adminAdminVip/{{$user->id}}" method="post">

        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>用户名：</label>
            <div class="formControls col-xs-4 col-sm-4">
                <input type="text" class="input-text" name="username" value="{{$user->username}}">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>电话：</label>
            <div class="formControls col-xs-4 col-sm-4">
                <input type="text" class="input-text" name="phone" value="{{$user->phone}}">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>邮箱：</label>
            <div class="formControls col-xs-4 col-sm-4">
                <input type="text" class="input-text" name="email" value="{{$info->email}}">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>用户等级：</label>
            <div class="formControls col-xs-4 col-sm-4">
                <span class="select-box">
                <select name="rolename" class="select">
                    <option value="{{$user->rolename}}" selected>{{$user->rolename}}</option>
                    <option value="超级用户">超级用户</option>
                    <option value="普通用户">普通用户</option>
                </select>
                </span>
            </div>
        </div>

        <div class="row cl">
        {{csrf_field()}}
        {{method_field('PUT')}}
            <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
                <input type="submit" class="btn btn-success" value="修改">
            </div>
        </div>
    </form>
</div>


</script>
</body>
</html>
@endsection
@section('title','用户修改')