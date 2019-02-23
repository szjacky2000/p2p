<div id="head_1">
	<div class="head_1_left">
		<p>欢迎致电:400-136-8288 服务时间: 9:00 - 18:00</p>
	</div>
	<div class="head_1_right">
		<ul class="rig_ul">
			<li><a href="#">新手指引</a></li>
			<li><a href="#">帮助中心</a></li>
			<li><a href="#">借贷知识普及教育</a></li>
			<li><a href="{{url('about/profile')}}">关于我们</a></li>
			<li><a href="#">安全保障</a></li>
		</ul>
	</div>
</div>
<div id="head_2">
	<div class="head_2_box">
		<div class="logo">
			<a href="#">
				<img src="../img/pc_logo.png"/>
			</a>
		</div>
		<div class="nav">
			<ul class="nav_ul">
				<li><a href="/" class="a_color">首页</a></li>
				<li><a href="#">我要投标</a></li>
				<li><a href="#">我要发标</a></li>
				<li><a href="#">信息披露</a></li>
				<li><a href="#">珠宝商城</a></li>				
			</ul>
		</div>
		<div class="signin_2">
			@guest
				<a href="{{ route('login') }}">{{ __('登录') }}</a>
				<a href="{{ route('reg_1') }}">{{ __('注册') }}</a>
			@endguest
            @if(auth()->user())
            		<a>{{ isset($_COOKIE['name'])?$_COOKIE['name']:'' }}</a>
                    <a href="{{ route('exit') }}">{{ __('退出') }}</a>
            @endif
		</div>
	</div>			
</div>