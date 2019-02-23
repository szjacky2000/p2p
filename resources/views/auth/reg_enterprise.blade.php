@extends('layouts.same')
@section('title', 'enterprise register page')

@section('content')
                    <form method="POST" action="{{ route('reg_3') }}">
                        @csrf
                        <div id="register_box">
                            <div class="register_c">
                                <div class="register_top0">
                                    <p class="register1_top1">企业实名认证</p>
                                </div>
                                <div class="register_bottom0">
                                    <div class="register_left">
                                        <div class="register2_left_header">
                                            <p class="register2_left_header_p"><span>*</span><span>公司名称</span></p>
                                            <p class="register2_left_header_p1"><span>*</span><span>营业执照号</span></p>
                                            <p class="register2_left_header_p2"><span>*</span><span>营业执照</span></p>
                                        </div>
                                        <div class="register2_left_top">
                                            <input class="register2_input1" type="text" name="name" id="" value="{{ old('name') }}" placeholder="请输入公司名称"/>
                                            <input class="register2_input2" type="text" name="business_license_num" id="business_license_num" value="{{ old('business_license_num') }}" placeholder="请输入营业执照号"/>
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
                    </form>

@endsection