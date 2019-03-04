//基本类
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
            headers : {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            url: url,
            data: dat,
            dataType: 'json',
            type: 'post',
            success: function( data ) {
                console.log(data);
            },
            error: function( data ){
                console.log( data );
            }
        });
    }
}