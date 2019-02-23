<?php
/**
 * Created by PhpStorm.
 * User: jacky
 * Date: 19-1-11
 * Time: 上午11:29
 */
//use Auth;
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/com_pc.css" />
    <link rel="stylesheet" href="../css/bid.css" />
    <title></title>
</head>
<body>
<div id="head">

</div>
<div id="bid_img">
    <img src="../img/banner.png"/>
</div>
<div id="fb">
    <h4>借款流程 四部到位<span></span></h4>
    <div class="fblc_1">
        <dl>
            <dt>01</dt>
            <dd class="dd_top">在线申请借款</dd>
            <dd><img src="../img/fb1.png"/></dd>
        </dl>
        <p class="xright"><img src="../img/left.png"/></p>
        <dl>
            <dt>02</dt>
            <dd class="dd_top">申请资料审核</dd>
            <dd><img src="../img/fb2.png"/></dd>
        </dl>
        <p class="xright"><img src="../img/left.png"/></p>
        <dl>
            <dt>03</dt>
            <dd class="dd_top">资料审核通过</dd>
            <dd><img src="../img/fb3.png"/></dd>
        </dl>
        <p class="xright"><img src="../img/left.png"/></p>
        <dl>
            <dt>04</dt>
            <dd class="dd_top">借款成功到账</dd>
            <dd><img src="../img/fb4.png"/></dd>
        </dl>
    </div>
    <h4>快速借款申请<span></span></h4>
    <div class="fblc_2">
        <form method="POST" action="{{ url('loan/add') }}">
            @csrf

        <div class="fblc_left">
            <p>
                <span>借款金额</span>
                <label><input type="number" name="amount" id="" value="{{ old('amount') }}" placeholder="请输入您要的借款金额"/>元</label>
            </p>

            @if (false == Auth::check())
            <p>
                <span>您的姓名</span>
                <label><input type="text" name="name" id="" value="{{ old('name') }}" placeholder="请输入您的真实姓名"/></label>
            </p>
            @endif


            <p>
                <span>所在地区</span>
                <label style="border: none;padding: 0;">
                    <select name="addr">
                        <option value="gd">广东省</option>
                    </select>
                    <select>
                        <option>深圳市</option>
                    </select>
                    <select>
                        <option>罗湖区</option>
                    </select>
                </label>
            </p>
        </div>
        <div class="fblc_right">
            <p>
                <span>借款期限</span>
                <label style="width: 200px;"><input type="number" name="period" id="" value="{{ old('period') }}" placeholder="请输入借款的期限" style="width: 150px;"/></label>
                <select name="mortgage" style="width: 50px;margin-left: 27px;margin-top: 5px;">
                    <option value="1">天</option>
                    <option value="2">月</option>
                </select>
            </p>


            @if (false == Auth::check())
            <p>
                <span>手机号码</span>
                <label><input type="number" name="phone" id="" value="{{ old('phone') }}" placeholder="请输入您的手机号码"/></label>
            </p>
            @endif

            <p>
                <span>借款类型</span>
                <label style="border: none;padding: 0;">
                    <a href="" class="fblc_bg">珠宝抵押</a>
                    <a href="" >车辆抵押</a>
                    <a href="" style="margin: 0;">房产抵押</a>
                </label>
            </p>
        </div>
            <input type="submit" value="申请借款" class="fblc_bt" />
        </form>
    </div>
    <h4>常见问题<span></span></h4>
    <div class="fblc_3">
        <div class="fblc_wt">
            <p class="fblc_wtt1">1、借款审批一般要多少时间?</p>
            <p class="fblc_wtt2">依托我司大数据风控体系审批，最快1-3天出审核结果。具体审批时间根据不同产品而定。</p>
        </div>
        <div class="fblc_wt">
            <p class="fblc_wtt1">3、还款方式有哪些?</p>
            <p class="fblc_wtt2">不同借款产品分别支持一次洗还本付息、先息后本、等额本息、等本等息等多种还款方式。</p>
        </div>
        <div class="fblc_wt">
            <p class="fblc_wtt1">2、借款额度是多少?</p>
            <p class="fblc_wtt2">不同借款产品额度范围有一定的差别，具体额度可擦各产品详情页。</p>
        </div>
        <div class="fblc_wt">
            <p class="fblc_wtt1">4、借款需支付那些费用?</p>
            <p class="fblc_wtt2">借款成功后，需支付借款产生的利息、服务费等，具体收费明细根据不同产品而定。</p>
        </div>
    </div>
</div>
<div id="foot">
</div>
</body>
</html>
