@extends('js')
@section('content')
<div class="page-container">
    <form action="/adminAdminVip" method="get">
        <div class="row cl">
        
            <table class="table table-border table-bordered table-hover table-bg table-sort">
        <thead>
            <tr class="text-c">
                <th width="25"><input type="checkbox" name="" value=""></th>
                <th width="50">ID</th>
                <th width="50">用户编号</th>
                <th width="50">收货人姓名</th>
                <th width="130">收货地址</th>
                <th width="80">收货人联系电话</th>
                <th width="80">邮编</th>
                <th width="50">备注</th>
                <th style="display:none">备注</th>
                <th style="display:none">备注</th>
            </tr>
        </thead>
        <tbody>
        @foreach($data as $row)
            <tr class="text-c">
                
                <td class="null"><input type="checkbox" value="1" name=""></td>
                
                <td style="cursor:pointer" class="text-primary">{{$row->id}}</td>
                <td >{{$row->userid}}</td>
                <td >{{$row->name}}</td>
                <td >{{$row->address}}</td>
                <td >{{$row->phone}}</td>
                <td >{{$row->code}}</td>
                @if($row->remarks)
                <td >{{$row->remarks}}</td>
                @else
                <td >暂无备注</td>
                @endif
                <td style="display:none"></td>
                <td style="display:none"></td>

            </tr>
            @endforeach
        </tbody>
    </table>
        <div class="row cl">
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