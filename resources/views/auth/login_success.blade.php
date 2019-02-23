@extends('layouts.same')
@section('title', 'login success page')
@section('content')
    <form>
        @csrf
        <div id="signin_box1">
            <div class="box_c1">
                <div class="signin_dl1">
                    <div class="signin_dl_header1">
                        <p>欢迎回来,</p>
                        <p>{{ isset($_COOKIE['phone'])?$_COOKIE['phone']:'' }}</p>
                        <img src="../img/huiyuan.png"/>
                    </div>
                    <div class="signin_dl_top1">
                        <p>可用余额:0.00元</p>
                        <p>您还未开通存管账户！立即开通</p>
                        <img src="../img/huiyuan1.png"/>
                    </div>
                    <div class="signin_dl_bottom1">
                        <button><a href="{{url('loan')}}">我要出借</a></button>
                        <button><a>我要充值</a></button>
                    </div>
                </div>
            </div>
        </div>
    </form>

@endsection
