@extends('js')
@section('content')
	<div class="mt-20">
		<table class="table table-border table-bordered table-bg table-hover table-sort table-responsive">
			<thead>
				<tr class="text-c">
					<th width="25"><input type="checkbox" name="" value=""></th>
					<th width="80">ID</th>
					<th>模块名</th>
					<th width="100">模块中文名</th>
					<th width="100">Path</th>
					<th width="210">创建时间</th>
					<th width="210">修改时间</th>
					<th width="60">状态</th>
					<th width="120">操作</th>
				</tr>
			</thead>
			<tbody>
				@foreach($data as $row)
				<tr class="text-c">
					<td class="null"><input name="" type="checkbox" value="{{$row->id}}"></td>
					<td>{{$row->id}}</td>
					<td>{{$row->name}}</td>
					<td>{{$row->cname}}</td>
					<td>{{$row->path}}</td>
					<td>{{date('Y-m-d H:m:s',$row->add_time)}}</td>
					<td>{{date('Y-m-d H:m:s',$row->update_time)}}</td>
					<td class="td-status">@if( $row->status )<span class="label label-success radius"> @else <span class="label label-defaunt radius">   @endif {{$arr[$row->status]}}</span></td>
					<td class="td-manage" id="lupdate"><a style="text-decoration:none" onClick="link_display(this,{{$row->id}},{{$display[$row->status]}})" href="javascript:;" title="修改状态"><i class="Hui-iconfont">&#xe6de;</i></a> <a style="text-decoration:none" class="ml-5" onClick="picture_edit('修改','/adminModule/{{$row->id}}/edit',{{$row->id}})" href="javascript:;" title="编辑"><i class="Hui-iconfont">&#xe6df;</i></a> <a style="text-decoration:none" class="ml-5" onClick="picture_del(this,{{$row->id}})" href="javascript:;" title="删除"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
				</tr>
				@endforeach
			</tbody>
		</table>
		{{csrf_field()}}
	{{ method_field('DELETE') }}
	</div>
</div>
@endsection
@section('title','模块管理')