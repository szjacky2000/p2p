@extends('layouts.master_no_sidebar')
@section('title', 'person center')
@section('content')

		<link rel="stylesheet" href="../css/personalcenter.css" />

		<div id="mysettings">
			<p class="my_top">我的金抽屉</p>
			<div class="set_bottom">
				<div class="setb_left">
					<ul class="left_ul_1">
						<li>账户资产</li>
						<li>累计收益</li>
						<li>推荐收益</li>
						<li>珠宝金</li>
					</ul>
					<ul class="left_ul_2">
						<li style="color: red;">￥8000.00</li>
						<li>￥99.00</li>
						<li>￥152.00</li>
						<li>￥142.00</li>
					</ul>
				</div>
				<div class="setb_right">
					<a href="#" class="cz_a">充值</a>
					<a href="#" class="tx_a">提现</a>
				</div>
			</div>					
		</div>
		<div id="bankcard">
			<p class="my_top">我的银行卡</p>
			<div class="bank_bottm">
				<img src="../img/bank.png"/>
				<img src="../img/bank.png"/>
				<a href="#" class="bank_a"></a>
			</div>
		</div>
		
		<div id="record">
			<p class="my_top">交易记录</p>
			<div class="record_bottm">
				<ul style="border-bottom: 1px solid #CCCCCC;">
					<li>收支</li>
					<li>本次余额</li>
					<li>类型</li>
					<li class="sm">说明</li>
					<li class="li_time">时间</li>
				</ul>

				<ul>
					<li class="bgc_bl">-17501.00</li>
					<li>0.00</li>
					<li>投资成功</li>
					<li class="sm">[抵押宝]D20160719-02投资成功，扣除-17501.00元</li>
					<li class="li_time">2018-07-30 14:33:33</li>
				</ul>
				<ul>
					<li class="bgc_re">+10,000.00</li>
					<li>0.00</li>
					<li>投资成功</li>
					<li class="sm">通过线上充值10,000元</li>
					<li class="li_time">2018-07-30 14:33:33</li>
				</ul>

			</div>
			<div class="load">
				<a href="">更多加载</a>
			</div>
		</div>

		<div id="cover_1" style="display: none;">
			<div class="cover_box" style="width: 800px;margin-left: -400px;">
				<h3>在线充值</h3>
				<div class="cbo_1">
					<span class="cbo_left">网银渠道</span>
					<div class="cbo_right">
						<a class="cn_bl cn_color">上海普东发展银行</a>
						<a class="cn_bl">中国农业银行</a>
						<a class="cn_bl">交通银行</a>
						<a class="cn_bl">中国农业银行</a>
						<a class="cn_bl">交通银行</a>
						<a class="cn_bl">中国农业银行</a>
						<a class="cn_bl">交通银行</a>
						<a class="cn_bl">中国农业银行</a>
						<a class="cn_bl">交通银行</a>
						<a class="cn_bl">中国农业银行</a>
						<a class="cn_bl">交通银行</a>
						<a class="cn_bl">中国农业银行</a>
						<a class="cn_bl">交通银行</a>
					</div>	
				</div>
				<div class="cbo_2">
					<span class="cbo_left">可用余额</span>
					<span class="cbo_left">20.00元</span>
				</div>
				<div class="cbo_2">
					<span class="cb_left" style="text-align:center;">提现金额</span>
					<label class="cb_right cb_inp" >
						<input type="text" name="" id="" value="" placeholder="请输入提现金额" class="inp_2"/>元
					</label>
				</div>
				<a href="" class="cb_ti" style="margin-top: 20px;">提交</a>	
			</div>
		</div>


		<div id="cover_2" style="display: none;">
			<div class="cover_box">
				<h3>添加银行卡</h3>
				<div class="cblr_1">
					<span class="cbo_left">开户人姓名</span>
					<span class="cbo_left">罗其万</span>
				</div>
				<div class="cblr_1">
					<span class="cbo_left">银行卡号</span>
					<input type="" name="" id="" value="" class="sel_2" placeholder="请输入银行卡号"/>
					<span class="cbo_left">选择银行</span>
					<select class="sel_3"/><option>请选择</option></select>
				</div>
				<div class="cblr_1">
					<span class="cbo_left">开户所在地</span>
					<select class="sel_3"/><option>请选择</option></select>
					<input type="" name="" id="" value=""  class="sel_2" placeholder="请输入开户支行的名称" style="margin-left: 10px;width: 340px;"/>					
					
				</div>
				<div class="cblr_1">
					<span class="cbo_left">手机验证码</span>
					<input type="" name="" id="" value="" class="sel_2" placeholder="请输入验证码" style="width: 110px;"/>
					<span class="cbo_fa">发送验证码</span>

				</div>
				<a href="" class="cb_ti" style="margin-top: 50px;">提交</a>	
			</div>
		</div>

		<div id="cover_3" style="display: none;">
			<div class="cover_box">
				<h3>提现申请</h3>
				<ul class="cb_ul">
					<li>
						<span class="cb_left">选择银行卡</span>
						<label class="cb_right" >
							<select class="sel_1">
								<option>请选择</option>
								<option>1择</option>
								<option>请2</option>
							</select>
						</label>
					</li>
					<li>
						<span class="cb_left">提现金额</span>
						<label class="cb_right cb_inp">
							<input type="text" name="" id="" value="" placeholder="请输入提现金额" class="inp_2"/>元
						</label>
					</li>
					<li>
						<span class="cb_left">到账时间</span>
						<label class="cb_right"><span class="cb_time">隔天</span></label>
					</li>
					<li>
						<span class="cb_left">到账金额</span>
						<label class="cb_right"><a class="" style="color: red;">0.00</a>元<a class="" style="font-size: 12px;">(预计扣除手续费0.00元)</a></label>
					</li>
								
				</ul>
				<a href="" class="cb_ti">提交</a>	
			</div>
		</div>



<script type="text/javascript">
	$(document).ready(function(){

	    var tx    = $(".tx_a");
	    var cz    = $(".cz_a");
	    var bank  = $(".bank_a");
    

	    function send(){
	    	alert('tx');
	    }

	    tx.click(function(){
	        // send();
	        $("#cover_3").show(); 
	    });

	    cz.click(function(){
	        // send();
	        $("#cover_1").show(); 
	    });

	    bank.click(function(){
	        // send();
	        $("#cover_2").show(); 
	    });



	});
</script>

@endsection

