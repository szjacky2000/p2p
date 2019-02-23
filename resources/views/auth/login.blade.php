@extends('layouts.same')
@section('title', 'login page')
@section('content')
    <div id="signin_box">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div id="signin_box">
                <div class="box_c">
                    <div class="signin_dl">
                        <p class="signin_top">登录金抽屉</p>
                        <input class="signin_top_input1" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" type="text" name="phone" id="phone" value="" placeholder="请输入手机号码" required autofocus/>
                        @if ($errors->has('phone'))
                            <span class="invalid-feedback" role="alert"><strong>{{ $errors->first('phone') }}</strong></span>
                        @endif
                        <input class="signin_top_input2" type="password" name="password" value="" id="password" placeholder="请输入密码" />
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert"><strong>{{ $errors->first('password') }}</strong></span>
                        @endif
                        <input class="signin_top_input3" type="text" name="captcha" id="" value="" placeholder="请输入验证码" required/>

                        <img class="signin_top_div thumbnail captcha" src="{{ captcha_src('flat') }}" onclick="this.src='/captcha/flat?'+Math.random()" title="点击图片重新获取验证码">


                        @if($errors->has('captcha'))
                            <div class="col-md-12">
                                <p class="text-danger text-left"><strong>{{$errors->first('captcha')}}</strong></p>
                            </div>
                        @endif


                        <div class="signin_bottom">
                            <input class="signin_top_input4" type="checkbox" name="autoLogin" ><a class="signin_top_a">记住账号</a>
                        </div>

                        <button type="submit" class="signin-bottom" style="cursor:pointer">
                            {{ __('立即登入') }}
                        </button>


                        <div class="signin-bottom_div">
                            <p class="signin-bottom_p"><a href="#" class="signin-bottom_a2">忘记密码</a><a href=" {{ route('reg_1') }}" class="signin-bottom_a3">没有账号？</a><span class="signin-bottom_a4">免费注册</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
