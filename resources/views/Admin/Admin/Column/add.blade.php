@extends('js')
@section('content')
<div class="page-container">
    <form action="/adminColumn" method="post">
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>栏目名：</label>
            <div class="formControls col-xs-4 col-sm-4">
                <input type="text" class="input-text" name="name">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>pid：</label>
            <div class="formControls col-xs-4 col-sm-4">
                <span class="select-box">
                <select name="pid" class="select" >
                    <option value="0" selected>--请选择--</option>
                    @foreach($info as $row)
                    <option value="{{$row->id}}">{{$row->name}}</option>
                    @endforeach
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