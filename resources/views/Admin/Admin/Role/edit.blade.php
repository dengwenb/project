@extends('js')
@section('content')
<div class="page-container">

    <form action="/saveauth" method="post">

        <div class="row cl">
            
            <div class="formControls col-xs-4 col-sm-4">
            @foreach($role as $r)
                <h4>当前角色：{{$r->name}}{{$data->username}}的权限信息</h4>
            @endforeach
            </div>
        </div>
       <div class="mt-20">
    <table class="table table-border table-bordered table-hover table-bg table-sort">
        <thead>
            <tr class="text-c">
                <th width="50"><input type="checkbox" name="" value="" style="display:none">请勾选</th>
                <th style="display:none"></th>
                <th style="display:none"></th>
                <th style="display:none"></th>
                <th style="display:none"></th>
                <th style="display:none"></th>
                <th style="display:none"></th>
                <th style="display:none"></th>
                <th style="display:none"></th>
                <th width="50">权限</th>
            </tr>
        </thead>
        <tbody> 
        @foreach($node as $n)   
            <tr class="text-c">  
                <td width="50" class="null"><input type="checkbox" value="{{$n->id}}" name="nid[]" @if(in_array($n->id,$nid)) checked @endif ></td>
                <td style="display:none"></td>
                <td style="display:none"></td>
                <td style="display:none"></td>
                <td style="display:none"></td>
                <td style="display:none"></td>
                <td style="display:none"></td>
                <td style="display:none"></td>
                <td style="display:none"></td>
                <td width="50">{{$n->name}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    </div>
    <br>
        <div class="row cl">
        {{csrf_field()}}
        <!-- {{method_field('PUT')}} -->
            <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
                <input type="hidden" name="aid" value="{{$data->id}}">
                <input type="hidden" name="rid" value="{{$data->roleid}}">
                <input type="submit" class="btn btn-success" value="分配权限">
                <input type="reset" class="btn btn-success" value="重置">
            </div>
        </div>
    </form>
</div>
<script>

</script>
</body>
</html>
@endsection
@section('title','权限修改')