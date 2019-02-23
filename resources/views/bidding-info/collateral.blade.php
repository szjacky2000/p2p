@extends('layouts.app')
@section('title', '抵押清单')

@section('content')
    <script src="../js/layui/layui.js"></script>

    <table class="layui-hide" id="test"></table>
    <script>
        layui.use('table', function(){
            alert(1)
            // var table = layui.table;
            // table.render({
            //     elem: '#test'
            //     ,url:'/demo/table/user/'
            //     ,cellMinWidth: 80 //全局定义常规单元格的最小宽度，layui 2.2.1 新增
            //     ,cols: [[
            //         {field:'id', title: 'ID', sort: true}
            //         ,{field:'username', title: '用户名'} //width 支持：数字、百分比和不填写。你还可以通过 minWidth 参数局部定义当前单元格的最小宽度，layui 2.2.1 新增
            //         ,{field:'sex', title: '性别', sort: true}
            //         ,{field:'city', title: '城市'}
            //         ,{field:'sign', title: '签名'}
            //         ,{field:'classify', title: '职业', align: 'center'} //单元格内容水平居中
            //         ,{field:'experience', title: '积分', sort: true, align: 'right'} //单元格内容水平居中
            //         ,{field:'score', title: '评分', sort: true, align: 'right'}
            //         ,{field:'wealth', title: '财富', sort: true, align: 'right'}
            //     ]]
            // });
        });
    </script>

    <meta name="csrf-token" content="{{ csrf_token() }}" />

    {{--<form class="layui-form" action="/collateral/add">--}}
        {{--@csrf--}}
        {{--<div class="layui-form-item">--}}

            {{--<div class="layui-inline">--}}
                {{--<label class="layui-form-label">大类</label>--}}
                {{--<div class="layui-input-inline">--}}
                    {{--<select name="pid" lay-verify="required" lay-search="">--}}
                        {{--@foreach($collaterals as $collateral)--}}
                            {{--<option value ="{{ $collateral->id }}">{{ $collateral->name }}</option>--}}
                        {{--@endforeach--}}

                    {{--</select>--}}
                {{--</div>--}}
            {{--</div>--}}

            {{--<div class="layui-inline">--}}
                {{--<label class="layui-form-label">抵押物名称</label>--}}
                {{--<div class="layui-input-inline">--}}
                    {{--<input type="text" name="name" lay-verify="email" autocomplete="off" class="layui-input">--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="layui-inline">--}}
                {{--<input type="submit" name="{{ __('提交') }}" />--}}

            {{--</div>--}}
        {{--</div>--}}
    {{--</form>--}}



    <form class="layui-form" >
        @csrf
        <div class="layui-form-item">
            <div class="layui-inline">
                <label class="layui-form-label">添加大类</label>
                <div class="layui-input-inline">
                    <input type="text" id="add" lay-verify="email"  autocomplete="off" class="layui-input">
                </div>
            </div>
            <div class="layui-inline">
                <a href="javascript:void(0)" onclick="add()">添加</a>


            </div>

        </div>
    </form>



    <table border="1" class="layui-table">
        <tr>
            <th>id</th>
            <th>大类</th>
            <th>操作</th>
        </tr>
        @foreach($collaterals as $collateral)

            <tr>

                <td>{{ $collateral->id }}</td>
                <td>{{ $collateral->name }}</td>
                <td>
                    <a href="javascript:void(0)" onclick="del({{ $collateral->id }})">删除</a>
                <a href="javascript:void(0)" onclick="upt({{ $collateral->id }},'{{$collateral->name}}')">编辑</a>
                </td>
            @endforeach
            </tr>


    </table>
    </form>
    <script>

        function add(id) {
            var name = $("#add").val();
                console.log(name);
            layer.confirm('确定添加吗?', {
                icon: 3,
                skin: 'layer-ext-moon',
                btn: ['确认','取消'] ,//按钮

            }, function(){
                $.ajax({
                    headers : {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    url:'collateral/addConllaterals',
                    type:'post',
                    data:{id:id,name:name},
                    beforeSend:function () {
                    },
                    success:function(data){
                        if(data.status == 'error'){
                            layer.msg(data.msg,{icon: 5});//失败的表情

                            return;
                        }else{
                            layer.msg(data.msg, {
                                icon: 6,//成功的表情
                                time: 1000 //1秒关闭（如果不配置，默认是3秒）
                            }, function(){
                                location.reload();
                            });
                        }
                    },
                    complete: function () {
                        layer.close(this.layerIndex);
                    },
                });
            });

        }

        function del(id) {
            layer.confirm('确定删除吗?', {
                icon: 3,
                skin: 'layer-ext-moon',
                btn: ['确认','取消'] ,//按钮

            }, function(){
                $.ajax({
                    headers : {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    url:'collateral/delCollateral',
                    type:'post',
                    data:{id:id},
                    beforeSend:function () {
                    },
                    success:function(data){
                        if(data.status == 'error'){
                            layer.msg(data.msg,{icon: 5});//失败的表情

                            return;
                        }else{
                            layer.msg(data.msg, {
                                icon: 6,//成功的表情
                                time: 1000 //1秒关闭（如果不配置，默认是3秒）
                            }, function(){
                                location.reload();
                            });
                        }
                    },
                    complete: function () {
                        layer.close(this.layerIndex);
                    },
                });
            });

        }
        function upt(id,name) {

            layer.open({
                type: 1,
                closeBtn: false,
                btn: ['确认','取消'] ,//按钮
                shadeClose: true,
                shift: 7,
                content: "<div style='width:350px;'><div style='width:320px;margin-left: 3%;' class='form-group has-feedback'>" +
                    "<p>更换为</p><input id='name' class='form-control' type='text' name='name'  value='"+name+"'/></div>"+
                     "</div>"
                ,yes:function () {
                    a(id);
                }

            })

        }

        function a(id) {
            var name = $("#name").val();
            $.ajax({
                headers : {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                url:'collateral/setCollaterals',
                type:'post',
                data:{id:id,name:name},
                success:function(data){
                    if(data.status == 'error'){
                        layer.msg(data.msg);//失败的表情

                        return;
                    }else{
                        layer.msg(data.msg, {
                            icon: 6,//成功的表情
                            time: 1000 //1秒关闭（如果不配置，默认是3秒）
                        }, function(){
                            location.reload();
                        });
                    }
                },
            });
        }


    </script>
@endsection