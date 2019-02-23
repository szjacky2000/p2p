@extends('layouts.app')
@section('title', '抵押清单')

@section('content')
    <!-- <form method="POST" action="{{ url('dept')}}">
        
        <label>选择部门</label><input id="phone" type="text" name="抵押物品名称" value="" required />
        <label>抵押物品名称</label><input id="phone" type="text" name="" value="" required />
        <input type="submit" name="{{ __('添加') }}" />
    </form> -->

    <!-- 添加部门 -->
    <button><a href="list">查看列表</a></button>

    <form method="POST" action="{{ url('Backstage/edit') }}">
    @csrf
        <table border="1">
        <input type="hidden" name="id" value="{{ $data->id }}"/>
          <tr>部门名称：<input type="text" name="depart_name" value="{{ $data->depart_name }}"/></tr>
        </table>
        <button type="submit">提交</button>
    </form>

@endsection