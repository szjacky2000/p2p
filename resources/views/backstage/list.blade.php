@extends('layouts.app')

@section('title', '抵押清单')

@section('content')
    
    <!-- 添加部门 -->
<button><a href="add">添加</a></button>
<form>
 <table border="1">
  <tr>
    <th>id</th>
    <th>部门</th>
    <th>操作</th>
  </tr>
  @foreach($data as $k => $v)
  <tr>
    <td>{{$v['id']}}</td>
    <td>{{$v['depart_name']}}</td>

    <td>
        <a href="edit?id={{$v['id']}}">修改</a>
        <a href="del?id={{$v['id']}}">删除</a>
    </td>
  </tr> 
  @endforeach
 </table>
</form> 
    
@endsection

