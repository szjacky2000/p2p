//基本类

var layer;

layui.use('layer', function(){
    layer = layui.layer;
});

function msg(title, content, time = 5000, icon = 1){
    layer.open({
        time     : time
        ,title   : title
        ,content : content
        ,icon    : icon
    });
}

var Account = function( form_id ){
    this.form_id = form_id;
    this.is_success = true;
    this.ms = [];
};

Account.prototype = {
    //根据ID取得表单数据key=val串
    get_form_data:function(){
        this.ms = $('#' + this.form_id).serializeArray();
        return this;
    },

    //common method
    save:function( url ) {
        var url = url;
        var dat = this.ms;
        $.ajax({
            // headers  : {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            url      : url,
            data     : dat,
            dataType : 'json',
            type     : 'post',
            success: function( data ) {
                if(data == 1)      msg('系统提示您：', '添加数据发生错误!'    , 5000, 2);
                else if(data == 2) msg('系统提示您：', '银行卡号已被重复使用!' , 5000, 5);
                else               msg('系统提示您：', '银行卡号被添加'       , 1000, 1);
            },
            error: function( data ){
                if(data) msg('Error:', data, 5000, 2); 
            }
        });
    }
}