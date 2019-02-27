@extends('layouts.master_no_sidebar')
@section('title', 'person center')
@section('content')
    <link rel="stylesheet" href="../css/bid.css" />
    <link rel="stylesheet" href="../css/bid.css" />
    <script type="text/javascript" src="../js/layui/layui.js"></script>
    <link rel="stylesheet" href="../js/layui/css/layui.css">
<div id="fb">
    <div class="fblc_2">
        <form method="POST" action="{{ url('loan/add') }}">
            @csrf
        <div class="fblc_left">
            <p>
                <span>借款金额</span>
                <label><input type="number" name="amount" id="" value="{{ old('amount') }}" placeholder="请输入您要的借款金额"/>元</label>
            </p>
            @if (false == Auth::check())
            <p>
                <span>您的姓名</span>
                <label><input type="text" name="name" id="" value="{{ old('name') }}" placeholder="请输入您的真实姓名"/></label>
            </p>
            @endif
            <p>
                <span>所在地区</span>
                <label style="border: none;padding: 0;">
                    <select name="addr">
                        <option value="gd">广东省</option>
                    </select>
                    <select>
                        <option>深圳市</option>
                    </select>
                    <select>
                        <option>罗湖区</option>
                        <option>福田区</option>
                        <option>南山区</option>
                    </select>
                </label>
            </p>
        </div>
        <div class="fblc_right">
            <p>
                <span>借款期限</span>
                <label style="width: 200px;"><input type="number" name="period" id="" value="{{ old('period') }}" placeholder="请输入借款的期限" style="width: 150px;"/></label>
                <select style="width: 50px;margin-left: 27px;margin-top: 5px;">
                    <option value=1>月</option>
                    <option value=2>天</option>
                </select>
            </p>
            @if (false == Auth::check())
            <p>
                <span>手机号码</span>
                <label><input type="number" name="phone" id="" value="{{ old('phone') }}" placeholder="请输入您的手机号码"/></label>
            </p>
            @endif
            <p>
                <span>借款类型</span>
                <label style="border: none;padding: 0;">
                    <a href="" class="fblc_bg">珠宝抵押</a>
                    <a href="" >车辆抵押</a>
                    <a href="" style="margin: 0;">房产抵押</a>
                </label>
            </p>
        </div>
            <input type="submit" value="借款查询" class="fblc_bt" />
        </form>
    </div>
    <table class="layui-hide" id="loan-list"></table>


    @verbatim
    <script type="text/html" id="checkboxTpl">
        <input type="checkbox" name="status" value="{{ d.id }}" title="审核" lay-filter="verify_loans" {{ d.status == 4 ? 'checked' : '' }} >
    </script>
    @endverbatim

    <script>
        layui.use('table', function(){
            var table = layui.table
                ,form = layui.form;
            table.render({
                elem: '#loan-list'
                ,url:'/loan/show'
                ,cellMinWidth: 80
                ,cols: [[
                    {field:'id',          title: 'ID',     width:80, sort: true}
                    ,{field:'amount',     title: '金额',    width:80   }
                    ,{field:'period',     title: '借款期限', width:120  }
                    ,{field:'mortgage',   title: '日期类型', width:120  }
                    ,{field:'type',       title: '投资',    width: 80,  minWidth: 100}
                    ,{field:'created_at', title: '借款日期', width: 160,}
                    ,{field:'updated_at', title: '修改日期', width: 160,}
                    ,{field:'name',       title: '借款人'}
                    ,{field:'status',     title: '审核', width:140, templet: '#checkboxTpl', unresize: true}
                    ,{field:'remarks',    title: '备注消息',th:137,}
                ]]
                ,page: true
            });
            //监听审查操作
            form.on('checkbox(verify_loans)', function(obj){
                var id = this.value;
                $.ajax({
                    headers : {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    url: '{{ url("loan/investigate/") }}/' + id,
                    type: 'post',
                    beforeSend: function () {
                        this.layerIndex = layer.load(0, {shade: [0.5, '#393D49']});
                    },
                    success: function (data) {
                        if (data.message == 'error') {
                            layer.msg(data.msg, {icon: 5});
                            o.removeClass('layui-btn-disabled');
                            return;
                        } else{
                            location.reload();
                            dialog.tip('update success!');
                        }
                    },
                });
            });
        });
    </script>
</div>

@endsection
