<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="../js/jquery.min.js"></script>
        <script src="../js/laravel-sms.js"></script>
    </head>
    <body>

    <form method="POST" action="{{ route('register') }}">
        @csrf
        <input id="phone" type="phone" name="phone" value="18948197961" required>
        <button id="sendVerifySmsButton">{{ __('手机发送验证码') }}</button>
    </form>

    <script>
        $('#sendVerifySmsButton').sms({
            //laravel csrf token
            token       : "{{csrf_token()}}",
            //请求间隔时间
            interval    : 60,
            //请求参数
            requestData : {
                //手机号
                mobile : function() {
                    alert($('input[name=phone]').val());
                    // return $('input[name=phone]').val();
                }
                //手机号的检测规则
                //mobile_rule : 'mobile_required'
            }
        });
    </script>

    </body>
</html>