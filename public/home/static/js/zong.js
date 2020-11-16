//1、banner轮播控制
$(function(){
        var bannerswiper = new Swiper('.banner .swiper-container', {
            speed:500,//一个滑动的时间
            autoplay : 5000,//总体要多少时间滑完
            autoplayDisableOnInteraction : false,
            loop:true,
            pagination : '.banner .swiper-pagination',//这个说明要圆点
            paginationClickable :true,//这个说明要圆点
            prevButton:'.banner .swiper-button-prev',//这是说明有左箭头
            nextButton:'.banner .swiper-button-next',//这是说明有右箭头
            })

        $('.banner').mouseover(function(){ //控制左右箭头
            bannerswiper.stopAutoplay()
        })
        $('.banner').mouseout(function(){ //控制左右箭头
            bannerswiper.startAutoplay()
        })
	})

// 2、PC端导航下拉缓冲效果
$(function(){
	$(".nav li").hover(function(){
		$(this).find(".nav-zi").stop().slideDown();	
	},function(){
		$(this).find(".nav-zi").stop().slideUp();	
	})
})
// PC端导航下拉缓冲效果结束


//3、手机端导航展开关闭按钮
$(function(){
		
		$(".ydd_btn").click(function(){
				if($(this).hasClass('click')){
						$(this).removeClass("click");
				} else{
						$(this).addClass("click");
				}
		});
		$(".ydd_btn").hover(function(){
				$(this).addClass("hover");	
		},function(){
				$(this).removeClass("hover");	
		});
		$(".ydd_btn").bind("click",function(){
				$(".sjdnav").slideToggle();	
		});
});




//4、等比例缩放
$(function(){
		function imgs (){
			/*imgs3*/
			var imgbox3W= $(".shipin .imgbox").width();
			$(".shipin .imgbox").css("height",imgbox3W*0.73+"px");
			
			/*imgs4*/
			var imgs4W= $(".video-box .tu").width();
			$(".video-box .tu").css("height",imgs4W*0.65+"px");
			
			/*imgs5*/
			var imgs5W= $("").width();
			$("").css("height",imgs5W*0.7+"px");
		}

		imgs();	
		$(window).resize(function(){
			imgs();	
		});
})


//5、选项卡js
$(function(){
    $(".anbox .an").hover(function() {
        var _this = $(".anbox .an").index(this);
        $(".anbox .an").removeClass("active");
		$(this).addClass("active");
        $(".contbox .cont").hide();
        $(".contbox .cont").eq(_this).show();
    });
	
	$(".anbox1 .an1").hover(function() {
        var _this = $(".anbox1 .an1").index(this);
        $(".anbox1 .an1").removeClass("active");
		$(this).addClass("active");
        $(".contbox1 .cont1").hide();
        $(".contbox1 .cont1").eq(_this).show();
    });
	
 });
	
	

//6、网站底部热点js
$(function(){
	$('#tabBar .clickbtn').click(function(){
		if( $('#tabBar .navigation').hasClass('active') ){
			$('#tabBar').removeClass('active');
			$('#tabBar .clickbtn').removeClass('active').addClass('on');
			$('#tabBar .navigation').removeClass('active');
		}else{
			$('#tabBar').addClass('active');
			$('#tabBar .clickbtn').addClass('active').removeClass('on');
			$('#tabBar .navigation').addClass('active');
		}
	})
})



//产品的轮播JS
$(function(){
        var swiper1 = new Swiper('.swiper1 .swiper-container', {
            slidesPerView :3,//产品的一排个数
            speed:500,
            autoplay : 3000,
            spaceBetween : 50,//每个产品之前的间距
            autoplayDisableOnInteraction : false,
            observer: true, //修改swiper自己或子元素时，自动初始化swiper
            observeParents: true, //修改swiper的父元素时，自动初始化swiper
            prevButton:'.swiper1 .swiper-button-prev',//这是说明有左箭头
            nextButton:'.swiper1 .swiper-button-next',//这是说明有右箭头
            breakpoints: {
                991: {
                    slidesPerView: 3,
                    spaceBetween : 20,
                },
                767: {
                    slidesPerView: 2,
                    spaceBetween : 12,
                },
                600: {
                    slidesPerView: 2,
                    spaceBetween : 12,
                },
            }
        })

        var swiper2 = new Swiper('.swiper2 .swiper-container', {
            slidesPerView :4,//产品的一排个数
            speed:500,
            autoplay : 3000,
            spaceBetween : 20,//每个产品之前的间距
            autoplayDisableOnInteraction : false,
            observer: true, //修改swiper自己或子元素时，自动初始化swiper
            observeParents: true, //修改swiper的父元素时，自动初始化swiper
            prevButton:'.swiper2 .swiper-button-prev',//这是说明有左箭头
            nextButton:'.swiper2 .swiper-button-next',//这是说明有右箭头
            breakpoints: {
                991: {
                    slidesPerView: 3
                },
                767: {
                    slidesPerView: 2,
                    spaceBetween : 12,
                },
                600: {
                    slidesPerView: 2,
                    spaceBetween : 12,
                },
            }
        })
        
    })


// 新闻部分
$(".news .left .wenzi").click(function(){
  $(".news .left .wenzi").removeClass("active");
  $(this).addClass("active");
})


$(".news .right .wenzi").click(function(){
  $(".news .right .wenzi").removeClass("active");
  $(this).addClass("active");
})
