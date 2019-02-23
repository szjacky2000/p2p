
	$(function(){
				
				//先获取轮播图的数据
				$.get("json/lunbotu.json", function(data){
					//console.log(d); 
					
					var arr = data;
					
					for (var i=0; i<arr.length; i++) {
						var obj = arr[i];
						
						$("<li><img src="+ obj.img +" ></li>").appendTo("#listr1");
						var li = $("<li>"+ (i+1) +"</li>").appendTo("#listr2");
						
						if (i==0) {
							li.addClass("active");
						}
					}
					
					//轮播
					lunbo();
				})
				
				//jq轮播图
				function lunbo(){
					
					var listr1 = $("#listr1");
					var listr2 = $("#listr2");
					var li1 = $("#listr1 li");
					var li2 = $("#listr2 li");
					
					//复制第一张图到最后
					li1.first().clone(true).appendTo(listr1);
					
					//
					var size = $("#listr1 li").size();
					listr1.width(1264*size);
					
					//开启定时器
					var i = 0;
					var timer = setInterval(function(){
						i++;
						move();
					}, 2000);
					
					function move(){
						
						if (i < 0) {
							listr1.css("left", -1264*(size-1));
							i = size-2;
						}
						
						if (i >= size){
							listr1.css("left", 0);
							i = 1;
						}
						
						listr1.stop().animate({left:-i*1264}, 500);
						
						li2.eq(i).addClass("active").siblings().removeClass("active");
						if (i == size-1) {
							li2.eq(0).addClass("active").siblings().removeClass("active");
						}
					}
					
					//上一页
					$("#prev").click(function(){
						i--;
						move();
					})
					
					//下一页
					$("#next").click(function(){
						i++;
						move();
					})
					
					li2.mouseenter(function(){
						i = $(this).index();
						move();
					})
					
					$("#boxr").hover(function(){
						clearInterval(timer);
					}, 
					function(){
						timer = setInterval(function(){
							i++;
							move();
						}, 2000);
					})
				}
				
			})
				
	
			