//内页侧面导航
$(function(){

	// 当屏小余等余991的时候navbox2收起，点击i时候navbox2展开
	  function aaa (){
	  	 var pmW = $(window).width();
	  	 if ( pmW <= 991 ){
	  	 	$(".neiye .navbox").hide();
	  	 }else{
	  	 	$(".neiye .navbox").show();
	  	 }
	  }

	  aaa();
	  $(window).resize(function(){
	  	aaa();
	  })

	  $(".neiye .menu i").click(function(){
	     	if ( $(".neiye .navbox").is(':hidden') ){
	     		$(".neiye .navbox").slideDown();
	     	}else{
	     		$(".neiye .navbox").stop().slideUp();
	     	}
	  })



	  // 点击一级导航时二级导航收缩隐藏

	   $(".neiye .navbox .nav1").click(function(){
	    $(this).next(".neiye .navbox ul").slideToggle(300).siblings(".neiye .navbox ul").slideUp(500);
	  });


	   // 一级导航选中状态
	    $(".neiye .navbox .nav1").click(function(){
	    $(".neiye .navbox .nav1").removeClass("active");
	    	$(this).addClass("active");
	  	})

	    // 二级导航选中状态
	  	$(".neiye .navbox ul a").click(function(){
	    $(".neiye .navbox ul a").removeClass("active");
	    	$(this).addClass("active");
	  	})
});






//首页的关于我们 三个圆形 点击过后
$(function(){
			$(".navbox02 .navli").click(function(){
			$(".navbox02 .navli").removeClass("active");
			$(this).addClass("active");
		  });  
		});