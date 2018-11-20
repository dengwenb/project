@extends('js')
@section('content')
<div class="page-container">
    <form action="/adminRolelist" method="post">
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>操作内容：</label>
            <div class="formControls col-xs-4 col-sm-4">
                <input type="text" class="input-text" name="name">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>操作控制器：</label>
            <div class="formControls col-xs-4 col-sm-4">
                <input type="text" class="input-text" name="mname">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>操作内容英文：</label>
            <div class="formControls col-xs-4 col-sm-4">
                <input type="text" class="input-text" name="aname">
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
@section('title','权限添加')