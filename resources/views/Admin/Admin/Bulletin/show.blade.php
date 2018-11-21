@extends('js')
@section('content')
<div class="cl pd-20" style=" background-color:#5bacb6">
	<dl style="margin-left:80px; color:#fff">
		<dt>
			<span class="f-18">{{$data->title}}</span>
			<span class="pl-10 f-12" style="color:red">点击量：{{$data->num}}</span>
		</dt>
			<span class="f-18"> </span>
			<span class="pl-10 f-12" style="float:right">来源：{{$data->source}}</span>
	</dl>
</div>
<div class="pd-20">
	<table class="table">
		<tbody>
			<tr>
				<th>内容:</th>
			</tr>
			<tr>
				<th >&nbsp;&nbsp;&nbsp;&nbsp;{{$data->content}}</th>
			</tr>
		</tbody>
	</table>
</div>
@endsection
@section('title','文章详情')