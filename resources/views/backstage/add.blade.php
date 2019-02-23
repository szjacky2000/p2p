@extends('layouts.app')
@section('title', '抵押清单')

@section('content')
    

    <!-- 添加部门 -->
    <form method="POST" action="{{ url('Backstage/add') }}">
    @csrf
        部门名称：<input type="text" name="depart_name"/>
        <button type="submit">添加</button>    
    </form>
    <button><a href="list">查看列表</a></button>
    
@endsection