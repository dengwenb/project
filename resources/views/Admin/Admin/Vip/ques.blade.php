@extends('js')
@section('content')
<div class="page-container">
    <form action="/adminAdminVip" method="get">
        <div class="row cl">
        @foreach($data as $row)
            <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>问题：</label>
            <div class="formControls col-xs-4 col-sm-4">
                <input type="text" class="input-text" name="question" value="{{$row->question}}" disabled>
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>答案：</label>
            <div class="formControls col-xs-4 col-sm-4">
                <input type="text" class="input-text" name="answer" value="{{$row->answer}}" disabled>
            </div>
        </div>
        
        <div class="row cl">
        @endforeach
        {{csrf_field()}}
            <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
                <input type="submit" class="btn btn-success" value="返回">
            </div>
        </div>
    </form>
</div>


</script>
</body>
</html>
@endsection
@section('title','管理员添加')