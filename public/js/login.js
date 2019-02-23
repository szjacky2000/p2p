 $(document).ready(function(){

        var countdown   = 10;
        var send_obj    = $("#sendVerifySmsButton");
        var templateId  = 2;

        function settime(obj) {
            if (countdown == 0) {
                obj.attr('disabled',false);
                countdown = 10;
                return;
            } else {
                obj.attr('disabled',true);
                obj.html("重新发送(" + countdown + ")");
                countdown--;
            }
            setTimeout(function() {
                    settime(obj) }
                ,1000)
        }

        function send(phone){

            $.ajax({
                headers : {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                url     : '{{url('sms')}}',
                type    : 'post',
                data    : 'phone='+ phone + '&templateId=' + templateId,
                success : function (data) {
                    alert('验证码发往你的手机 测试信息是：' + data.message);
                }
            });

        }

        send_obj.click(function(){
            var phone = $("input[name='phone']").val();
            if(''== phone) return;
            settime(send_obj);
            send(phone);
        });

    });