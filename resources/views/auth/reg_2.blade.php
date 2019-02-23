@extends('layouts.same')
@section('title', 'register page')

@section('content')

                    <form method="POST" action="{{ route('reg_3') }}">
                        @csrf
                        <div id="register_box">
                            <div class="register_c">
                                <div class="register_top0">
                                    <p class="register1_top1">个人实名认证</p>
                                    <p class="register1_top2">先去逛逛></p>
                                </div>
                                <div class="register_bottom0">
                                    <div class="register_left1">
                                        <div class="register_left_header">
                                            <p class="register1_left_header_p"><span>*</span><span>真实姓名</span></p>
                                            <p class="register1_left_header_p1"><span>*</span><span>身份证号</span></p>
                                        </div>
                                        <div class="register_left_top">
                                            <input class="register1_input1" type="text" name="name" value="{{ old('name') }}" id="" value="" placeholder="请输入您的真实姓名"/>
                                            <input class="register1_input2" type="text" name="idn" value="{{ old('idn') }}" id="" value="" placeholder="请输入您的身份证证件号"/>

                                        </div>
                                        <div class="register_left_bottom">
                                            <button  class="register_top_div0" type="submit">
                                                {{ __('下一步') }}
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

@endsection