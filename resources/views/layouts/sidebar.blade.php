
	@foreach($modules as $key => $value)
		@if(0 == $value['pid'])
		   <p>{{$value['name']}}</p>
		   <ul>
		@foreach($modules as $k => $v)
			@if($v['pid'] == $value['id'])
				  <li><a href="/{{$v['url']}}">{{$v['name']}}</a></li>
			@endif
		@endforeach
		   </ul>
		@endif
	@endforeach
