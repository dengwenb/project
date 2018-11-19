@extends('js')
@section('content')
<div class="page-container">
    <form action="/adminAdminUser" method="post">
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>用户名：</label>
            <div class="formControls col-xs-4 col-sm-4">
                <input type="text" class="input-text" name="username">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>密码：</label>
            <div class="formControls col-xs-4 col-sm-4">
                <input type="password" class="input-text" name="password">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>权限：</label>
            <div class="formControls col-xs-4 col-sm-4">
                <span class="select-box">
                <select name="roleid" class="select">
                    <option value="0" selected>--请选择--</option>
                    <option value="1">超级管理员</option>
                    <option value="2">普通管理员</option>
                </select>
                </span>
            </div>
        </div>
        <div class="row cl">
        {{csrf_field()}}
            <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
                <input type="submit" class="btn btn-success" value="添加">
            </div>
        </div>
    </form>
</div>


</script>
</body>
</html>
@endsection
@section('title','管理员添加')