$(document).ready(function() {
	
 	//搜索
 	$(function(){
	$("#search").click(function(e){
		e.stopPropagation();
	})
	$("#search-closed").click(function(){
		$("#search-main").stop().slideUp({
			duration: 300,
			easing: "swing"
		})
		$("#search-btn").removeClass("active");
	})
	$("#search-btn").click(function(e){
		e.stopPropagation();
		$(this).toggleClass("active");
		$("#search-main").stop().slideToggle({
			duration: 500,
//			easing: "easeOutElastic"
		})
	})
	$(".search-type").click(function(e){
		e.stopPropagation();
		$("#search-type-chose").stop().slideToggle({
			duration: 800,
//			easing: "easeOutElastic"
		})
	})
	$("#search-type-chose li").click(function(){
		$(this).addClass("active").siblings().removeClass("active");
		$("#search-type-this").text($(this).html());
		$(this).parent().stop().hide();
		$("#search-text").focus();
	})
	
	//阻止冒泡
	$(document).on("click",function(){
		$("#search-type-chose,#search-main").hide();
		$("#search-btn").removeClass("active");
	});
	})
 

});


$(document).ready(function() {
		
	/*Jquery Mmenu*/
	$("#mmenu").mmenu({
		"extensions": [
        	"effect-menu-slide",
        	"effect-listitems-slide",
            "pagedim-black"
        ],
		"offCanvas": {
			position: "right"
		}
	}).css("opacity","1");
});


document.body.addEventListener('touchstart', function(){ });