@extends('js')
@section('content')
<img width="100%" class="picture-thumb" src="{{substr($data->path,1)}}">
@endsection
@section('title','查看图片')