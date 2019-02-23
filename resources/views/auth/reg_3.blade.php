@extends('layouts.same')
@section('title', 'register page')

@section('content')

                    <form method="POST" action="{{ route('success_register') }}">
                        @csrf
                        <div id="register_box">
                            <div class="register_c">
                                <div class="register_top0">
                                    <p class="register1_top1">支付密码</p>
                                </div>
                                <div class="register_bottom0">
                                    <div class="register_left1">
                                        <div class="register_left_header">
                                            <p class="register1_left_header_p"><span>*</span><span>支付密码</span></p>
                                            <p class="register3_left_header_p1"><span>*</span><span>重复支付密码</span></p>
                                        </div>
                                        <div class="register_left_top">
                                            <input class="register1_input1" type="password" name="pay_password" value="{{ old('pay_password') }}" required placeholder="请输入您的支付密码"/>
                                            <input class="register1_input2" type="password" name="re_pay_password" value="{{ old('re_pay_password') }}" required placeholder="请重复输入支付密码"/>

                                        </div>
                                        <div class="register_left_bottom">
                                            <button class="register_top_div0" type="submit" id="net_checked">
                                                {{ __('完成注册') }}
                                            </button>
                                        </div>
                                    </div>
                                    <div class="register_right1">
                                        <img src="../img/linqu.jpg"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>


                    <script type="text/javascript">
                        $(document).ready(function(){

                            var net_checked = $("#net_checked");

                            net_checked.click(function(){
                                var p1 = $("input[name='pay_password']").val();
                                var p2 = $("input[name='re_pay_password']").val();

                                if(p2 == p1){
                                    net_checked.submit();
                                }
                                else {
                                    alert('重复密码不一致！');
                                    return false;
                                }


                            });

                        });
                    </script>

@endsection