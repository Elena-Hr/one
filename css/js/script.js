$(function(){
	//Effects
	$(".puff_effect").on("click", function(){
       $(".pic1").effect("puff",{
       	  percent: 200
       }, 2000);
	});
	$(".bounce_effect").on("click", function(){
       $(".pic2").effect("bounce",{
       	  direction: 'left',
       	  distance: 50,
       	  times: 7,
       	  mode: 'hide'
       }, 2000);
	});
	$(".explode_effect").on("click", function(){
       $(".explode").effect("explode",{
       	  pieces: 4
       	}, 2000, function(){
       		$(this).effect("explode", {
       			pieces: 4,
       			mode: 'show'
       		}, 2000);
       	});
	});
	//show/hide
	$(".btn_show").on("click", function(){
		$(".pic3").show("bounce",{
			direction: 'left',
       	  distance: 50,
       	  times: 7
       	 
		},2000);
	});
	$(".btn_hide").on("click", function(){
		$(".pic3").hide("drop",{
			direction: 'left'
       	 
		},2000);
	});
	$(".btn_show1").on("click", function(){
		$(".effect_show").show("explode",{
			pieces: 9
       	 
		},2000);
	});
	$(".btn_hide1").on("click", function(){
		$(".effect_show").hide("shake",{
			direction: 'right',
			distance: 50,
			times: 7
       	 
		},2000);
	});
	//Add class, Remove Class
	$(".ad_class").on("click", function(){
		$(".div").addClass("anim", 2000);
	});
	$(".rm_class").on("click", function(){
		$(".div").removeClass("anim", 2000);
	});
	//Switch class
	$(".sw_class").on("click", function(){
		$(".div1").switchClass("div1","anim",2000);
	});
	//Color Animation
	$(".btn_anim").on("click", function(){
		$(".animate").animate({
			"fontSize": "26px",
			"color": "white",
			"backgroundColor": "blue",
			"width": "350px"
		}, 3000); 
	});
	//Accordion
	$(".accord").accordion({
		active: false,
		collapsible: true,
		heightStyle: "content"

	}); 
	//Tabs
	$(".tabs").tabs({
		active: 1,
		collapsible: true,
		heightStyle: "auto"
	});
});