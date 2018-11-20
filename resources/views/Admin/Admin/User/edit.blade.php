@extends('js')
@section('content')
<div class="page-container">
    @foreach($info as $row)
    <form action="/adminAdminUser/{{$row->id}}" method="post">

        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>用户名：</label>
            <div class="formControls col-xs-4 col-sm-4">
                <input type="text" class="input-text" name="username" value="{{$row->username}}">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>权限：</label>
            <div class="formControls col-xs-4 col-sm-4">
                <span class="select-box">
                <select name="roleid" class="select">
                    <option value="{{$row->roleid}}" selected>{{$row->name}}</option>
                    <option value="1">超级管理员</option>
                    <option value="2">普通管理员</option>
                </select>
                </span>
            </div>
        </div>
        @endforeach
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