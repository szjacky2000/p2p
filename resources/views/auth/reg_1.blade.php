@extends('layouts.same')
@section('title', 'register page')
@section('content')
        <form method="post" action="{{ route('reg_2') }}">
            @csrf
            <div id="register_box">
                <div class="register_c">
                    <div class="register_top0">
                        <a class="register1_top1 on">个人用户</a>
                        <a class="register2_top2">企业用户</a>
                    </div>
                    <div id="contentBox">
                        <div class="register_bottom0 box active">
                            <div class="register_left">
                                <div class="register_left_header">
                                    <p class="register_left_header_p"><span>*</span><span>手机号码</span></p>
                                    <p class="register_left_header_p1"><span>*</span><span>登录密码</span></p>
                                </div>
                                <div class="register_left_top">
                                    <input class="register_input1" type="text" name="phone" value="{{ old('phone')| 18948197961 }}" placeholder="请输入手机号码"/>
                                    <div id="position1">手机号不合法</div>
                                    <input class="register_input2" type="password" name="password" value="" placeholder="请输入登录密码" autocomplete="123456" />
                                    <div id="position2">登录密码不合法</div>
                                    <input name="check_code" type="number" class="register_input3" required placeholder="请输入手机验证码"/>
                                    <button type="button" id="sendVerifySmsButton"  class="register_input3_span">
                                        <a>{{ __('手机发送验证码') }}</a>
                                    </button>
                                </div>
                                <div class="register_left_bottom">
                                    <input class="register_top_input4" type="checkbox" > <p class="register_left_bottom_p">我已阅读并同意<a href = "javascript:void(0)" onclick = "document.getElementById('light').style.display='block';document.getElementById('fade').style.display='block'">《金抽屉投资协议》</a></p>
                                    <button type="submit" class="register_top_div0">下一步</button>
                                </div>
                            </div>
                            <div class="register_right">
                                <img src="../img/linqu.jpg"/>
                            </div>
                        </div>

                        <div class="register_bottom0 box">
                            <div class="register_left">
                                <div class="register2_left_header">
                                    <p class="register2_left_header_p"><span>*</span><span>公司名称</span></p>
                                    <p class="register2_left_header_p1"><span>*</span><span>营业执照号</span></p>
                                    <p class="register2_left_header_p2"><span>*</span><span>营业执照</span></p>
                                </div>
                                <div class="register2_left_top">
                                    <input class="register2_input1" type="text" name="name" value="{{ old('name') }}" placeholder="请输入公司名称"/>
                                    <input class="register2_input2" type="text" name="business_license_num" value="{{ old('business_license_num') }}" placeholder="请输入营业执照号"/>
                                    <input type="file" class="bank_a0" name="file" id="file" style="opacity: 0;" />
                                    <label for="file" class="bank_a"></label>
                                </div>
                                <div class="register2_left_bottom">
                                    <button type="submit" class="register2_top_div0">
                                        {{ __('下一步') }}
                                    </button>
                                </div>
                            </div>
                            <div class="register_right">
                                <img src="../img/linqu.jpg"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        
		<div id="light" class="white_content"> <button class="light_button" href = "javascript:void(0)" onclick = "document.getElementById('light').style.display='none';document.getElementById('fade').style.display='none'">点这里关闭本窗口</button></div>
		<div id="fade" class="black_overlay"></div>
        <script type="text/javascript">
            
        </script>        
@endsection
