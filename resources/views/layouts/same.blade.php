<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8" />
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" type="text/css" href="../css/com_pc.css"/>
	<link rel="stylesheet" type="text/css" href="../css/tab.css"/>
	<link rel="stylesheet" type="text/css" href="../css/signin.css"/>
	<link rel="stylesheet" type="text/css" href="../css/register.css"/>
	<link rel="stylesheet" type="text/css" href="../css/layer.css"/>
	<script type="text/javascript" src="../js/jq.js" ></script>
	<script type="text/javascript">			
			$(function(){
				    $(".register_top0 a").off("click").on("click",function(){
				       var index = $(this).index();
				       $(this).addClass("on").siblings().removeClass("on");
				       $("#contentBox .box").eq(index).addClass("active").siblings().removeClass("active");
				     });
		     });
            $(document).ready(function(){
                var re_exp = 60, expire_time = 60;
                var send_obj    = $("#sendVerifySmsButton");
                var templateId  = 1;

                function settime(obj) {
                    if (expire_time == 0) {
                        obj.attr('disabled',false);
                        expire_time = re_exp;
                        return;
                    } else {
                        obj.attr('disabled',true);
                        obj.html("重新发送(" + expire_time + ")");
                        expire_time--;
                    }
                    setTimeout(function() {
                            settime(obj) }
                        ,1000)
                }
                function is_empty(){
                    var phone = $("input[name='phone']").val();
                    var agreement = $("input[name='agreement']").prop("checked");
                    if(''== phone || false == agreement ) {
                        return;
                    }
                }
                function send(phone){
                    $.ajax({
                        headers : {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                        url     : '{{url('sms')}}',
                        type    : 'post',
                        data    : 'phone='+ phone + '&templateId=' + templateId + '&expire_time=' + re_exp,
                        success : function (data) {
                            alert('验证码已发往你的手机,请查收!');
                        }
                    });

                }
                send_obj.click(function(){
                    var phone = $("input[name='phone']").val();
                    var agreement = $("input[name='agreement']").prop("checked");
                    if(''== phone || false == agreement ) {
                        return;
                    }
                    // var _token = $("input[name='_token']").val();
                    settime(send_obj);
                    send(phone);
                });
                var net_checked = $("#net_checked");
                //检测手机短信号
                net_checked.click(function(){
                    submit();
                });

                //检测是否曾经注册过
            });
	</script>	
</head>
<body>
@include('layouts.header')
@yield('content')
@include('layouts.footer')
</body>
</html>